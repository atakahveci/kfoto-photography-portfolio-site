<?php  
//vt bağlantısı

//Db conn
$db_conn= mysqli_connect('localhost','root','');
mysqli_select_db($db_conn,'test');
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 
  
$mail= $_POST['email'];
$adi = $_POST['ad'];
$soyadi= $_POST['soyad'];
$mesaji= $_POST['mesaj'];
$idi= $_POST['id'];



    $kaydet="INSERT INTO mesajlar (mesaj, kul_id) VALUES('$mesaji', '$idi')";
    mysqli_query($db_conn, $kaydet);
    
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "kfotografciligi@kfoto.online.com";
    $to = "kfotografciligi@gmail.com";
    $subject = $mail . "Tarafından Mesajınız var!";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$mesaji, $headers);
   

    echo "<script type='text/javascript'>alert('Mesajınız başarıyla ulaşmıştır!');
    </script>";
    include("iletisim.php");
  


?>
