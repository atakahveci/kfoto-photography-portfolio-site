<?php
  session_start(); 
  if(isset($_SESSION['yetki'])){
       $yetkisi=$_SESSION['yetki'];  
  }   
?>
<!DOCTYPE html>  <!-- index.html sayfası -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#161616" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>KFoto</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link
      href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"
      rel="stylesheet"
    />
    <link href="styles.css" rel="stylesheet" />
    <link href="styleslide.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="/Proje/img/logo-img.png" />
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>




/*Forms setup*/

.float-label{
    font-size:15px;
}


/*Content Container*/
.content-container {
    background-color:#fff;
    padding:15px 10px;
    margin-bottom:10px;
}

/*Compose*/
.btn-send{
    text-align:center;
    margin-top:20px;
}
/*mail list*/

ul.mail-list{
    padding:0;
    margin:0;
    list-style:none;
    margin-top:30px;
}

ul.mail-list li:last-child a{
    border-bottom:none;
}
ul.mail-list li a:hover{
    background-color:#DBF9FF;
}
ul.mail-list li span{
    display:block;
}
ul.mail-list li span.mail-sender{
    font-weight:700;
    color:#000;
}
ul.mail-list li span.mail-subject{
    color:#8C8C8C;
}
ul.mail-list li span.mail-message-preview{
    display:block;
    color:#A8A8A8;
}



</style>
  </head>
  <body
    style=" background: linear-gradient(to bottom, rgba(0, 0, 0, 0.212),rgba(0, 0, 0, 0.212)), url(/Proje/img/bg-img.jpg) center repeat;"
  >
    <div class="bg">
      <header>
        <div class="container" style="position: relative; margin-bottom: 25px;">
          <nav>
            <div class="menu-icons">
              <i class="icon ion-md-menu" style="color: #D3F2D2;"></i>
              <i class="icon ion-md-close" style="color: #D3F2D2;"></i>
            </div>
            <a href="index.php" class="logo">
              <img
                style="width: 4rem;height: 4rem;"
                src="/Proje/img/logo-img.png"
                alt=""
              />
            </a>
            <ul class="nav-list">
              <li>
                <a href="index.php">Ana Sayfa </a>
              </li>
              <li>
                <a href="#"
                  >Portfolyo
                  <i class="icon ion-md-arrow-dropdown"></i>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="portre.php" target="_blank"
                      >Portre Fotoğrafçılığı</a
                    >
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
                <a
                  href="https://www.instagram.com/kfotografciligi/?hl=tr"
                  target="_blank"
                >
                  <img
                    style="width: 4rem;
                        height: 4rem;
                        display: flex;
                        border-radius: 25%;"
                    src="/Proje/img/img-insta.png"
                    alt=""
                /></a>
              </li>
            </ul>
          </nav>
        </div>
      </header>

      <div id="sliderdiv">
        <slider>
          <slide>
            <h2 style="text-align:left;float:left;">Portre Fotoğrafçılığı</h2>
            <p>Kategori &#10137; 1</p></slide
          >
          <slide
            ><h2 style="text-align:left;float:left;">Gece Fotoğrafçılığı</h2>
            <p>Kategori &#10137; 2</p></slide
          >
          <slide
            ><h2 style="text-align:left;float:left;">Doğa Fotoğrafçılığı</h2>
            <p>Kategori &#10137; 3</p></slide
          >
          <slide
            ><h2 style="text-align:left;float:left;">Karışık</h2>
            <p>Kategori &#10137; 4</p></slide
          >
        </slider>
      </div>

      <div
        style="width: 100%; height: 300px; margin-bottom: 20px; margin-top: 40px;"
      >
        <div class="normaltext">
          <h2 style="color: #D3F2D2;">ana sayfa</h2>
         
          <h1>KFoto-Portfolyo</h1>
          <div
            style="display: inline-block; text-align: left; margin-bottom: 20px;"
          >
            <p>Web sitemi ziyaret ettiğiniz için teşekkürler!</p>
            <p>
              Kendi çalışmalarım ile ilgili duyuruları ve fotoğrafçılık ile
              ilgili haberleri ana sayfamdan takip edebilirsiniz.
            </p>
            <p>
              Eğer çalışmalarım ile ilgili sorularınız varsa misafir olarak kayıt olup bana iletişim panelinden ulaşabilirsiniz. &#x1F4F7;
            </p>
          </div>
          <br />
          
          <br />

          <div
            class="hakdiv"
            id="divhak"
            style="display: block; margin: 0 auto; margin-bottom: 30px;"
          >
            <h2 style="color: #D3F2D2; margin-bottom: 10px;">
              Haberler & İçerikler
            </h2>
            <p style="font-weight:550; color: #ebebebd0;">
              Portre Fotoğrafçılığı ile ilgili:
            </p>
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=x4uKf56DXeI"
              ><p style="color: #F74337;">
                1) 13 Yaratıcı Portre Fotoğrafçılığı Fikirleri.
              </p></a
            >

            <p style="font-weight:550; color: #ebebebd0;">
              Gece Fotoğrafçılığı ile ilgili:
            </p>
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=btDnWInQnps"
              ><p style="color: #F74337;">
                2) Düşük Işıkta Nasıl Daha İyi Fotoğraf Çekilir.
              </p></a
            >

            <p style="font-weight:550; color: #ebebebd0;">
              Pan Fotoğrafçılığı ile ilgili:
            </p>
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=rY-Dc3VnkT8"
              ><p style="color: #F74337;">
                3) Hareket Eden Objenin Pan Tekniği ile Çekilmesi.
              </p></a
            >

            <p style="font-weight:550; color: #ebebebd0;">
              Fotoğrafçılık Fikirleri:
            </p>
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=ineZXLbL7s8"
              ><p style="color: #F74337;">
                4) 100 Saniyede 10 Yaratıcı Fotoğraf Fikri.
              </p></a
            >

            <p style="font-weight:550; color: #ebebebd0;">Fotoğrafçılık:</p>
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=IvZM8GyHFs8"
              ><p style="color: #F74337;">
                5) Fotoğrafçılık ile Nasıl Para Kazanırım?
              </p></a
            >
          </div>



          
          <?php       
  $db_conn= mysqli_connect('localhost','root','');
  mysqli_select_db($db_conn,'test');
  if ($db_conn->connect_error) {
      die("Connection failed: " . $db_conn->connect_error);
  } 
  
  $sorgu="select kullanici.ad, kullanici.soyad, duyurular.duyuru from kullanici INNER JOIN duyurular ON duyurular.kul_id=kullanici.id;";
  $sonuc=mysqli_query($db_conn,$sorgu);
  
        
