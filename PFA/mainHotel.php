<?php 
session_start();
if(isset($_POST['Login'])){
    $destination = $_POST['destination'];
    $_SESSION['destination'] = $destination;
    $nch = $_POST['nch'];
    $_SESSION['nch'] = $nch;
    $Dhotel = $_POST['Dhotel'];
    $_SESSION['Dhotel'] = $Dhotel;
    $Fhotel = $_POST['Fhotel'];
    $_SESSION['Fhotel'] = $Fhotel;
    header('Location:pickhotel.php');
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

</head>
<body style="background-color:whitesmoke">
    <!--nav bar-->
    <div><nav style="background-color:whitesmoke">
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
    <div class="container" >
        <form class="form-group" method="post">
        <h2 class="text-black text-center" style="padding-top:40px;font-style:italic;">Trouver les meilleurs hôtels et les plus confortables !</h2>    
        <div id="form">
            <div>
        <h1 class="text-white text-center" style="height:0px"> </h1>    
        <div>        
        <div id="first-group">
                <label>
                    <h5 style="margin-right: 220px;color:black">Destination</h5>
                </label>
                <input type="text" required="required" name="destination" class="form-control" placeholder="Ville/Pays">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;margin-top:10px">Date début</h5>
                    </label>
                    <input type="date" name="Dhotel" class="form-control">
                </div>
                </div>
            <div id="second-group">
                <label>
                    <h5 style="margin-right: 10 0px;color:black">Nombre des chambres</h5>
                </label>
                <input type="number" min=1 max=5 name="nch" class="form-control" placeholder="Nombre des chambres">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;margin-top:10px">Date de fin</h5>
                    </label>
                    <input type="date" name="Fhotel" class="form-control">
                </div>
        </div>
        <div id="second-group" style="padding-bottom:120px">
        <input type="submit" class="btn btn-primary" value="Rechercher"  name="Login" style="margin-left:100px" id="Login">
        </div>
        </div>
        </form>
    </div>
</body>
</html>
