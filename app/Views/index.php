<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labours</title>
    <link href="css/styleIndex.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- <nav>
        <div class="wrapper">
            <div class="logo">
            <div class="logo">
                 <img src="/logo/logo.png" alt=""> 
            </div>
            </div>
            <div class="menu">
                <ul>
                    <li><a class="scroll" href="#home">Home</a></li>
                    <li><a class="scroll" href="#about">About</a></li>
                    <li><a class="scroll" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav> -->
    <nav>
        <div class="wrapper">
            <div class="logo">
                <a href="/"><img style="float:left; width: 170px; margin-top:14px;" href="/home" src="/logo/logo.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <!-- <li><a href="login" class="btn-sgnUp">Login</a></li> -->
                    <li><a class="scroll" href="#home">Home</a></li>
                    <li><a class="scroll" href="#about">About</a></li>
                    <li><a class="scroll" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="row">
        <div class="content-wrapper">
            <section id="home">
                <div class="kolom">
                    <b>
                        <p class="deskripsi">Halo, Selamat Datang!</p>
                    </b>
                    <h2>Temukan Pekerjaan Sesuai Passion Anda</h2>
                    <p class="deskripsi">Kami dapat membantu anda untuk mencari pekerjaan dan juga
                        membantu dalam menyampaikan informasi tentang pekerjaan.</p>
                    <button onclick="window.location.href = '/login';" class="buttonLanding">Login</button>
                    <button onclick="window.location.href = '/signup';" class="buttonLanding">Sign Up</button>
                </div>
                <img class="img gambarLanding" src="/imgIndex/landingPageImg.jpg">
            </section>
            <section id="about">
                <img class="img gambarLanding" src="/imgIndex/LandingPageImg2.jpg">
                <div class="kolom">
                    <h2 class="H2about">Apa itu Labours?</h2>
                    <p class="deskripsiAbout">Labours merupakan sebuah website untuk membantu para penyedia jasa
                        untuk mencari tenaga kerja dan membantu pencari kerja untuk mendapatkan pekerjaan.
                        Pekerjaan yang ditawarkan merupakan pekerjaan </p>
                </div>
            </section>
            <section id="contact">
                <div class="kolomKontak">
                    <br>
                    <h2>Hubungi Kami</h2>
                    <form action="">
                        <div>
                            <label for="">Email</label>
                            <input type="text">
                        </div>
                        <div>
                            <label for="">Nama</label>
                            <input type="text">
                        </div>
                        <div>
                            <label for="">Pesan/Kritik/Saran</label>
                            <input class="inputSaran" type="textarea">
                        </div>
                        <button class="buttonKontak">Kirim</button>
                    </form>
                </div>
                <img class="img gambarKontak" src="/imgIndex/contact.jpg">
            </section>
            <div id="copyright">
                <div class="wrapper">
                    &copy; 2023. <b>Labours.</b> All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll  -->
    <script>
        const scrollLinks = document.querySelectorAll('.scroll');

        scrollLinks.forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();

                const targetId = link.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>