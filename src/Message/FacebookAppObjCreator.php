<?php

namespace App\Message;

use Facebook\Facebook;

class FacebookAppObjCreator{

    private $app_id;

    private $app_secret;
    
    private $default_graph_version;

    private $access_token;

    private $fb;
    
    public function __construct(){
        $this->app_id = '<APP_ID>';
        $this->app_secret = '<APP_SECRET>';
        $this->default_graph_version ='v8.0';
        $this->access_token = '<ACCEES_TOKEN>';

    }

    public function getFbInstance(): \Facebook\Facebook
    {
        return $this->fb = new \Facebook\Facebook([
            'app_id' => $this->app_id,
            'app_secret' => $this->app_secret,
            'default_graph_version' => $this->default_graph_version,
            'default_access_token' => $this->access_token, // optional
        ]);
    }
}