<?php

$email=$_GET['email'];
$data=array("arifuzzamanarif42@gmail.com");
if(in_array($email, $data)){
    echo 'your email address already existis!';
}else{
    echo 'email address are availabe';
}