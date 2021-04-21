<?php  
session_start();
//vt bağlantısı
$usernameVal=$_REQUEST["email"];
//$passwordVAl=$_REQUEST["password"];
//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'test');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 

else
{
     $escapedPW = mysqli_real_escape_string($db_conn,$_REQUEST['sifre']);

     //hatirla checkboxu tıklandı ise kullanıcı veilerini cookie haline getiriyor.
 if (isset($_REQUEST['hatirla']))
   $escapedRemember = mysqli_real_escape_string($db_conn,$_REQUEST['hatirla']);

 $cookie_time = 60 * 60 * 24 * 30; // 30 days
  $cookie_time_Onset=$cookie_time+ time();
  if (isset($escapedRemember)) {
    
    setcookie("email", $usernameVal, $cookie_time_Onset);
    setcookie("sifre", $escapedPW, $cookie_time_Onset);  

  } else {

      $cookie_time_fromOffset=time() -$cookie_time;
setcookie("email", '',$cookie_time_fromOffset );
    setcookie("sifre", '', $cookie_time_fromOffset);  

  }
  //BURAYA KAYNAGI YAZZZ
// $sorgu="select kullanici.id, kullanici.ad, kullanici.soyad, yetkiler.yetki FROM kullanici INNER JOIN yetkiler ON yetkiler.kul_id where kullanici.id='$id';";
   // $sorgu="select id,email, ad, soyad, yetki FROM test.kullanici, test.yetkiler WHERE id='$id'" ;  
  

  $adi_sorgu="select kullanici.id, kullanici.ad, kullanici.soyad, yetkiler.yetki FROM kullanici INNER JOIN yetkiler ON kullanici.id=yetkiler.kul_id AND kullanici.email='$usernameVal'" ;  
  $sonuc_adi=mysqli_query($db_conn,$adi_sorgu);
  $row = mysqli_fetch_assoc($sonuc_adi);

//now check user and pass verification
$s="select * from kullanici where email='$usernameVal' && sifre='$escapedPW'";
$sonuc=mysqli_query($db_conn,$s);
$num=mysqli_num_rows($sonuc);

if($num == 1){
    $_SESSION['email']=$usernameVal;
    $_SESSION['ad']=$row['ad'];
    $_SESSION['soyad']=$row['soyad'];
    $_SESSION['yetki']=$row['yetki'];
    $_SESSION['id']=$row['id'];
    header('location:profil.php'); 
}
else{
  echo "<script type='text/javascript'>alert('Yanlış Şifre!');
  </script>";
  include("giris.php");
   
}


}
?>
