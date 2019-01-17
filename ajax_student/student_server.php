<?php

try {
$conn=new PDO("mysql:host=localhost;dbname=db_student","root","");

$student_name=$_GET['name'];
if($student_name==NULL){
    $sql="SELECT *FROM tbl_student";
  $data=$conn->prepare($sql);
  $data->execute();
}else{
    $sql="SELECT *FROM tbl_student WHERE student_name Like '%$student_name%' ";
 $data=$conn->prepare($sql);
 $data->execute();
}

// $sql="SELECT *FROM tbl_student";
// $data=$conn->prepare($sql);
// $data->execute();
} catch (Exception $ex) {
    echo "connection failed:".$e->getMessage();
}
?>
<table border="1px solid black">
    <tr>
        <td>Student id</td>
        <td>Student name</td>
        <td>Student Email</td>
        <td>Student phone</td>
        <td>Student  address</td>
    </tr>
    <?php
    while($row=$data->fetch(PDO::FETCH_ASSOC))
    {
        ?>
    <tr >
        <td><?php echo $row['student_id']?></td>
        <td><?php echo $row['student_name']?></td>
        <td><?php echo $row['student_email']?></td>
        <td><?php echo $row['student_phone']?></td>
        <td><?php echo $row['Address']?></td>
    </tr>
    <?php }?>
</table>