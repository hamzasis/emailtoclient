<?php
session_start();
if(isset($ldépart) && (isset($larrive))){
$ldépart = $_SESSION['ldépart'];
$larrive = $_SESSION['larrive'];
$depare = $_SESSION['depare'];
$Class = $_SESSION['Class'];
$idv = $_SESSION['idv'];
$numv = $_GET['numv'];
$_SESSION['numv'] = $numv;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Confirmation de Vol</title>
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
            <h2 class="flight" style="font-style: italic;color:#1C77E3"><i class="fas fa-plane " style="color:#1C77E3"></i>sweetflight.com
            </h2>
            <a href="index.html"></a>
            <div class="nav-links" >
                <ul>
                    <strong><div><li><a href="adminvol.php" target="courses" class="A" style="font-family: Georgia, serif;">Vol</a></li></strong>
                    <strong><li><a href="adminvoiture.php" style="font-family: Georgia, serif;">Voiture</a></li></strong>
                    <strong><li><a href="adminhotel.php" style="font-family: Georgia, serif;">Hotel</a></li></strong>
                    <strong><li><a href="adminclient.php" style="font-family: Georgia, serif;">Admin</a></li></strong>
                    <strong><li style="margin-left:450px;background-color:#1C77E3;border-radius: 5px;"><a href="" style="font-family: Georgia, serif;color:white">Login</a></li></strong>
                </ul>
            </div>
            <div style="background-color:#1C77E3">
            <hr style="height:3px;margin-top:15px">
            </div>
        </nav>
    </div>    
    <div>
    </div>
    <div class="container">
        <form class="form-group" action="adminclient.php" method="POST">
        <h1 class="text-black text-center" style="padding-top:40px;font-style:italic;">Modifier utilisateur</h1>    
        <div id="form" style="height:400px" action="insertvol.php" method="POST">
            <div>
        <h1 class="text-white text-center" style="height:0px;padding-bottom:10px"> </h1>    
        <div>        
        <div id="first-group" action="insertvol.php" method="POST">
            <form action="adminvol.php" method="POST">
                <label>
                    <h5 style="margin-right: 100px;">Numéro de carte nationale</h5>
                </label>
                <input type="text" required="required" name="idendite" class="form-control" placeholder="Numéro de carte nationale">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Nom</h5>
                    </label>
                    <input type="text" required="required" name="CNom" class="form-control" placeholder="Nom">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Email</h5>
                    </label>
                    <input type="text" required="required" name="email" class="form-control" placeholder="email">
                </div>
                </div>
                <div id="second-group">
                <label>
                    <h5 style="margin-right: 100px;">Numéro de téléphone</h5>
                </label>
                <input type="text" required="required" name="tel" class="form-control" placeholder="Numéro de téléphone">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Prenom</h5>
                    </label>
                    <input type="text" required="required" name="Cprenom" class="form-control" placeholder="Prenom">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Mot de pass</h5>
                    </label>
                    <input type="text" required="required" placeholder="Mot de pass" name="Password" class="form-control">
                </div>     
                </div>
                <div id="second-group">
                <button type="submit" style="margin-left:170px" class="btn btn-primary" value="submit">Confirme</button>                
                </div> 
            </form>
        </div>
        </form>
    </div>
</body>
</html>