<?php

$pass=$_GET['password'];
$data=array('@','#','$','A','X','Y','%');
$password=0;
for($a=1;$a<=$pass;$a++)
{
    $rand= rand(0, 6);
    echo $password=$data[$rand];
}
