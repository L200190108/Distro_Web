<?php
require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    }
     
    if (isset($_GET['act']) && isset($_GET['ref'])) {
        $act = $_GET['act'];
        $ref = $_GET['ref'];
             
        if ($act == "add") {
            if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    $_SESSION['items'][$barang_id] += 1;
                } else {
                    $_SESSION['items'][$barang_id] = 1; 
                }
            }
        } elseif ($act == "plus") {
            if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    $_SESSION['items'][$barang_id] += 1;
                }
            }
        } elseif ($act == "min") {
            if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    $_SESSION['items'][$barang_id] -= 1;
                }
            }
        } elseif ($act == "del") {
            if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    unset($_SESSION['items'][$barang_id]);
                }
            }
        } elseif ($act == "clear") {
            if (isset($_SESSION['items'])) {
                foreach ($_SESSION['items'] as $key => $val) {
                    unset($_SESSION['items'][$key]);
                }
                unset($_SESSION['items']);
            }
        } 
         
        header ("location:" . $ref);
    }
?>

<?php
    error_reporting(0);
    if (isset($_POST["finish"]))
    {
        $id_trs = [''];
        $nm_pem = $_POST['nm_usr'];
        $kt_pem = $_POST['kota_usr'];
        $tgl_trs = date("Y-m-d");
        $total = $_POST['total'];

        mysqli_query ($koneksi, "INSERT INTO teransaksi (id_trs, nm_pem, kt_pem, tgl_trs, total) VALUES ('$id_trs','$nm_pem','$kt_pem','$tgl_trs','$total')");
        
    }
    ?>