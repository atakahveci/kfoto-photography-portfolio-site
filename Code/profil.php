<?php
  session_start();
  if(!isset($_SESSION['email'])){
    header('location:giris.php');
  }
  $yetkisi=$_SESSION['yetki'];
?>

<!DOCTYPE html> <!-- ekipman.html sayfası -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#161616">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>KFoto</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="/Proje/img/logo-img.png">
    <link href="bootstrap.min.css" rel="stylesheet">
</head>

<body style=" background: linear-gradient(to bottom, rgba(0, 0, 0, 0.212),rgba(0, 0, 0, 0.212)),
url(/Proje/img/bg-img.jpg) center repeat;">
    <div class="bg">
        <header>
            <div class="container">
                <nav>
                    <div class="menu-icons">
                        <i class="icon ion-md-menu" style="color: #D3F2D2;"></i>
                        <i class="icon ion-md-close" style="color: #D3F2D2;"></i>
                    </div>
                    <a href="index.php" class="logo">
                        <img style="width: 4rem;height: 4rem;" src="/Proje/img/logo-img.png" alt="" />
                    </a>
                    <ul class="nav-list">
                        <li>
                            <a href="index.php">Ana Sayfa </a>
                        </li>
                        <li>
                            <a href="#">Portfolyo
                                <i class="icon ion-md-arrow-dropdown"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="portre.php" target="_blank">Portre Fotoğrafçılığı</a>
                                </li>
                                <li>
                                    <a href="gece.php" target="_blank">Gece Fotoğrafçılığı</a>
                                </li>
                                <li>
                                    <a href="doga.php" target="_blank">Doğa Fotoğrafçılığı</a>
                                </li>
                                <li>
                                    <a href="karisik.php" target="_blank">Karışık Kategori</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="ekipman.php">Ekipman</a>
                        </li>
                        <li>
                            <a href="hakkinda.php" target="_blank">Hakkında</a>
                        </li>

                        <?php
                 if($yetkisi=="uye" || $yetkisi=="misafir"){
                          echo "<li>
                              <a href=\"iletisim.php\">İletişim</a>
                                           </li>";
                    }
                         ?>

                        <?php
                 if(isset($_SESSION['email'])){
                          echo "<li>
                              <a href=\"profil.php\">profil</a>
                                           </li>";
                    }
                         ?>

                        <?php
                 if($yetkisi=="admin" ){
                          echo "<li>
                              <a href=\"izinyetkisi.php\">Yetki izinleri</a>
                                           </li>";
                    }
                         ?>

                        <?php
                 if($yetkisi=="admin" ){
                          echo "<li>
                              <a href=\"mesajlar.php\">mesajlar</a>
                                           </li>";
                    }
                         ?>
                        <?php if(!isset($_SESSION['email'])){
                      echo "<li>
                    <a href=\"giris.php\">Giriş Yap</a>
                   </li>
                      <li>
                    <a href=\"kayit.php\">Kayıt Ol</a>
                    </li>";
                      }
                      ?>

                        <?php if(isset($_SESSION['email'])){
                         echo " <li>
                       <a href=\"cikis.php\">Çıkış yap</a>
                     </li>"; 
                        }
                       ?>

                        <li class="move-right">
                            <a href="https://www.instagram.com/kfotografciligi/?hl=tr" target="_blank">
                                <img style="width: 4rem;
                        height: 4rem;
                        display: flex;
                        border-radius: 25%;" src="/Proje/img/img-insta.png" alt="" /></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div style="width: 100%; height: 300px; margin-bottom: 20px; margin-top: 40px;">
            <div class="normaltext">
                <h2 style="color: #D3F2D2;">KFoto-Profil</h2>
                <h1> HOŞGELDİN </h1>

                <div class="hakdiv" style="margin-bottom: 150px; padding-top:15px">

                    <div style=" margin-bottom:30px;">
                        <h2 style="color: #D3F2D2; text-align:center;margin-bottom:20px;font-size:24px; ">Kullanıcı
                            Bilgileri</h2>
                        <center>
                            <img src="/Proje/img/profile.png" style="width:65px; height:65px; margin-bottom:20px;"
                                alt="">
                        </center>
                        <h5
                            style="text-align:center;color:white; font-size:14px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                            Email: <?php echo $_SESSION['email']; ?></h5>
                        <hr style=" border: 1px solid rgba(0, 0, 0, 0.315); margin-bottom:10px;">
                        <h5
                            style="text-align:center;color:white; font-size:14px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                            Ad: <?php echo $_SESSION['ad']; ?></h5>
                        <hr style=" border: 1px solid rgba(0, 0, 0, 0.315); margin-bottom:10px;">
                        <h5
                            style="text-align:center;color:white; font-size:14px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                            Soyad: <?php echo $_SESSION['soyad']; ?></h5>
                        <hr style=" border: 1px solid rgba(0, 0, 0, 0.315); margin-bottom:10px;">
                        <h5
                            style="text-align:center;color:white; font-size:14px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                            İzni: <?php echo $_SESSION['yetki']; ?></h5>
                        <hr style=" border: 1px solid rgba(0, 0, 0, 0.315); margin-bottom:10px;">
                    </div>

                    <?php
                 if($yetkisi=="uye" || $yetkisi=="admin"){
                          echo " <center>
<button type=\"submit\" name=\"profil\" class=\"btnn\"
                        style=\"width:70%; text-align:center;  background-color: rgba(0, 0, 0, 0.2); color:white;\" onclick=\"window.location.href = 'bilgiduzenle.php';\">Bilgilerimi
                        Düzenle</button>
</center>  ";
                    }
                         ?>

                    

                </div>
                <button class="btn" onclick="topFunction()" id="myBtn" title="Yukarı Çıkarır">
                    Yukarı
                </button>
                <footer class="FooterClass">
                    <h3>ALL images &copy; KFoto</h3>
                    <h3>kfotografciligi@gmail.com</h3>
                </footer>

                <script src="scripts.js"></script>
            </div>
</body>

</html>