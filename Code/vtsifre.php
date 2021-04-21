<?php  
session_start();
//vt bağlantısı
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'test');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 

else
{

$mail= $_POST['email'];
$adi = $_POST['ad'];

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
$sayi=password_generate(7);

$s="select id from kullanici where email='$mail' && ad='$adi'";
$sonuc=mysqli_query($db_conn,$s);
$num=mysqli_num_rows($sonuc);
$row = mysqli_fetch_assoc($sonuc);
if($num == 1){
   $duzenle="UPDATE kullanici SET sifre = '$sayi' WHERE id = '$row[id]'";
    mysqli_query($db_conn, $duzenle);
    
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "kfotografciligi@kfoto.online.com";
    $subject = "Yeni Şifreniz!";
    $headers = "From:" . $from;
    mail($mail,$subject,$sayi, $headers);
    echo "The email message was sent.";
    echo "<script type='text/javascript'>alert('Email hesabınızın bildirim kutusunu takip ediniz!');
    </script>";
    include("giris.php");     
}
else{  
    echo "<script type='text/javascript'>alert('böyle bir mail yok');
    </script>";
    include("kayit.php");
}
}
?>
