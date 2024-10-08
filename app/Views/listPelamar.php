<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <title><?= $title; ?></title>
    <style>
        .daftarPekerjaan {
            width: 100%;
            height: 30em;
            background-color: #0091A5;
            border-radius: 5px;
            padding: 5%;
            overflow: auto;
        }

        ::-webkit-scrollbar {
            width: 10px;
            /* Lebar scrollbar */
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Warna latar belakang track */
        }

        /* Thumb */
        ::-webkit-scrollbar-thumb {
            background: #888;
            /* Warna thumb */
        }

        /* Mouse-over effects */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* Warna thumb saat dihover */
        }


        .deskripsiPekerjaan {
            width: 100%;
            height: 30em;
            background-color: #eee3ff;
            border-radius: 5px;
            padding: 1em;
            overflow: auto;
        }

        .pekerjaan {
            /* display: flex; */
            margin: 5px auto;
            margin-bottom: 10px;
            background-color: #ffffff;
            color: black;
            font-size: medium;
            overflow: hidden;
            border-radius: 5px;
            /* width: 30em; */
            height: 80px;
            text-align: left;
        }

        .pekerjaan>img {
            margin-right: 30px;
            float: left;
            /* object-fit: fill; */
            align-items: center;
            max-height: 100%;
            border-radius: 5px;

        }

        .pekerjaan:hover {
            background-color: #e6e6e6;
        }

        .test:hover {
            background-color: #000000;
        }

        .btn-primary {
            background-color: #0091A5;
        }

        .btn-primary:hover {
            background-color: #555;
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
                    <li><a href="/profil" class="akun"> <?= session()->get('username'); ?> <img style="border-radius:100%; width:30px; height:30px; object-fit:fill;" src="/userImg/<?= session()->get('user')['foto']; ?>" alt=""></a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row my-4">
            <div class="col-6 d-flex align-items-center">
                <h3 class="ms-3">List Pelamar</h3>
            </div>
        </div>

        <div class="row my-3">
            <div class="container bg-light p-auto">
                <div class="daftarPekerjaan">
                    <div class="row">
                        <?php foreach ($dataPelamar as $p) : ?>
                            <div class="col-4">
                                <div class="card mb-5" style="width: 18rem;">
                                    <img style="object-fit: fill;" height="200" src="/userImg/<?= $p['foto']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?= $p['nama']; ?></h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="bi bi-person-fill me-2"></i><?= $p['umur']; ?> Tahun</li>
                                        <li class="list-group-item"><i class="bi bi-envelope-at-fill me-2"></i><?= $p['email']; ?></li>
                                        <li class="list-group-item"><i class="bi bi-telephone-fill me-2"></i><?= $p['nomor_telepon']; ?></li>
                                        <li class="list-group-item"><i class="bi bi-calendar-day-fill me-2"></i>Pengalaman Kerja <?= $p['pengalaman']; ?> Bulan</li>
                                    </ul>
                                    <div class="card-body d-flex">
                                        <form action="/prosespelamar/<?= $p['kodePekerjaan']; ?>" method="post">
                                            <div class="d-flex">
                                                <input type="hidden" name="nik" value="<?= $p['nik']; ?>">
                                                <button type="submit" name="submit" value="terima" class="btn btn-success m-2">Terima</button>
                                                <button type="submit" name="submit" value="tolak" class="btn btn-danger m-2">Tolak</button>
                                            </div>
                                        </form>
                                    </div>
                                </div> <!--- card ---->
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>