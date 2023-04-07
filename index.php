<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | Deneme</title>

    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="menu">
        <div id="logo">Logo</div>
        <nav>
            <a href=""><i class="fas fa-home icon"></i>Anasayfa</a>
            <a href=""><i class="fas fa-info icon"></i>Hakkımızda</a>
            <a href=""><i class="fas fa-graduation-cap icon"></i>Eğitimler</a>
            <a href=""><i class="fas fa-user-friends icon"></i>Ekip</a>
            <a href=""><i class="fas fa-map-pin icon"></i>İletişim</a>
        </nav>
    </section>

    <section id="anasayfa">
        <div id="black">

        </div>
        <div id="icerik">
            <h2>Banner</h2>
            <hr width=300 align=left>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat corrupti aliquam,
                animi ab similique possimus necessitatibus impedit numquam maiores inventore a
                ratione explicabo optio temporibus deserunt quam sint eaque accusamus!</p>
        </div>
    </section>
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="left">
                <h5 id="lefth5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5>
            </div>
            <div id="right">
                <span>L</span>
                <p id="pright">orem, ipsum dolor sit amet consectetur adipisicing elit. Illum impedit tenetur delectus
                    vero fugit beatae vel consectetur autem laudantium. Architecto quod facilis doloribus dignissimos
                    ipsum atque commodi velit impedit dicta.</p>
            </div>
            <img src="img/about.jpg" alt="" class="img-fluid mt100">
            <p id="pfinal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolorum enim quasi sint
                accusantium, nihil illo facilis distinctio voluptatibus ad sit maiores soluta minus, sapiente, repellat
                excepturi modi rem ipsam.</p>
        </div>
    </section>
    <section id="egitimler">
        <div class="container">
            <h3>Eğitimler</h3>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge=1.6>
                    <img src="img/trainings.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Eğitim Konusu</h5>
                    <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque adipisci
                        exercitationem a similique id autem laborum maiores tempore quasi.</p>
                </div>
                <div class="card item" data-merge=1.6>
                    <img src="img/trainings.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Eğitim Konusu</h5>
                    <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque adipisci
                        exercitationem a similique id autem laborum maiores tempore quasi.</p>
                </div>
                <div class="card item" data-merge=1.6>
                    <img src="img/trainings.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Eğitim Konusu</h5>
                    <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque adipisci
                        exercitationem a similique id autem laborum maiores tempore quasi.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="ekip">
        <div class="container">
            <h3 id="teamh3">Ekip</h3>
            <div class="column-left-right">
                <img src="img/person3.jpg" alt="" class="img-fluid oval">
                <h4 class="team-name">Lorem</h4>
                <p class="team">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente molestiae labore, eveniet suscipit id fugit expedita voluptate deserunt voluptatum!
                </p>
                <div class="team-icon">
                    <a href="#"><i class="fab fa-facebook-f social"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                </div>
            </div>
            <div class="column">
                <img src="img/person2.jpeg" alt="" class="img-fluid oval">
                <h4 class="team-name">Lorem</h4>
                <p class="team">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente molestiae labore, eveniet suscipit id fugit expedita voluptate deserunt voluptatum!
                </p>
                <div class="team-icon">
                    <a href="#"><i class="fab fa-facebook-f social"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                </div>
            </div>
            <div class="column-left-right">
                <img src="img/person3.jpg" alt="" class="img-fluid oval">
                <h4 class="team-name">Lorem</h4>
                <p class="team">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente molestiae labore, eveniet suscipit id fugit expedita voluptate deserunt voluptatum!
                </p>
                <div class="team-icon">
                    <a href="#"><i class="fab fa-facebook-f social"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section id="iletisim">
        <div class="container">
            <h3 id="h3contact">İletişim</h3>
            <form action="index.php" method="post">
                <div id="contact-opaque">
                    <div id="form-group">
                        <div id="left-form">
                            <input type="text" name="name" placeholder="Ad Soyad" required class="form-conrtol">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-conrtol">
                        </div>
                        <div id="right-form">
                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-conrtol">
                            <input type="text" name="topic" placeholder="Konu Başlığı" required class="form-conrtol">
                        </div>
                        <textarea name="message" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-conrtol"></textarea>
                        <input type="submit" value="Gönder">
                    </div>
                    <div id="address">
                        <h4 id="address-title">Adres: </h4>
                        <p class="addressp">Lorem ipsum, dolor </p>
                        <p class="addressp">Lorem ipsum, </p>
                        <p class="addressp">Lorem ipsum, dolor </p>
                        <p class="addressp">555 555 55 55 </p>
                        <p class="addressp">Email: deneme@deneme.com</p>

                    </div>
                </div>
            </form>
            <footer>
                <div id="copy-right">2020 | Tüm Hakları Saklıdır</div>
                <div id="social-footer">
                    <a href="#"><i class="fab fa-facebook-f social"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                </div>
                <a href="#menu"><i class="fas fa-angle-up" id="up"></i></a>
            </footer>


        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>

</html>

<?php

include("connect.php");

if(isset($_POST["name"],$_POST["tel"],$_POST["mail"],$_POST["topic"],$_POST["message"]))
{
    $name_surname = $_POST["name"];
    $tel = $_POST["tel"];
    $email = $_POST["mail"];
    $topic = $_POST["topic"];
    $message = $_POST["message"];

    $add = "INSERT INTO iletisim(ad_soyad, tel, email, konu, mesaj) VALUES ('".$name_surname."','".$tel."','".$email."','".$topic."','".$message."')";
    if($connect->query($add)===true)
    {
        echo "<script>alert('Mesajınız Gönderilmiştir.')</script>";
    }
    else{
        echo "<script>alert('Mesajınız Gönderilirken Hata Oluştu.')</script>";
    }
}

?>