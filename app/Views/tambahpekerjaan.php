<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="/css/styleTambahPekerjaan.css" rel="stylesheet" type="text/css">
    <title>Tambah Pekerjaan | Labours</title>
</head>
<style>
    p {
        color: black;
    }
</style>

<body>
    <script>
        function previewImg() {
            const foto = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(foto.files[0]);

            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
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
    <div class="container mt-3">
        <button onclick="window.location.href = '/home';" class="btn-close btn-close-white me-3 mt-3" style="float: right;" aria-label="close"></button>
        <div class="mt-4 p-5 jumbotron text-white rounded" style="background-color: #0091A5;">
            <h1>Posting Pekerjaan</h1>
            <form class="form-horizontal" action="/tambahpekerjaan" method="post" enctype="multipart/form-data">
                <div class="mt-4 p-5 jumbotron text-white rounded" style="background-color: white;">
                    <div class="row g-2">
                        <div class="col">
                            <p> <label for="pesan">Nama Pekerjaan </label> <br>
                                <input type="text" class="form-control" placeholder="Masukan Nama Pekerjaan" name="nama">
                        </div>
                        <div class="col">
                            <p> <label for="pesan">Alamat </label> <br>
                                <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                        </div>
                        <div class="row g-2">
                            <div class="col">
                                <p> <label for="waktu">Waktu Pekerjaan </label> <br>
                                    <input type="text" class="form-control" placeholder="Masukan Durasi Waktu Pekerjaan" name="waktu">
                            </div>
                            <div class="col">
                                <p> <label for="deskripsi">Deskripsi Pekerjaan </label> <br>
                                    <textarea class="form-control" cols="30" rows="4" placeholder="Masukan Deskripsi Pekerjaan" name="deskripsi"> </textarea>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="/imgJob/preview.jpg" class="img-thumbnail img-preview" height="400" width="400">
                                </div>
                                <div class="col">
                                    <br>
                                    <br>
                                    <input class="btn" type="file" accept="image/*" id="foto" name="foto" value="Unggah Foto" onchange="previewImg()">
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"><input class="btn" style="background: #0091A5; color:white" type="submit" value="Posting"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>