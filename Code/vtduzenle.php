<?php       
//vt bağlantısı
session_start();

//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'test');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 



if(isset($_POST['update'])){
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $id=$_POST['id'];
    $guncelle="UPDATE kullanici SET ad = '$ad',soyad = '$soyad'  WHERE id = '$id'";
    mysqli_query($db_conn, $guncelle);
    session_destroy();
    header('location:giris.php');
   
}



?>