            <?php 
$user_name = get_user_by('id', $rest_request['$user_id']);

/*
        $message = "💎 Hi 👒 Mis/ 👔 Mr:". $user_name ."this is automated message sent you to Help You in Reset Your Password Secure and Fast \n <br />
            please copy this autho code and use it in the link below the token valid for only 5 minutes
            you can check the token expire and generate date from the page that generated your request
            autonation token: " 
            . $rest_request['autonation_token'] . 
            " \n <br /> 
             to reset your password follow this link https://dumy.com/reset_confirm?auth_id=" 
             .             $rest_request['token_id']             . "         .     '&umail=' .             $rest_request['user_mail'] .
            " \n <br />  at dumy.com we Will always support you💖 ";
            
*/

$subtoken = substr($rest_request['token_id'],0,4);

$message = '

        <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title></title>

        </head>
        <body>
            <div id="email-wrap" style="background: pink;color: black;
            padding:10px;">
            
            <p style="background:white;width:60%;color:black;text-align:center;">You Forget Your Password Do not Worry! </p>
            <p style="width:50%;text-align:justify;background-color:white;color:black;padding:10px;">💎 Hi 👒 Mis/ 👔 Mr:'
            . $user_name . 
            'this is automated message sent you to Help You in Reset Your Password Secure and Fast 
            please copy this Secuirty code and use it in the link below the token and code valid for only 5 minutes,</p><br>
            <h3> Code:<span style="font-size:26px;color:black;font-weight:bold;margin-left:10px;">' . $subtoken .  '</span></h3>
            <p>  Please follow this Link Below To reset your password <a href="' .
            
            
            'https://thebeautydemy.com/reset_confirm?auth_id=' .  $rest_request['token_id']  .'&umail=' . $rest_request['user_mail'] . "&token=" . $rest_request['autonation_token'] . 
            
            '">Reset Password Link</a>, </p>
            
            <br /><br />
            <p>at <a href="dumy.com">dumy</a> we Will always support you 💖 </p>
            </div>
        </body>
        </html>

';
            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r";
           // mail($rest_request['user_mail'],"dumy Reset Password request",$message,$headers);

       $mailResult = false;
      
       
       $mailResult = wp_mail( $rest_request['user_mail'],"dumy Reset Password request",$message,$headers ); 
        

       echo $mailResult;
       echo 'hi sent';
