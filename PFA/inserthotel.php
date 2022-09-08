<?php
if(count($_POST)>0){
include 'PFAcon.php';
session_start();
if(isset($destination))

$idendite = $_POST['idendite'];
$prixH = $_POST['prixH'];
$Dhotel = $_POST['Dhotel'];
$Fhotel = $_POST['Fhotel'];
$idh = $_POST['idh'];
$nch = $_POST['nch'];
$Nchambres = $_POST['Nchambres'];

$from_date = strtotime($Dhotel);
$to_date = strtotime($Fhotel);
$day_diff = $to_date - $from_date;

    $query = "UPDATE reserve set idh = '".$_POST['idh']."',Fhotel='".$_POST['Fhotel']."',Nchambres='".$_POST['nch']."' WHERE idendite = '".$_POST['idendite']."'"; 
if (mysqli_query($dbCon, $query)) {
    
        $Q = "UPDATE reserve set TOTAL = $prixH * ($day_diff/(60*60*24)) * $nch  /*TOTAL + ($prixH * (($day_diff/(60*60*24)) * $nch))*/ where idendite = '".$_POST['idendite']."'";
        if (mysqli_query($dbCon, $Q)) {
        $msg = 1;
      
        } else {
        $msg = 4;
        }
    $msg = 1;
} else {
    $msg = 4;
        }
        }
header ("Location: mainHotel.php?msg=".$msg);
?>