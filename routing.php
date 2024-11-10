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
                $this->to_topic($parts[0]);
                break;
            case 2:
                // It's article
                $this->to_article($parts[0], $parts[1]);
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
        $name = ucfirst($name);
        $topic_url = sprintf("%s/%s/readme.md", $this->gh_main, $name);

        if ($this->statuss_code($topic_url) == 200) {
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
        echo "article";
    }
    /**
     * @param string $url
     * @return int status code
     */
    private function statuss_code($url){
        $headers = get_headers($url); 
        return intval(substr($headers[0], 9, 3));
    }
}

new Router;