?>













          <div
            class="hakdiv"
            id="divhak"
            style="display: block; margin: 0 auto; margin-bottom: 85px;"
          >
          <h2 style="color: #D3F2D2; margin-bottom: 15px;">Duyurular</h2>
          <div style="margin-bottom:15px;">
<p style="font-size:14px; color:white;">Duyuruların ilk kısmında, hangi admin kullanıcımızın duyuruyu yazdığı yazmaktadır.</p>
<p style="font-size:14px; color:white;">Aşşağıda görmüş olduğunuz arama alanında dilediğiniz bir duyuruyu yazarak arayabilirisniz </p>


</div>
            <div class="container" >
           <div class="content-container clearfix"style="background-color:rgba(80, 80, 80, 0.11); border-radius:8px;">
               <div class="col-md-12">
               <input class="form-control" id="myInput" type="text" style="margin-bottom:10px"  placeholder="Ara..">
               <table class="table table-hover"  style="color: #FFFFFF;font-size:13px;">
                   <tbody id="myTable">
                   <ul class="mail-list">
                  
                                    <?php 
                                       while($row=$sonuc->fetch_assoc()):
                                        ?>
                                        <tr>
                                            <td style="padding:40px; 
        vertical-align: top;
        border-top: 1px solid #dee2e6;"> 
                      
                               <span class="mail-sender" style="font-size:15px;">Admin: <?php echo $row['ad']; ?> <?php echo $row['soyad']; ?></span> <br>
                               <span class="mail-subject"style="font-size:14px;">Duyurusu: <?php echo $row['duyuru']; ?></span><br> 
                               
                           
                        </td>
                                
                                        </tr>
                       
                                        <?php
                                        endwhile;
                                        ?>
                   </ul>
                   </table>
                            </tbody>
                   
               </div>
           </div>
       </div>

       <?php
                        if(isset($_SESSION['yetki'])){
        if($yetkisi=="admin" ){
                          echo " <center>
<button type=\"submit\"name=\"profil\" class=\"btnn\"
                        style=\"width:70%; text-align:center;  background-color: rgba(0, 0, 0, 0.2); color:white;\" onclick=\"window.location.href = 'duyuruekle.php';\">Duyuru Ekle</button>
</center>  ";
                    }
                        }
                
                         ?>


       
          </div>

          <?php
                        if(isset($_SESSION['yetki'])){
        if($yetkisi=="uye" ){
                          echo "
                                           
                                      <div
            class=\"hakdiv\"
            id=\"divhak\"
            style=\"display: block; margin: 0 auto; margin-bottom: 120px;\"
          >
            <h2 style=\"color: #D3F2D2; margin-bottom: 10px;\">Eski Duyurular</h2>
           
            <p style=\"color:#ebebebd0;\">
              KFoto-Portfolyo Doğa Fotoğrafçılığı Kategorisi yayınlandı &#10137;
              12 Aralık 2019
            </p>
            <p style=\"color:#ebebebd0;\">
              KFoto-Portfolyo Gece Fotoğrafçılığı Kategorisi yayınlandı &#10137;
              11 Aralık 2019
            </p>
            <p style=\"color:#ebebebd0;\">
              KFoto-Portfolyo Portre Fotoğrafçılığı Kategorisi yayınlandı
              &#10137; 10 Aralık 2019
            </p>
            <p style=\"color:#ebebebd0;\">
              KFoto-Portfolyo Web sitem yayınlandı &#10137; 9 Aralık 2019
            </p>
          </div> ";
      
                                           
                                           
                    }
                        }
                
                         ?>

         


        </div>
      </div>
      <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
      <button
        class="btn"
        onclick="topFunction()"
        id="myBtn"
        title="Yukarı Çıkarır"
      >
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
