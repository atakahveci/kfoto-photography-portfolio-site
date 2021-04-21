<?php  
//vt bağlantısı

//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'test');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 
  



$duyurusu= $_POST['duyuru'];
$idi= $_POST['id'];

    $kaydet="INSERT INTO duyurular (duyuru, kul_id) VALUES('$duyurusu', '$idi')";
    mysqli_query($db_conn, $kaydet);
   
   

    echo "<script type='text/javascript'>alert('Duyurunuz başarıyla eklenmiştir!');
    </script>";
    include("index.php");
  


?>
