<?php
session_start();
if(isset($type)){
$type = $_SESSION['type'];
$prixV = $_GET['prixV'];

$_SESSION['idvoi'] = $idvoi;
$_SESSION['prixV'] = $prixV;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>PHP Code to Fetch All Data from MySQL Database and Display in html Table</title>
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
            <h2 class="flight" style="font-style: italic;color:#1C77E3"><i class="fas fa-car " style="color:#1C77E3"></i>SweetFlight.com
            </h2>
            <a href="index.html"></a>
            <div class="nav-links" >
                <ul>
                    <strong><div><li><a href="mainVol.php" target="courses"  style="font-family: Georgia, serif;">Vol</a></li></strong>
                    <strong><li><a href="mainvoiture.php" class="A" style="font-family: Georgia, serif;">Voiture</a></li></strong>
                    <strong><li><a href="mainhotel.php" style="font-family: Georgia, serif;">Hôtel</a></li></strong>
                    <strong><li><a href="" style="font-family: Georgia, serif;">À propos</a></li></strong>
                    <strong><li style="margin-left:450px;background-color:#1C77E3;border-radius: 5px;"><a href="" style="font-family: Georgia, serif;color:white">Se connecter</a></li></strong>
                </ul>
            </div>
            <div style="background-color:#1C77E3">
            <hr style="height:3px;margin-top:15px">
            </div>
        </nav>
    </div>    
    <div>
    </div>    
    <div>
    </div>

    <div class="container">
        <form class="form-group" action="insertvoi.php" method="POST">
        <h1 class="text-center" style="padding-top:40px;font-style:italic;color:black">Confirmation</h1>    
        <div id="form" style="height:520px">
            <div>
        <h1 class="text-white text-center" style="height:0px"> </h1>    
        <div>        
        <div id="first-group">
                <label>
                    <h5 style="margin-right: 100px;">Nom</h5>
                </label>
                <input type="text" name="CNom" required="required" class="form-control" placeholder="Nom">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 100px;">Numéro de carte nationale</h5>
                    </label> 
                    <input type="text" name="idendite" required="required" class="form-control" placeholder="Numéro de carte nationale">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Date debut</h5>
                    </label>
                    <input type="date" required="required" placeholder="dd-mm-yyyy" name="Dvoiture" class="form-control">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">chaise de bébé</h5>
                    </label>
                    <input type="number" required="required" name="CB" class="form-control" placeholder="50 DH" min="0" max="3">
                </div>
                </div>
                <div id="second-group">
                <label>
                    <h5 style="">Prenom</h5>
                </label>
                <input type="text" name="cprenom" required="required" class="form-control" placeholder="Prenom">
                <div class="input-grp">
                <label><h5>Numéro de téléphone</h5></label>
                <input type="text" required="required" class="form-control" placeholder="Numéro de téléphone">
                </div>     
                 <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Date fin</h5>
                    </label>
                    <input type="date" required="required" placeholder="dd-mm-yyyy" name="Fvoiture" class="form-control">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">GPS</h5>
                    </label>
                    <input type="number" required="required" name="GPS" class="form-control" placeholder="30 DH" min="0" max="3">
                    <input type="text" style="visibility:collapse" name="idvoi" value="<?php echo $_GET["idvoi"]; ?>"  class="form-control" placeholder="Nom">
                    <input type="text" style="visibility:collapse" name="prixV" value="<?php echo $_GET["prixV"]; ?>"  class="form-control" placeholder="Nom">
                </div>   
                <input type="submit" value="Confirmer" class="btn btn-primary"  name="Login" style="margin-left:100px;margin-bottom:400px" id="Login">
                </div>
        </div>
        </form>
    </div>
</body>
</html>