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
        $this->app_id = '420840739316930';
        $this->app_secret = '8c5888d36fcfbd08fad0a24e262b979c';
        $this->default_graph_version ='v8.0';
        $this->access_token = 'EAAFZBwJ7GJMIBAPug4EUrXqihzZASZChPSoAimxBZANn0ZALWUgdo7XPhRz9ptsOAk0xyhBNbvxNW24Yg7fLQVcNOhs8G9YFiG9mifYgdhZBK2EQylHAVQdZBNfbZBYZCZBfJYf0SRjATIOSboRVvisFsLhXJnfnVcCtP7ma9AhQfgTrCZCjwsMmMlLngxAdZCInoF8ZD';

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