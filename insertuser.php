<?php
require_once("cart.php");
include "koneksi.php";
        $bayar           = abs((int)$_GET['total']);
        $nm_usr          = $_POST['nm_usr'];
        $log_usr	 = $_POST['log_usr'];
        $pas_usr         = mysqli_real_escape_string($koneksi, $_POST['pas_usr']);
        $email_usr	 = $_POST['email_usr'];
        $almt_usr 	 = $_POST['almt_usr'];
        $kp_usr          = $_POST['kp_usr'];
        $kota_usr        = $_POST['kota_usr'];
        $tlp             = $_POST['tlp'];
        $rek             = $_POST['rek'];
        $nmrek           = $_POST['nmrek'];
        $bank            = $_POST['bank'];


$query = mysqli_query($koneksi, "insert into user values ('', '$nm_usr','$log_usr','$pas_usr','$email_usr','$almt_usr','$kp_usr','$kota_usr','$tlp','$rek','$nmrek','$bank')");
$result = mysqli_query($koneksi, "select nm_usr from user where nm_usr='$nm_usr'");
if (mysqli_fetch_assoc($result)){
            echo "<script>
                alert('nm_usr sudah terdaftar')
            </script>";
            return false;
        }

if ($query){
	echo "<script>alert('Anda berhasil checkout, Silahkan lakukan pembayaran Rp. $bayar; '); window.location = 'selesai.php'</script>";	
} else {
	echo "<script>alert('Anda gagal checkout, silahkan ulangi!'); window.location = 'checkout.php'</script>";	
}
return mysqli_affected_rows($koneksi);

?>