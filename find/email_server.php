<?php

$email=$_GET['email'];
$data=array("html","css","javascript");
if(in_array($email, $data)){
    echo 'found';
}else{
    echo' not found';
}