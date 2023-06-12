<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bali Kuliner</title>
        <link rel="stylesheet" type="text/css" href="indo.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    </head>
<body>
        <div class="medsos">
            <div class="container">
                <ul>
                    <li><a href="https://instagram.com/blgss_sdqii?igshid=ZDdkNTZiNTM="><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.tiktok.com/@balgissidqi?_t=8aaMYuDoLKM&_r=1"><i class="fa-brands fa-tiktok"></i></a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container">
             <h1><a href="indo.css">KURA ~KUlineR Asia~</a></h1>
             <ul>
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li class="active"><a href="menu.php">MENU</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                   
             </ul>
            </div>
</header>

        <div class="kuliner">
            <ul class="kuliner">
            <li><a href="ayambetutu.php">Ayam Betutu</a></li>
            <li><a href="jukutares.php">Jukut Ares</a></li>
            <li><a href="satekakul.php">Sate Kakul</a></li>
            <li><a href="nasilawar.php">Nasi Lawar</a></li>
            <li><a href="rujakbulung.php">Rujak Bulung</a></li>

            </ul>
    </div>
<style>
    *{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

a{
    color: inherit;
    text-decoration: none;
}
.medsos{
    padding: 20px 0;
     background-color: #FFB433;
}
.medsos ul li{
    display: inline-block;
    color: #fff;
    margin-right: 5px;
}
.container{
    width: 80%;
    margin: auto;
}

header h1{
    float: left;
    padding: 20px 0;
    color: #FFB433;
    margin-right: auto;
}

header ul{
    float: right;
}
header ul li{
    display: inline-block;
}
header ul li a{
    padding: 25px 20px;
    display: inline-block;
}
header ul li a:hover{
    background-color: #FFB433;
    color: #fff;
}
.active{
    background-color: #FFB433;
    color: #fff;
}


footer {
    padding: 20px 0;
    background-color: #AF7719;
}

body {
    margin:0;
	padding: 0;
	background: url(balibg2.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
.kuliner {
    font-family: 'Gill Sans';
    display: flex;
    list-style: none;
    gap: 65px;
    align-items: center;
    justify-content: center;
    margin-top: 23px;
    font-size: 35px;
    padding: 111px;
}
    
</style>
</body>
</html>