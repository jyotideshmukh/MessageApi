# Provides AMQP integration for Symfony Messenger using Rabbitmq

### Created Messages directory and created 3 src/Messages Directory

 MailNotification.php
 
 FacebookNotification.php
 
 SmsNotification.php
 
### Created Handlers for above these Messages in src/MessageHandler Directory
 
 MailNotificationHandler.php - save messages in Messages entity and sending message
 
 FacebookNotificationHandler.php - save messages in Messages entity and sending message
 
 SmsNotificationHandler.php - SMS not implemented yet
 
### Created Controllers
 
 MailController.php
 
 FacebookController.php
 
 SmsController.php
 
### In Controllers created action
 pushMailMessage - dependancy injection of  MessageBusInterface
 
 Routes are like
 
 <hostname>/sendmailmsg - for sening mails
 
 e.g
 https://127.0.0.1:8000/sendmailmsg
 
 <hostname>/sendmailmsg - for sening mails
 
 <hostname>/sendfbmsg - for sening fb message
 
### For Facebook messages created Facebook Application
 
 Installed Facebook php-sdk package
 
### using graph api library sending messages
 
 Created Facebook Object created in src/Message/FacebookAppObjCreator.php
 
 method   of  Obj FacebookAppObjCreator->getFbInstance() return  \Facebook\Facebook objected whoose parameters initialized in conctrctor as
 
         $this->app_id = '<APP_ID>';
         $this->app_secret = '<APP_SECRET>';
         $this->default_graph_version ='v8.0';
         $this->access_token = '<ACCEES_TOKEN>';
         
### Used RabbitMq using docker
 
 Created docker-compose.yaml
 
 Pulled rabbitmq on port 5672
 
### started conatainer

docker-composer up

### Php extention amqp installed and did settings in php.ini

### Set %env(RABBITMQ_DSN)%' in messenger.yml

### set rabbitMq DNS
RABBITMQ_DSN=amqp://guest:guest@localhost:5672/%2f/messages


Then run command
### symfony console messenger:consume async -vv
It starts sending messages


### Tried to create Message api using api API Platform
Created Messages entity

using  @ApiResource() created api for messages -

https://127.0.0.1:8000/api/

I suppose to create/convert above controllers in APi but didnt get that much time.

Also I have created Factory pattern and was trying to create PlatformConnector interface on which we are going to send message

This interface implemented in FacebookConnector, MailConnector, SmsConnector

Also I have created MessageSender as abstract class getPlatform as abstractom method and send message to send methos

    public function send($message): void
    {
        // Call the factory method to create a Product object...
        $paltform = $this->getPlatform();
        // ...then use it as you will.
        $platform->logIn();
        $platform->createMessge($message);
        $platform->sendMessge($message);
        $platform->logout();
    }
Also I have created MailPoster, FacebookPoster and SmsPoster - these three classes extends MessageSender class and implement thier own send message

### getPlatform returns factory object of platfom like

    public function getPlatform(): PlatformConnector
    {
        return new MailConnector($this->login, $this->password);
    }
    
    But I havent created MessageHandler for these factory classes so not used these classes of factory patter


 
 





 
 
 
 
 
  

 
