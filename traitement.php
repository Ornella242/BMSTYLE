<?php
require 'vendor/autoload.php';
use \Mailjet\Resources;
    include('db.php');
    if (isset($_POST['submit'])){
        if (isset($_POST['name-id']) && isset($_POST['email-id']) && isset($_POST['subject-id']) && isset($_POST['message-id'])) {

            if (!empty($_POST['name-id']) && !empty($_POST['email-id']) && !empty($_POST['subject-id']) && !empty($_POST['message-id'])){
            $nom =htmlspecialchars(addslashes( $_POST['name-id'])) ;
            $email = htmlspecialchars(addslashes($_POST['email-id'])) ;
            $subject = htmlspecialchars( addslashes($_POST['subject-id']));
            $message = htmlspecialchars(addslashes($_POST['message-id'])) ;
            $requete = $pdo->prepare("INSERT INTO contact( nom, email, sujet, texto) VALUES(?,?,?,?)");
            
                $mj = new \Mailjet\Client('9853c71534ee7d331d7dd04bea8fc761','5abb66eee363a4fe2ae5740e9c6a3a79',true,['version' => 'v3.1']);
                $body = [
                    'Messages' => [
                    [
                        'From' => [
                        'Email' => "bmstyle292@gmail.com",
                        'Name' => "Brunel"
                        ],
                        'To' => [
                        [
                            'Email' => "bmstyle292@gmail.com",
                            'Name' => "Brunel"
                        ]
                        ],
                        'Subject' => "Greetings from Mailjet.",
                        'TextPart' => "My first Mailjet email",
                        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
                        'CustomID' => "AppGettingStartedTest"
                    ]
                    ]
                ];
                $response = $mj->post(Resources::$Email, ['body' => $body]);
                $response->success() && var_dump($response->getData());


          
            if ($requete->execute(array($nom,$email,$subject,$message))) {
               
                header('Location: index.php?success=message envoyé avec succès');
             }
        }
    }
   
}

?>
  
