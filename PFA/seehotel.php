<?php
error_reporting(0);
session_start();
if(isset($destination)){
    $idh = $_GET['idh'];
    $nch = $_SESSION['nch'];    
    $Fhotel= $_SESSION['Fhotel'];
    $Dhotel= $_SESSION['Dhotel'];
    $Test  = $_SESSION['Test'];
    $HuH = $_GET['HuH'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort booking form</title>
    <link rel="stylesheet" href="A.css">
    <link rel="icon" href="Logo.jpg" type="image/ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
</head>
<body style="background:whitesmoke">
    <!--nav bar-->
    <div><nav style="background:whitesmoke">
            <h2 class="flight" style="font-style: italic;color:#1C77E3"><i class="fas fa-house " style="color:#1C77E3"></i>SweetFlight.com
            </h2>
            <a href="index.html"></a>
            <div class="nav-links" >
                <ul>
                    <strong><div><li><a href="mainvol.php" target="courses"  style="font-family: Georgia, serif;">Vol</a></li></strong>
                    <strong><li><a href="mainvoiture.php" style="font-family: Georgia, serif;">Voiture</a></li></strong>
                    <strong><li><a href="mainhotel.php" class="A" style="font-family: Georgia, serif;">Hôtel</a></li></strong>
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
            $query = "SELECT * FROM hotel WHERE idh = '".$_GET['idh']."'";
            $result=mysqli_query($dbCon,$query);
            /*$customer = mysqli_fetch_assoc($result);*/
    ?>
    <?php/*
    include 'PFAcon.php';
    //$query="select * from voiture limit 200";
    $query="select * from hotel "; // Fetch all the data from the table customers
    $result=mysqli_query($dbCon,$query);
    */?>
    <!--body-->
    <form action="confirhotel.php">
    <section class="campus">
    <?php if ($result->num_rows > 0): ?>
    <?php while($array=mysqli_fetch_row($result)): ?> 
    <h2 class="text-black text-center" style="padding-top:30px;margin-bottom:45px;font-style:italic;"><?php echo $array[1];?></h2>    
        <div class="row" style="margin-left:80px">
            <div class="facilities-col">
                <img src="<?php echo $array[8];?>" style="width:350px">
            </div>
            <div class="facilities-col">
                <img src="<?php echo $array[9];?>" style="width:350px">
            </div>
            <div class="facilities-col">
                <img src="<?php echo $array[10];?>" style="width:350px">
            </div>
        </div>
        <div class="row" style="margin-left:80px">
            <div class="facilities-col">
                <img src="<?php echo $array[11];?>" style="width:350px">
            </div>
            <div class="facilities-col">
                <img src="<?php echo $array[12];?>" style="width:350px">
            </div>
            <div class="facilities-col">
                <img src="<?php echo $array[13];?>" style="width:350px">
            </div>
        </div>
    </section>
    <section class="campus">
    <h2 class="text-black text-center" style="margin-top:1px;font-style:italic;">info de l'hôtel <?php echo $_GET['HuH']; ?><?php// echo $array[0];?><?php// echo $array[4];?></h2>   
    <p style="margin-left:80px">
    <?php echo $array[6];?>
    </p> 
    </section>
    <section class="campus" style="padding-bottom:100px">
    <?php if ($_GET['HuH'] == "Test"): ?>
    <a href="ConfirmeH.php?idh=<?php echo $array[0];?> && prixH=<?php echo $array[4];?> && Nchambres=<?php echo $array[5];?>"style="margin-left:1000px" class="btn btn-primary">Réserver</a>
    <a href="Confirhotel.php?idh=<?php echo $array[0];?> && prixH=<?php echo $array[4];?> && Nchambres=<?php echo $array[5];?> && Dhotel=<?php echo $_SESSION['Dhotel'];?> && Fhotel=<?php echo $_SESSION['Fhotel'];?>" style="margin-left:1000px;visibility:collapse" class="btn btn-primary">Réserver</a>
    <?php else :?>
    <a href="Confirhotel.php?idh=<?php echo $array[0];?> && prixH=<?php echo $array[4];?> && Nchambres=<?php echo $array[5];?> && Dhotel=<?php echo $_SESSION['Dhotel'];?> && Fhotel=<?php echo $_SESSION['Fhotel'];?>" style="margin-left:1000px" class="btn btn-primary">Réserver</a>
    <a href="mainVoiture.php"style="margin-left:1000px;visibility:collapse" class="btn btn-primary">Réserver</a>
    <?php endif ; ?>
    </div>
    </section>
    </form>
        <?php endwhile; ?>
            <?php else: ?>              
        <?php endif; ?>
        <?php mysqli_free_result($result); ?>
</body>
</html>
