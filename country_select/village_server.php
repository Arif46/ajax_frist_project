<?php

try {
$conn=new PDO("mysql:host=localhost;dbname=db_country_ajax","root","");
//set the PDO error mode to exception

$city_id=$_GET['city_id'];
    $sql="SELECT *FROM tbl_village WHERE city_id=$city_id";
   $data=$conn->prepare($sql);
   $data->execute();



} catch (Exception $ex) {
    echo "connection failed:".$e->getMessage();
}
?>
<?php
while($row=$data->fetch(PDO::FETCH_ASSOC))
{
?>
<option><?php echo $row['village_name']?></option>
<?php }?>
