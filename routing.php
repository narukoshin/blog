<?php

class Router {
    /**
     * @var string
     */
    private string $uri;
    /**
     * @var string
     */
    private string $gh_raw_url;
    /**
     * @var string
     */
    private string $gh_main_url;
    /**
     * @var string
     */
    private array $gh_meta_info;
    /**
     * @return void
     */
    public function __construct() {
        // Setting github main URL
        $this->gh_raw_url = "https://raw.githubusercontent.com/narukoshin/blog/draft";
        $this->gh_main_url = "https://github.com/narukoshin/blog/blob/main";
        $this->uri = ltrim($_SERVER['REQUEST_URI'], "/");

        // Checking how much parts do we have to decide it's article or topic for further processing
        $parts = explode("/", rtrim($this->uri, "/"));

        /**
            URL format: /<topic>/<article>
         */

        switch(count($parts)) {
            case 1:
                // It's topic
                $this->to_topic(strtolower($parts[0]));
                break;
            case 2:
                // It's article
                $this->to_article(strtolower($parts[0]), strtolower($parts[1]));
                break;
            default:
                // Normally this shouldn't happen.
                // Maybe in future when I will add more features.
        }
        return;
    }
    /**
     * This will redirect a user to the topic main page.
     *
     * @param string $topic_name
     * @return void
     */
    private function to_topic($name){
        $topic_name = $this->from_kebab($name);

        $topic_url_raw = sprintf("%s/%s/readme.md", $this->gh_raw_url, str_replace(" ", "%20", $topic_name));

        if ($this->status_code($topic_url_raw) == 200) {
            // What will happen if the topic exist?
            if ($meta = $this->metadata_parse($topic_url_raw)){
                $meta["url"] = sprintf("%s/%s/readme.md", $this->gh_main_url, str_replace(" ", "%20", $topic_name));
                $template = $this->load_template($meta);
                if ($template) {
                    echo $template;
                    return;
                } else {
                    header("Content-Type: application/json;charset=utf-8");
                    echo json_encode([
                        "error"             => [
                            "message"       => "Required metadata attributes are missing",
                            "article_url"   => $topic_url_raw
                        ]
                    ]);
                    http_response_code(400);
                    return;
                }
            } else {
                header("Content-Type: application/json;charset=utf-8");
                echo json_encode([
                    "error"             => [
                        "message"       => "No metadata was found",
                        "article_url"   => $topic_url_raw
                    ]
                ]);
                http_response_code(400);
                return;
            }
        } else {
            // What will happen if the topic doesn't exist?
            header("Content-Type: application/json;charset=utf-8");
            echo json_encode([
                "error"             => [
                    "message"       => sprintf("Topic '%s' does not exist", $topic_name)
                ]
            ]);
            http_response_code(404);
            return;
        }
    }
    /**
     * This will redirect a user to the article.
     *
     * @param string $topic
     * @param string $article
     * @return void
     */
    private function to_article($topic, $article){
        $topic_name     = $this->from_kebab($topic);
        $article_name   = $this->from_kebab($article, true);
        $article_url_raw    = sprintf("%s/%s/%s.md", $this->gh_raw_url, str_replace(" ", "%20", $topic_name), str_replace(" ", "%20", $article_name));

        if ($this->status_code($article_url_raw) == 200) {
            if ($meta = $this->metadata_parse($article_url_raw)) {
                $meta["url"] = sprintf("%s/%s/%s.md", $this->gh_main_url, str_replace(" ", "%20", $topic_name), str_replace(" ", "%20", $article_name));
                $template = $this->load_template($meta);
                if ($template) {
                    echo $template;
                    return;
                } else {
                    header("Content-Type: application/json;charset=utf-8");
                    echo json_encode([
                        "error"             => [
                            "message"       => "Required metadata attributes are missing",
                            "article_url"   => $article_url_raw
                        ]
                    ]);
                    http_response_code(400);
                    return;
                }
            } else {
                header("Content-Type: application/json;charset=utf-8");
                echo json_encode([
                    "error"             => [
                        "message"       => "No metadata was found",
                        "article_url"   => $article_url_raw
                    ]
                ]);
                http_response_code(400);
                return;
            }
        } else {
            header("Content-Type: application/json;charset=utf-8");
            echo json_encode([
                "error"             => [
                    "message"       => sprintf("Article '%s' does not exist", $article_name)
                ]
            ]);
            http_response_code(404);
            return;
        }
    }
    /**
     * @param string $url
     * @return int status code
     */
    private function status_code($url){
        $cwd = getcwd();
        $command = sprintf("%s/.nvm/versions/node/v23.1.0/bin/node ping.js %s", $cwd, escapeshellcmd(escapeshellarg($url)));
        $output_json = trim(shell_exec($command));
        $this->gh_meta_info = json_decode($output_json, true);

        echo $this->gh_meta_info;


    }
    /**
     * Parsing input from word1-word2-word3 to normal format "Word1 Word2 Word3".
     * 
     * @param string $name
     * @param bool $isarticle   for the article name we need only first word ucfirst.
     * @return string
     */
    private function from_kebab($name, $isarticle = false){
        $words = explode("-", $name);
        if (count($words) > 1) {
            $new_name = [];
            foreach ($words as $index => $word) {
                if ($isarticle && $index == 0) {
                    $new_name[] = ucfirst($word);
                } else if (!$isarticle) {
                    $new_name[] = ucfirst($word);
                } else {
                    $new_name[] = $word;
                }
            }
        } else {
            return ucfirst($name);
        }
        return implode(" ", $new_name);
    }
    /**
     * This function will parse article or topic invisible parameters and make it easier to access.
     * 
     * @param string $url
     * @return false|JSON Object
     */
    private function metadata_parse($url){
        $data = file_get_contents($url);
        if (preg_match("/\<\!\-\-\s*({.*})\s*\-\-\>/", $data, $matches)){
            return json_decode($matches[1], true);
        }
        return false;
    }
    /** 
     * This function will output a HTML template to show the cards in social media.
     * 
     * @param array $meta
     * @return bool
    */
    private function load_template(array $meta){
        // Check for required meta tags.
        $check = (function() use ($meta) {
            $required = ["title", "description", "image_url", "url"];
            foreach ($required as $key) {
                if (!array_key_exists($key, $meta)) {
                    return false;
                }
            }
            return true;
        })();

        if ($check){
            $meta = (object)$meta;
            return <<<HTML
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>{$meta->title}</title>
                    <meta name="og:image" content="{$meta->image_url}" />
                    <meta name="og:description" content="{$meta->description}" />
                    <meta name="og:title" content="{$meta->title}" />
                    <meta name="og:url" content="{$meta->url}" />
                    <meta name="og:site_name" content="blog.narukoshin.me" />
                    <meta name="og:type" content="blog" />

                    <meta http-equiv="refresh" content="3;url={$meta->url}">

                    <meta name="twitter:creator" content="@enkosan_p">
                    <meta name="twitter:url" content="{$meta->url}">
                    <meta name="twitter:card" content="summary_large_image">
                    <meta name="twitter:description" content="{$meta->description}">
                    <meta name="twitter:title" content="{$meta->title}">
                    <meta name="twitter:image" content="{$meta->image_url}">
                    
                </head>
                <body>
                    Redirecting to {$meta->url}
                </body>
                </html>
            HTML;
        }
        return false;
    }
}

new Router;

/**
 * こんにちは、ENKOです。
 * Music Producer・Composer・Songwriter, Multi-instrumentalist, Software Engineer, Security Tester
 * 
 * https://blog.narukoshin.me - blog. :)
 * https://x.com/enkosan_p - Twitter. :)
 * 
 * 2024
 */