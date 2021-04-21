<?php  
//vt bağlantısı
session_start();
//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'test');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 
  
$mail= $_POST['email'];
$adi = $_POST['ad'];
$soyadi= $_POST['soyad'];
$sifresi= $_POST['sifre'];
$yetkisi= $_POST['yetki'];

$s="select * from kullanici where email='$mail'";
$sonuc=mysqli_query($db_conn,$s);
$num=mysqli_num_rows($sonuc);

if($num == 1){
    echo "<script type='text/javascript'>alert('Bu email ile daha önce hesap açılmıştır!');
    </script>";
    include("kayit.php");
}
else{
    $kaydet="INSERT INTO kullanici (email, ad, soyad, sifre) VALUES('$mail', '$adi', '$soyadi', '$sifresi')";
     if (mysqli_query($db_conn, $kaydet)) {
    $last_id = mysqli_insert_id($db_conn);
    mysqli_query($db_conn, $sonuncu);
    $yetki_kaydet="INSERT INTO yetkiler (yetki, kul_id) VALUES('$yetkisi', '$last_id')";
    mysqli_query($db_conn, $yetki_kaydet);
    header('location:kayit.php'); 
  } 
  
  
   
}

?>
