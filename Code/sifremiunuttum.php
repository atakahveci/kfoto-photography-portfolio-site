
<!DOCTYPE html>  
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#161616">
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>KFoto</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link
      href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"
      rel="stylesheet"
    />
    <link href="styles.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="/Proje/img/logo-img.png">
    <link href="bootstrap.min.css" rel="stylesheet">
  </head>
  <body
    style=" background: linear-gradient(to bottom, rgba(0, 0, 0, 0.212),rgba(0, 0, 0, 0.212)),
url(/Proje/img/bg-img.jpg) center repeat;"
  >
    <div class="bg">
      <header>
        <div class="container">
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
              <li>
                <a href="giris.php">Giriş Yap</a>
              </li>
              <li>
                <a href="kayit.php">Kayıt Ol</a>
              </li>
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
      <div class="container" style="margin-top:40px">
    <div class="row">

        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h1 style="text-align:center">
                        <img src="/Proje/img/logo-img.png" style="width:55px; height:55px; margin-bottom:15px;" alt="">

                    </h1>
                    <h5 style="text-align:center;color:white; font-size:14px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Şifremi Unuttum</h5>
                  
                        <form class="form-signin" method="post" action="vtsifre.php" >
                            <div class="form-label-group" style="color:white; font-size:15px">
                                <input type="text"  name="email"  placeholder="Email Adresiniz" required class="inputt">
                            </div>
                            <div class="form-label-group" style="color:white; font-size:15px">
                                <input type="text" name="ad"  placeholder="Adınız" required class="inputt">
                            </div>
                           
                             <div style="margin-bottom:15px;">
                             <p>  </p>
                             </div>
                            
                          
                            <button type="submit" name="sifremiunuttum" class="btnn" style="width:100%; text-align:center;  background-color: rgba(0, 0, 0, 0.2); color:white;">Yeni Şifre Al</button>
                            <hr class="my-4">
                        </form>

                    
                    <p style="text-align:center; color:white;font-size:10px; font-family:'Segoe UI'">Gireceğiniz email adresi ve adınız doğrulanır ise yeni şifreniz email adresinize gönderilecektir.</p>
                </div>
            </div>
        </div>
    </div>
</div>


      
    </div>
  </body>
</html>



