<?php
  session_start(); 
  if(isset($_SESSION['yetki'])){
       $yetkisi=$_SESSION['yetki'];  
  }
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
              if(isset($_SESSION['yetki'])){
        if($yetkisi=="uye" || $yetkisi=="misafir"){
                          echo "<li>
                              <a href=\"iletisim.php\">İletişim</a>
                                           </li>";
                    }
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
                        if(isset($_SESSION['yetki'])){
        if($yetkisi=="admin" ){
                          echo "<li>
                              <a href=\"izinyetkisi.php\">Yetki izinleri</a>
                                           </li>";
                    }
                       
                        }
                  ?>

                        <?php
                        if(isset($_SESSION['yetki'])){
        if($yetkisi=="admin" ){
                          echo "<li>
                              <a href=\"mesajlar.php\">mesajlar</a>
                                           </li>";
                    }
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
                <h2 style="color: #D3F2D2;">KFoto-Portfolyo</h2>
                <h1>Ekipman</h1>
                <div class="hakdiv" style="margin-bottom: 4px;">
                    <p>
                        Ekipman olarak yanımda kameramı, mikrofonumu, lenslerimi, ve
                        tripodlarımı taşıyorum. Daha sonra, çekim sonrası "post" edit
                        işlemleri için de Adobe Photoshop CC 2019 ile Adobe Lightroom
                        Classic'i birlikte kullanıyorum. Video çekimlerinin editlenmesi
                        için de Adobe Premiere Pro 2019 kullanıyorum. Aşağıda kullandığım
                        ekipmanların markalarını ve modellerini belirticem ve üzerine
                        basarak mağazadaki fiyatlarını görebilirsiniz.
                    </p>
                    <p style="font-weight: bold; color: #fdfdfd;">Kamera:</p>
                    <a target="_blank"
                        href="https://www.amazon.com/Nikon-D5200-Digital-Camera-Black/dp/B00AXTQQDS/ref=sr_1_2?keywords=nikon+d5200&qid=1575704786&sr=8-2">
                        <p style="color: #F74337;">Nikon D5200</p>
                    </a>
                    <p style="font-weight: bold; color: #fdfdfd;">Mikrofon:</p>
                    <a target="_blank"
                        href="https://www.amazon.com/Rode-VideoMicro-Compact-Camera-Microphone/dp/B015R0IQGW/ref=sr_1_2?crid=4QVGLFFRMN4G&keywords=rode+videomicro&qid=1575704950&sprefix=rode+videom%2Caps%2C265&sr=8-2">
                        <p style="color: #F74337;">Rode VideoMicro</p>
                    </a>
                    <p style="font-weight: bold; color: #fdfdfd;">Lensler:</p>
                    <a target="_blank"
                        href="https://www.amazon.com/Nikon-18-55mm-3-5-5-6G-AF-P-Zoom-Nikkor/dp/B0713TK7H4/ref=sr_1_1?crid=1EFCQXJGKUMX7&keywords=nikon+18-55mm&qid=1575705240&sprefix=nikon+18-55%2Caps%2C252&sr=8-1">
                        <p style="color: #F74337;">Nikon 18-55mm f/3.5-5.6G</p>
                    </a>
                    <a target="_blank"
                        href="https://www.amazon.com/Nikon-AF-S-NIKKOR-Focus-Cameras/dp/B001S2PPT0/ref=sr_1_1?keywords=nikon+35mm&qid=1575705341&sr=8-1">
                        <p style="color: #F74337;">
                            Nikon AF-S DX NIKKOR 35mm f/1.8G
                        </p>
                    </a>
                    <p style="font-weight: bold; color: #fdfdfd;">Tripodlar:</p>
                    <a target="_blank"
                        href="https://www.amazon.com/Portable-Compatible-Panorama-Lightweight-Aluminum/dp/B07N19MJV8/ref=sr_1_2_sspa?keywords=tripod&qid=1575705494&sr=8-2-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFNOVlJMU5FS0wxTjAmZW5jcnlwdGVkSWQ9QTA5OTc0MjdNQUExMkVYUVdRTUEmZW5jcnlwdGVkQWRJZD1BMDE1ODYxMDEwMEJZNkhJMFVKS0wmd2lkZ2V0TmFtZT1zcF9hdGYmYWN0aW9uPWNsaWNrUmVkaXJlY3QmZG9Ob3RMb2dDbGljaz10cnVl">
                        <p style="color: #F74337;">Büyük Tripod</p>
                    </a>
                    <a target="_blank"
                        href="https://www.amazon.com/GorillaPod-Compact-Ballhead-Mirrorless-Charcoal/dp/B074WFNNKY/ref=sr_1_5?crid=8BD5BOH3O5AM&keywords=gorilla+tripod&qid=1575705683&sprefix=gorilla%2Caps%2C259&sr=8-5">
                        <p style="color: #F74337;">Küçük Tripod</p>
                    </a>
                    <p>
                        Aşağıda bu Portfolyo da kullandığım lensin tanıtım videosu mevcut.
                    </p>
                </div>
            </div>
            <center>
                <div style="margin-top: 1px; margin-bottom: 100px;">
                    <video class="video" controls="controls" src="/Proje/img/lens.mp4"></video>
                </div>
            </center>
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