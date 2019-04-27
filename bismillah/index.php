<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="logo.png">
    <title>WARUNK SEBLAK HUHA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
   <!--
       Author : Laveda Nafis Arshanda
    -->
    <div class="content">
        <header>
            <center><img src="logo.png" width="100" height="100" float="center" alt=""></center>
            <br>
            <h1 class="judul" align="center">WARUNK SEBLAK HUHA</h1>
            <h3 class="deskripsi">Uji nyali mu disini!</h3>
        </header>

        <div class="menu">
            <ul>
                <li><a href="index.php?page=home">HOME</a></li>
                <li><a href="index.php?page=tentang">TENTANG KAMI</a></li>
                <li><a href="https://www.google.com/maps/search/seblak+malang/@-7.9619746,112.5965271,13z/data=!3m1!4b1">LOCATION</a></li>
                <li><a href="menu.php">BELI</a></li>
            </ul>
        </div>

        <div class="badan">

            <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];

                switch ($page) {
                    case 'home':
                        include "home.php";
                        break;
                    case 'tentang':
                        include "tentang.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }

            }else{
                include "home.php";
            }
            ?>
        </div>
    </div>
    <marquee bgcolor="black" behavior="scroll" direction="right" scrollamount="8"> <font face="Times New Rowman" 
color="silver" > &copy; Warunk Seblak HUHA Owner by : Laveda Nafis Arshanda | Copyright 2019 </font>
</marquee>
</body>
</html>