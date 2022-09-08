<?php
if(count($_POST)>0)
{
include 'PFAcon.php';
session_start();
if(isset($ldépart) && (isset($larrive)))
$ldépart = $_SESSION['ldépart'];
$larrive = $_SESSION['larrive'];
$depare = $_SESSION['depare'];
$Class = $_SESSION['Class'];
$idv = $_POST['idv'];
$numv = $_POST['numv'];
$prix = $_POST['prix'];
$nbP = $_POST['nbP'];
$ndepare = $_POST['ndepare'];
$Date = $_SESSION['Date'];
$CNom = $_POST['CNom'];
$Cprenom = $_POST['Cprenom'];
$idendite = $_POST['idendite'];
$nbplace = $_POST['nbplace'];
$tel = $_POST['tel'];
$email = $_POST['email'];
    //$ldépart = $_POST['ldépart'];
    //$larrive = $_POST['larrive'];
    //$depare = $_POST['depare'];
    //$Class = $_POST['Class'];
    //$idv = $_SESSION['idv'];
    //$numv = $_POST['numv'];
    /*$query ="INSERT INTO client (idendite,CNom,Cprenom,tel,email)
         VALUES ('$idendite','$CNom','$Cprenom','$tel','$email')";*/
         
     $query ="INSERT INTO reserve (idendite,idv,numv,class,nbplace,depare)
     VALUES ('$idendite','$idv','$numv','$Class','$nbplace','$ndepare')";
     if (mysqli_query($dbCon, $query)) {
          $Q = "UPDATE reserve set TOTAL = $prix * $nbplace where idendite = '".$_POST['idendite']."' && depare ='".$_POST['ndepare']."'";
          if (mysqli_query($dbCon, $Q)) {
                    $N = "UPDATE vol set nbplace = nbplace - $nbplace where idv = '".$_POST['idv']."'";
                    if (mysqli_query($dbCon, $N)){
                         $A = "SELECT sum(nbplace) FROM reserve where $depare > $Date ";
                         $result=mysqli_query($dbCon,$A);
                         $array = mysqli_fetch_row($result);
                         if(mysqli_query($dbCon, $A)){
                              $result=mysqli_query($dbCon,$A);
                              $array = mysqli_fetch_row($result);
                              $O = "UPDATE vol set nbplace = nbplace + '".$_POST['nbP']."'";
                              if(mysqli_query($dbCon, $O)){
                                   $D =  "DELETE from reserve where depare < '".$_SESSION['Date']."' ";
                                   if (mysqli_query($dbCon, $D)){
                                   $msg = 1;
                                   } else {
                                   $msg = 4;
                                   }
                              $msg = 1;
                              } else {
                              $msg = 4;
                              }
                         $msg = 1;
                         } else {
                         $msg = 4;
                         }
                    $msg = 1;
                    } else {
                    $msg = 4;
                    }
          $msg = 1;
          } else {
          $msg = 4;
          }
     $msg = 1;
     } else {
     $msg = 4;
     }}
header ("Location: mainVol.php?msg=".$msg);
/*$Q ="INSERT INTO client (idendite,CNom,Cprenom,tel,email)
               VALUES ('$idendite','$CNom','$Cprenom','$tel','$email')";
          if (mysqli_query($dbCon, $Q)) {
                                    $msg = 1;
                                    } else {
                                    $msg = 4;
                                    }*/
?>
