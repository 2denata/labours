<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamar Pekerjaan</title>
    <link href="/css/styleLamar.css" rel="stylesheet" type="text/css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');


        * {
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            margin: 0px;
            padding: 0px;
        }

        body {

            margin: 0px;
            padding: 0px;

        }

        .wrapper {
            width: 1100px;
            margin: auto;
            position: relative;

        }

        .logo a {
            font-size: 50px;
            font-weight: bold;
            float: left;
            color: black;
        }

        .menu {
            float: right;
        }

        nav {
            width: 100%;
            margin: auto;
            display: flex;
            line-height: 80px;
            /* position: sticky; */
            background-color: #0091A5;
            top: 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 0px 16px 0px 16px;
            text-decoration: none;
        }

        .btn-sgnUp {
            background-color: #EEEEEE;
            border-radius: 20px;
            margin-top: 15px;
            padding: 10px 20px;
            color: black;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-sgnUp:hover {
            background: rgb(0, 90, 83);
        }

        .loginSignUp {
            width: 400px;
            padding: 20px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
        }

        /* CSS Lamar Pekerjaan*/
        .lamarPekerjaan1 {
            width: 700px;
            height: 130px;
            padding: 180px;
            margin-top: -50px;
            border-radius: 10px;
            background-color: #0091A5;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            display: grid;
            justify-content: center;
        }

        .lamarPekerjaan2 {
            width: 900px;
            margin-top: -100px;
            height: auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #EEEEEE;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-evenly;
        }

        .judul {
            margin: 1px;
            text-align: left;
            margin-top: -150px;
            margin-bottom: auto;
            color: #EEEEEE;
        }

        .gambarKeterangan {
            text-align: center;
        }

        #job {
            margin: 20px;
            width: 300px;
            height: 200px;
            border-radius: 5px
        }

        .lamar {
            width: 300px;
            margin: 15px auto;
        }

        /*----------------------*/


        .form {
            width: 300px;
            margin: 20px auto;

        }

        form {
            width: 300px;

            /* margin:20px auto; */
        }

        .container {
            margin-top: 100px;
            display: flex;
            justify-content: center;
        }

        h1 {
            margin: 20px;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
        }

        p {
            text-align: center;
            margin: 10px;
        }

        form label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
        }

        input {
            /* width: 100%; */
            width: -webkit-fill-available;
            margin: 2px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        button {
            border: none;
            outline: none;
            padding: 8px;
            width: 100%;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 20px;
            background: rgb(0, 162, 255);
        }

        button:hover {
            background: rgb(0, 90, 83);
        }

        input:hover,
        select:hover {
            border-color: transparent;
            box-shadow: 0 0 0 3px rgb(0, 162, 255);
        }
    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo">
            <a href="/home"><img style="float:left; width: 170px; margin-top:14px;" href="/home" src="/logo/logo.png" alt="">

            </div>
            <div class="menu">
                <ul>
                    <li><a style="text-decoration: none;" href="/profil" class="akun"> <?= session()->get('username'); ?> <img style="border-radius:100%; width:30px; height:30px; object-fit:fill;" src="/userImg/<?= session()->get('user')['foto']; ?>"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="lamarPekerjaan1">
            <h1 class="judul">Lamar Pekerjaan</h1>
            <div class="lamarPekerjaan2">
                <div class="gambarKeterangan">
                    <img id="job" src="/imgJob/<?= $pekerjaan['foto']; ?>">
                    <h4><?= $pekerjaan['namaPekerjaan']; ?></h4>
                </div>
                <div>
                    <form class="lamar" action="/proseslamar/<?= $pekerjaan['kodePekerjaan']; ?>" method="post">
                        <div>
                            <label for="">Email</label>
                            <input type="text" placeholder="example@gmail.com" name="email" readonly value="<?= $email['email']; ?>">
                        </div>
                        <div>
                            <label for="">Nomor Telepon</label>
                            <input type="text" name="telepon" readonly value="<?= $email['nomor_telepon']; ?>">
                        </div>
                        <div>
                            <label for="">Pengalaman Kerja</label>
                            <div style="position: relative; display: inline-block;">
                                <input type="text" name="pengalaman" id="pengalaman" placeholder="">
                                <span style="position: absolute; top: 0; right: 5px; padding: 7px;">Bulan</span>
                            </div>
                            <script>
                                var input = document.getElementById('pengalaman');

                                input.addEventListener('keydown', function(e) {
                                    // Mengabaikan tombol non-angka kecuali tombol navigasi dan kontrol (misalnya panah, backspace)
                                    if (e.key !== "Backspace" && e.key !== "ArrowLeft" && e.key !== "ArrowRight" &&
                                        e.key !== "ArrowUp" && e.key !== "ArrowDown" &&
                                        e.key !== "Tab" && e.key !== "Delete" && e.key !== "Home" &&
                                        e.key !== "End") {
                                        // Mencegah input karakter selain angka
                                        if (!/[\d]/.test(e.key)) {
                                            e.preventDefault();
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <button style="background: #0091A5;">Lamar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>