<?php
session_start();
if(isset($ldépart) && (isset($larrive))){
$ldépart = $_SESSION['ldépart'];
$larrive = $_SESSION['larrive'];
$depare = $_SESSION['depare'];
$Class = $_SESSION['Class'];
$Date = $_SESSION['Date'];
$idv = $_POST['idv'];
    $_SESSION['idv'] = $idv;
$numv = $_POST['numv'];
    $_SESSION['numv'] = $numv;
$dankda = date('Y-m-d', strtotime("+1 day"));
    $_SESSION['dankda'] = $dankda;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Vols</title>
    <link rel="stylesheet" href="B.css">
    <link rel="icon" href="Logo.jpg" type="image/ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body style="background-color:whitesmoke">
<div><nav style="background-color:whitesmoke">
            <h2 class="flight" style="font-style: italic;color:#1C77E3"><i class="fas fa-plane " style="color:#1C77E3"></i>SweetFlight.com
            </h2>
            <a href="index.html"></a>
            <div class="nav-links" >
                <ul>
                    <strong><div><li><a href="mainVol.php" target="courses" class="A" style="font-family: Georgia, serif;">Vol</a></li></strong>
                    <strong><li><a href="mainvoiture.php" style="font-family: Georgia, serif;">Voiture</a></li></strong>
                    <strong><li><a href="mainhotel.php" style="font-family: Georgia, serif;">Hôtel</a></li></strong>
                    <strong><li><a href="" style="font-family: Georgia, serif;">À propos</a></li></strong>
                    <strong><li style="margin-left:450px;background-color:#1C77E3;border-radius: 5px;"><a href="Login.php" style="font-family: Georgia, serif;color:white">Se connecter</a></li></strong>
                </ul>
            </div>
            <div style="background-color:#1C77E3">
            <hr style="height:3px;margin-top:15px">
            </div>
        </nav>
    </div>
    <?php
    include 'PFAcon.php';
    $query="select * from Vol where ldépart = '".$_SESSION['ldépart']."' && larrive = '".$_SESSION['larrive']."' && depare = '".$_SESSION['depare']."'"; 
    $result=mysqli_query($dbCon,$query);
    ?>
    <div class="container mt-2">
    <div class="row">
    <div class="col-md-12">
    </div>
    </div>
    <div class="col-md-12">
    <div class="float-left">
    <h2 style="margin-left:220px;color:black;margin-top:50px;margin-bottom:50px">Les vols disponibles de <?php echo $_SESSION['ldépart']; ?> à <?php echo $_SESSION['larrive']; ?> </h2>
    </div>
    <div class="float-right">
    </div>    
    <?php if ($result->num_rows > 0): ?>
    <?php while($array=mysqli_fetch_row($result)): ?>
    <table class="table" style="background-color:white;width:1100px;border: 1px solid #fff;border-collapse: collapse;">
    <thead style="border:1px #fff">
    <tr>
<th scope="col" style="visibility:collapse;border:1px #fff">id</th>
<th scope="col" style="border:1px #fff"></th>
<th scope="col" style="border:1px #fff">Numéro</th>
<th scope="col" style="border:1px #fff">Départ</th>
<th scope="col" style="border:1px #fff">L'arrive</th>
<th scope="col" style="border:1px #fff">Date de départ</th>
<th scope="col" style="border:1px #fff">Date d'arrive</th>
<th scope="col" style="border:1px #fff">Prix</th>
</tr>
</thead>
<tbody style="border:1px #fff">
<tr style="border:1px #fff">
<th scope="row" style="visibility:collapse;border:1px #fff"><?php echo $array[0];?></th>
<td style="border:1px #fff"><i class="fas fa-plane " style="color:green"></i></td>
<td style="border:1px #fff"><?php echo $array[1];?></td>
<td style="border:1px #fff"><?php echo $array[3];?></td>
<td style="border:1px #fff"><?php echo $array[4];?></td>
<td style="border:1px #fff"><?php echo $array[5];?>-<?php echo $array[6];?></td>
<td style="border:1px #fff"><?php echo $array[7];?>-<?php echo $array[8];?></td>
<td style="border:1px #fff"><?php echo $array[2];?></td>
<td style="border:1px #fff">
<a href="Confirvol.php?idv=<?php echo $array[0];?> && numv=<?php echo $array[1];?> && prix=<?php echo $array[2];?> && ndepare=<?php echo $array[5];?>" style="margin-left:10px" class="btn btn-primary">Réserver</a>

</tr>
<tr style="border:1px #fff">
</tr>
</tbody>
</table>
<?php endwhile; ?>
    <?php else: ?>
</div>
</div>
</div>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</body>
</html>