
<?php

try {
$conn=new PDO("mysql:host=localhost;dbname=db_country_ajax","root","");
//set the PDO error mode to exception
    $sql="SELECT *FROM tbl_country";
   $data=$conn->prepare($sql);
   $data->execute();



} catch (Exception $ex) {
    echo "connection failed:".$e->getMessage();
}
?>
<html>
    <head>
        <title>email text With ajax</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript">

            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            //    alert(xmlhttp);
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                alert(xmlhttp);
            }


            function selectCity(country_id)
            {
              //alert(given_text);
                //var obj = document.getElementById(objID);
                serverPage = 'city_server.php?country_id=' + country_id;
//                 alert(serverPage);
                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function ()
                {
//                 alert(xmlhttp.readyState);
     //             alert(xmlhttp.status);
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                     // alert(xmlhttp.responseText);
                        document.getElementById('city').innerHTML = xmlhttp.responseText;
                        //document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.send(null);
            }
             function selectvillage(city_id)
            {
            //  alert(city_id);
                //var obj = document.getElementById(objID);
                serverPage = 'village_server.php?city_id=' + city_id;
//                 alert(serverPage);
                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function ()
                {
//                 alert(xmlhttp.readyState);
     //             alert(xmlhttp.status);
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                     // alert(xmlhttp.responseText);
                        document.getElementById('village').innerHTML = xmlhttp.responseText;
                        //document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.send(null);
            }


        </script>

    </head>
    <body>
                    
        <select onchange="selectCity(this.value)">
            <option>Select country</option>
              <?php
              while($row=$data->fetch(PDO::FETCH_ASSOC))
              {
                  ?>
            <option value="<?php  echo $row['country_id'] ?>"><?php echo $row['country_name']  ?></option>
              <?php }?>
        </select>
        <select id="city" onchange="selectvillage(this.value)">
            <option>Select City</option>
               
        </select>
         
        <select id="village">
            <option> Select village</option>
           
        </select>
      
    </body>
</html>

