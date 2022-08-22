<?php

$name = $_POST['name']:

$email = $_POST['email'];

$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">";

$recipient = "saboor2772@gmail.com";

mail($recipient,$subject,$message,$mailheader)

or die("Error!");

echo"message send";

?>