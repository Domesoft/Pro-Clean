<?php
     $_STE=$_POST['STE'];
     $_CP=$_POST['CP'];
     $_TEL=$_POST['TEL'];
     $_MEL=$_POST['MEL'];
     $_MSG=$_POST['MSG'];
	
     $to="dominique.jorion@outlook.fr";
     $subject="Contact depuis le site Pros-Clean";
	 
     $message = "Société: ";
     $message .= $_STE."\r\n";

     $message = "Code postal: ";
     $message .= $_CP."\r\n";

     $message .= "Téléphone: ";
     $message .= $_TEL."\r\n";

     $message .= "Email: ";
     $message .= $_MEL."\r\n";

     $message .= "Message: ";
     $message .= $_MSG."\r\n";
	 
	
     $headers = "From:".$_MEL."\r\n";

     if (mail($to,$subject,$message,$headers)==true)
        {
          header("location:http://www.domesoft.fr");
	  exit;
        }
        else
        {
          die("<hr/>L'envoi des données à échoué,");
        }
?>