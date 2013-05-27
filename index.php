<html>
    <head>
        <title>Aplikasi MADM dengan Metode TOPSIS untuk Kasus Pemilihan Lokasi Gudang</title>
        <style type="text/css">
            input:focus {
                background-color: pink;
            }
            body {
                background-image: url("bg.gif");
                background-repeat: repeat-x;
            }
            * {
                font-family: verdana;
            }
            #bungkusan {
                background-color: white;
                width: 960px;
                margin: 0 auto;
                padding: 20px;
                border-radius: 10px 10px 10px 10px;
                -moz-border-radius: 10px 10px 10px 10px;
                -khtml-border-radius: 10px 10px 10px 10px;
                -webkit-border-radius: 10px 10px 10px 10px;
                box-shadow: 0 0 25px #000000;
            }
            table {
                border-collapse: collapse;
            }
            table th,td {
                padding: 10px;
            }
            .inputan {
                width: 115px;height: 50px;padding: 5px;font-size: 15pt
            }
            .wwww {
                margin-top: 15px;
                font-size: 15pt
            }
            .wwww input {
                width: 80px;
                padding: 5px;
                font-size: 15pt
            }
            .samping ul {

            }
            .samping li {
                padding: 5px;
                list-style: none;
                float: left;
            }
            .Tabeldata {
                border-collapse: collapse;
                font-size: 10pt;
            }
            
            .Tabeldata tr:hover {
                background-color: pink;
            }
            .Tabeldata th,td {
                padding: 3px;
            }
            .tableMatrix td{
                
            }
        </style>
    </head>

    <body><br/><br/>
        <div id="bungkusan">
            <?php
            include 'koneksiDatabase.php';
            if (!empty($_GET['page'])) {
                if ($_GET['page'] == "data") {
                    include 'data.php';
                }
            } else {
                include 'input.php';
            }
            ?>

            <center><small>Created by Heru Purwito, Tsabit Rahman, Alfa Miftahul Huda</small></center>
        </div>
    </body>
</html>