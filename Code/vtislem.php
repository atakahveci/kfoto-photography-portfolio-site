<?php       
//vt bağlantısı
session_start();

//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'test');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 
$id=0;
$yetkisii='';
$adi='';
$idi='';
$soyadi='';

$yetki_uye="uye";
$yetki_admin="admin";
$yetki_misafir="misafir";
$yetkisi=$_SESSION['yetki'];

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
   $sorgu="select kullanici.id, kullanici.ad, kullanici.soyad, yetkiler.yetki FROM kullanici INNER JOIN yetkiler ON yetkiler.kul_id=kullanici.id AND kullanici.id='$id';";
    $sonuc=mysqli_query($db_conn,$sorgu);
    $num=mysqli_num_rows($sonuc);
    if($num == 1){
        $row=$sonuc->fetch_array();
        $yetkisii= $row['yetki'];
        $adi= $row['ad'];
        $soyadi= $row['soyad'];
        $idi= $row['id'];
    }

}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $yetki=$_POST['yetki'];
    $guncelle="UPDATE yetkiler SET yetki = '$yetki' WHERE kul_id = '$id'";
    mysqli_query($db_conn, $guncelle);
    header('location:izinyetkisi.php');
}



?>