<?php

class Router {
    /**
     * @var string
     */
    private string $uri;
    
    /**
     * @var string
     */
    private string $gh_main;

    /**
     * @return void
     */
    public function __construct() {
        // Setting github main URL
        $this->gh_main = "https://raw.githubusercontent.com/narukoshin/blog/main";
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
     * @param string $name
     * @return void
     */
    private function to_topic($name){
        $name = $this->from_kebab($name);

        $topic_url = sprintf("%s/%s/readme.md", $this->gh_main, str_replace(" ", "%20", $name));

        if ($this->status_code($topic_url) == 200) {
            // What will happen if the topic exist?
            echo "stuff exists";

            // TODO: I need to create a template for twitter cards
        } else {
            // What will happen if the topic doesn't exist?
            echo "topic doesnt exist";
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
        $article_url    = sprintf("%s/%s/%s.md", $this->gh_main, str_replace(" ", "%20", $topic_name), str_replace(" ", "%20", $article_name));

        if ($this->status_code($article_url) == 200) {
            echo "stuff exists";
        } else {
            echo "article doesnt exist";
        }
    }
    /**
     * @param string $url
     * @return int status code
     */
    private function status_code($url){
        $headers = get_headers($url); 
        return intval(substr($headers[0], 9, 3));
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
}

new Router;