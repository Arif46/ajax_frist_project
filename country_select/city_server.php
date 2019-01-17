<?php

try {
$conn=new PDO("mysql:host=localhost;dbname=db_country_ajax","root","");
//set the PDO error mode to exception

$country_id=$_GET['country_id'];
    $sql="SELECT *FROM tbl_city WHERE country_id=$country_id";
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
<option value="<?php echo $row['city_id']?>"><?php echo $row['city_name']?></option>
<?php }?>
