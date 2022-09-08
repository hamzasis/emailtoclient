<?php
if(count($_POST)>0)
{
include 'PFAcon.php';
session_start();
if(isset($type))
$type = $_SESSION['type'];
$idv = $_POST['idvoi'];
$prixV = $_POST['prixV'];

$idendite = $_POST['idendite'];
$Dvoiture = $_POST['Dvoiture'];
$Fvoiture = $_POST['Fvoiture'];

$to_date = strtotime($Fvoiture);
$from_date = strtotime($Dvoiture);
$day_diff = $to_date - $from_date;
$CB = $_POST['CB'];
$GPS = $_POST['GPS'];

    $query = "UPDATE reserve set idvoi = '".$_POST['idvoi']."',Dvoiture='".$_POST['Dvoiture']."',Fvoiture='".$_POST['Fvoiture']."',supplement='".'CB : '.$_POST['CB'].'- GPS : '.$_POST['GPS']. "' WHERE idendite = '".$_POST['idendite']."'"; 
if (mysqli_query($dbCon, $query)) {
    
        $Q = "UPDATE reserve set TOTAL = TOTAL + ($prixV * ($day_diff/(60*60*24)) + ($CB*50)+($GPS*30))  where idendite = '".$_POST['idendite']."'";
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

header ("Location: mainvoiture.php?msg=".$msg);
?>