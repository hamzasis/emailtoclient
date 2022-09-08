<?php
session_start();
if(isset($destination)){
    $destination = $_SESSION['destination'];
    $nch = $_SESSION['nch'];
    $Dhotel = $_SESSION['Dhotel'];
    $Fhotel = $_SESSION['Fhotel'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort booking form</title>
    <link rel="stylesheet" href="B.css">
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
    <div>
    </div>
    <!--body-->
    <div class="container-fluid" >
                <?php
                    include 'PFAcon.php';
                    $query = "SELECT * FROM hotel WHERE pays = '".$_SESSION['destination']."' OR ville = '".$_SESSION['destination']."'";
                    $result=mysqli_query($dbCon,$query);
                ?>
    <h2>  </h2>
    <div class="row px-5" >
        <div class="col-md-7" >
        <?php if ($result->num_rows > 0): ?>
                        <?php while($array=mysqli_fetch_row($result)): ?>
            <div class="shopping-cart" >
                
            
            <form action="seehotel.php"  method="post" class="cart-items">     
            <div class="" style="outline: none !important;">
                    
                    
                    <div class="row" style="border-radius:20px;border: 3px solid rgb(255, 255, 255);border-color: #1C77E3;background-color:white">
                        
                        <div class="col-md-3">
                            <img src="<?php echo $array[8];?>" alt="img" class="img-fluid" style="margin-top:7px;height:120px;border-radius:20px;">
                        </div>
                        <div class="col-md-6">
                            <h5 class="pt-2" style="color:black"><?php echo $array[1];?></h5>
                            <div> 
                            <?php
                            $i = $array[7];
                            for ($i=1;$i<=$array[7];$i++){
                                ?>
                                <i class="fas fa-star" style="color:black ;margin-right:12px"></i>
                            <?php }?>
                                <?php
                            $i = $array[7];
                            for ($i=1;$i<=(5-$array[7]);$i++){
                                ?>
                                <i class="far fa-star" style="color:black ;margin-right:12px"></i>
                            <?php }?>
                            </div>
                            <small class="text" style="color:black"><?php echo $array[2];?>-<?php echo $array[3];?></small>
                            <h5 class="pt-2">
                            <!--<small><s class="text-secondary">$700</s></small>-->
                            <span class="price" style="color:black;margin-left:10px"><?php echo $array[4];?> DH </span>
                            </h5>    
                            <h3></h3>
                        </div>
    
                        <div class="col-md-3 py-5">
                        <a href="seehotel.php?idh=<?php echo $array[0];?> && Dhotel=<?php echo $_SESSION['Dhotel']?> && Fhotel=<?php echo $_SESSION['Fhotel']?>" style="margin-left:10px" class="btn btn-warning">Voir Plus</a>
                    </div>                    
                    </div>
                </div>
            </form>
            </div>
            <h2 style="height: 10px;"> </h2>
            <?php endwhile; ?>
                    <?php else: ?>
        </div>
        <div class="col-md-5" >
        
    </div>
    </div>
</div>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</body>
</html>
