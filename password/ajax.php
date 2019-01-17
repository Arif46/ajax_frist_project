<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Password Generators With Ajax</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script type="text/javascript">

            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
//                 alert(xmlhttp); 
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//                alert(xmlhttp);

            }


            function passwordGen(given_text)
            {
//                alert(given_text);
                //var obj = document.getElementById(objID);
                serverPage = 'password_server.php?password=' + given_text;
//                 alert(serverPage);
                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function ()
                {
//                    alert(xmlhttp.readyState);
//                    alert(xmlhttp.status);
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
//                        alert(xmlhttp.responseText);
                        document.getElementById('res').innerHTML = xmlhttp.responseText;
                        //document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.send(null);
            }


        </script>

    </head>
    <body>
        Given Text:<input type="text" onkeyup="passwordGen(this.value)"> 
        
        <hr>
       <span id="res"></span>
    </body>
</html>
