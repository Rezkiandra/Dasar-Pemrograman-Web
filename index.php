<?php
$host       = "localhost";
$user       = "root";
$pwd        = "";
$dbase      = "apotek";
$koneksi    = mysqli_connect($host, $user, $pwd, $dbase);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Apotek Sahabat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="../php-kel1/css/index.css">
    <style>
        body {
            font-family: 'Karla', sans-serif;
            overflow: hidden;
        }

        #particles-js {
            background: linear-gradient(150deg, rgba(44, 127, 38, 1) 0%, rgba(76, 62, 103, 1) 53%, rgba(51, 87, 110, 1) 100%) fixed;    
            height: 100%;
            width: 100%;
        }

        .container-fluid {
            display: flex;
            justify-content: center;
            top: 280px;
        }
    </style>
</head>

<body>
    <div id="particles-js">
        <div class="container-fluid">
            <h1 class="display-6">Selamat Datang di Apotek Sahabat</h1>
        </div>
        <div class="container-fluid">
            <p class="lead">Kami Siap Melayani Anda Hingga 24 Jam</p>
        </div>
        <div class="container-fluid">
            <a href="../php-kel1/pelanggan.php">
                <button type="button" class="btn btn-light">Lebih Lanjut</button>
            </a>
        </div>
    </div>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" charset="utf-8"></script>
    <script src="../php-kel1/js/app.js"></script>

</body>

</html>