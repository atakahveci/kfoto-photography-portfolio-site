
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

<body style=" background: linear-gradient(to bottom, rgba(0, 0, 0, 0.212),rgba(0, 0, 0, 0.212)),
url(/Proje/img/bg-img.jpg) center repeat;">

<?php
require_once 'vtislem.php';
$yetkisi=$_SESSION['yetki'];
  if($yetkisi=="uye" || $yetkisi=="misafir" || !isset($_SESSION['yetki'])){
    session_destroy();
header('location:giris.php');
  }
?>
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
                <h2 style="color: #D3F2D2; margin-bottom:25px;">KFoto-Mesajlar</h2>
                

                <div class="hakdiv" style="margin-bottom: 150px; padding-top:15px; padding-bottom:1px; width:1000px; ">

                    <div style=" margin-bottom:30px;">
                        <h2 style="color: #f74337; text-align:center;margin-bottom:20px;font-size:20px; ">Mesajlar Listesi</h2>
                            

                        <?php       
  $db_conn= mysqli_connect('localhost','root','');
  mysqli_select_db($db_conn,'test');
  if ($db_conn->connect_error) {
      die("Connection failed: " . $db_conn->connect_error);
  } 
  
  $sorgu="select kullanici.ad, kullanici.soyad, kullanici.email, mesajlar.mesaj from kullanici INNER JOIN mesajlar ON mesajlar.kul_id=kullanici.id;";
  $sonuc=mysqli_query($db_conn,$sorgu);
  
        
?>
 

<form action="" method="POST" >
<div style="margin-bottom:25px;">
<p style="font-size:14px; color:white;">Bu alanda üye ve misafir kullanıcılarının admin kullanıcılarına iletişim sayfasından attıkları mesajlar mevcut.</p>
<p style="font-size:14px; color:white;">Aşşağıda görmüş olduğunuz arama alanında dilediğiniz bir kullanıcının bilgisini yazarak size atmış olduğu tüm mesajları listeleyebilirsiniz. </p>


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
                                            <td style="padding:45px"> 
                      
                               <span class="mail-sender" style="font-size:15px;"><?php echo $row['ad']; ?> <?php echo $row['soyad']; ?></span> <br>
                               <span class="mail-subject"style="font-size:14px;"> <?php echo $row['email']; ?></span><br> <br>
                               <span class="mail-message-preview"style="font-size:14px;"> <?php echo $row['mesaj']; ?></span>
                           
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
                            </form>
                        </div>

                       


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

               
                <button class="btnr" onclick="topFunction()" id="myBtn" title="Yukarı Çıkarır">
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