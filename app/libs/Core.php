<?php
/*
 * http://hostname/veeb/kontroller/meetod/parameeter(id)
 * $_GET['url'] = 'kontroller/meetod/parameeter(id)'
 * http://hostname/veeb/pages/show/19/02/2020
 */

class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = array();

    public function __construct()
    {
        $url = $this->getUrl();
        // set up the controller
        if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        echo '<pre>';
        print_r($url);
        echo '</pre>';
    }

    // get url from link and prepare for use
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}