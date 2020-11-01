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
        $this->access_token = 'EAAFZBwJ7GJMIBAJkW7UjYhZAPN93lOW30KqtAZBfeQ4kVm7NyZArOT2L2ikatqQkg89LBGZCYDwDuzQ2t5VZBG2Xu39X0LzuoAVjVT1ZAQ2vno53aPcfZCF0jZCbUo2mFGO0qihAGaxDplo9QJEplrsWTbLPEvjF8ksJr293Lpwq4rU7iNDy87h9gznRwUtaGWjKUfXvG9qQx8JUCRXZCJZBOBNSb6XLeVRLpLkEWNqpr1HLwZDZD';

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