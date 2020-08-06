<!DOCTYPE html>
<html>
 <head>
  <style>
h1 {text-align: center;}
h2 {text-align: center;}

  </style>
 </head>
<body>

<h1>HELLO WORLD!</h1>
<h2>WELCOME TO MY WEBSITE :)</h1>
 
 </body>
</html>

<pre>
<?php
$cf_domain_name=`cat /var/www/html/domain_name.txt`; 
echo <p style="text-align: right;"> </p> ME </br>;
echo <img src='https://${cf_domain_name}' height=340 width=220 style='float:right'/>;
?>
</pre>
<p><a href="https://www.linkedin.com/in/ashutosh-pandey-43b94b18b">Visit To My LinkedIn Profile :) </a></p>

<pre>
 <?php

print "IP_ADDRESS_OF_INSTANCE";


print `ifconfig`;
 ?>
 
</pre>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            background: linear-gradient(-45deg, rgb(201, 241, 19), rgb(250, 143, 202),  rgb(250, 211, 153));
        }

        div{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        div ul{
            display: flex;
            
            border-bottom: 10px solid rgb(112, 12, 228);
            box-shadow: 0 0 30px rgb(250, 36, 203);
        }
        div ul li{
            width: 60px;
            height: 60px;
            /* background-color: brown; */
            list-style: none;
            margin: 0px 10px;
            border-radius: 50px;
            animation: bouncingball 0.9s linear infinite;

        }

        @keyframes bouncingball{
            0%{transform: translateY(0);}
            50%{transform: translateY(-180px);}
            /* 75%{transform: translateY(0);} */
            100%{transform: translateY(0);}
        }
        ul li:nth-child(1){
            animation-delay: 0.3s;
            background:linear-gradient(-55deg, rgb(0, 255, 85), rgb(7, 226, 255));
        }
        ul li:nth-child(2){
            animation-delay: 0.5s;
            background:linear-gradient(-55deg, rgb(229, 255, 0), rgb(176, 7, 255));
        }
        ul li:nth-child(3){
            animation-delay: 0.6s;
            background:linear-gradient(-55deg, rgb(243, 2, 62), rgb(18, 248, 95));
        }
        ul li:nth-child(4){
            animation-delay: 0.4s;
            background:linear-gradient(-55deg, rgb(243, 2, 151), rgb(250, 169, 19));
        }
        ul li:nth-child(5){
            animation-delay: 0.7s;
            background:linear-gradient(-55deg, rgb(37, 250, 250), rgb(252, 113, 125));
        }
        ul li:nth-child(6){
            animation-delay: 0.6s;
            background:linear-gradient(-55deg, rgb(214, 248, 22), rgb(248, 102, 102));
        }
       
    </style>
</head>
<body>
    <div>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            
        </ul>
        
    </div>
    
</body>
</html>


