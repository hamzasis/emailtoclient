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
        <form class="form-group" action="adminhotel.php" method="POST">
        <h1 class="text-black text-center" style="padding-top:40px;font-style:italic;">Modifier Hotel</h1>    
        <div id="form" style="height:630px" action="insertvol.php" method="POST">
            <div>
        <h1 class="text-white text-center" style="height:0px;padding-bottom:10px"> </h1>    
        <div>        
        <div id="first-group" action="insertvol.php" method="POST">
            <form action="adminvol.php" method="POST">
                <label>
                    <h5 style="margin-right: 200px;">Nom de l'hotel</h5>
                </label>
                <input type="text" required="required" name="nomH" class="form-control" placeholder="Nom de l'hotel">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Pays</h5>
                    </label>
                    <input type="text" required="required" name="pays" class="form-control" placeholder="Pays">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Ville</h5>
                    </label>
                    <input type="text" required="required" name="ville" class="form-control" placeholder="Ville">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Prix</h5>
                    </label>
                    <input type="text" required="required" name="prix" class="form-control" placeholder="Prix">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Nombre des chambres</h5>
                    </label>
                    <input type="text" required="required" name="Nchambres" class="form-control" placeholder="Nombre des chambres">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Description</h5>
                    </label>
                    <input type="text" required="required" name="description" class="form-control" placeholder="Description">
                </div>
                </div>
                <div id="second-group">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Image 1</h5>
                    </label>
                    <input type="file" required="required" name="picture1" class="form-control" placeholder="Lieu d'arrive">
                </div> 
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Image 2</h5>
                    </label>
                    <input type="file" required="required" name="picture2" class="form-control" placeholder="Lieu d'arrive">
                </div>  
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Image 3</h5>
                    </label>
                    <input type="file" required="required" name="picture3" class="form-control" placeholder="Lieu d'arrive">
                </div>  
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Image 4</h5>
                    </label>
                    <input type="file" required="required" name="picture4" class="form-control" placeholder="Lieu d'arrive">
                </div>  
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Image 5</h5>
                    </label>
                    <input type="file" required="required" name="picture5" class="form-control" placeholder="Lieu d'arrive">
                </div>  
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Image 6</h5>
                    </label>
                    <input type="file" required="required" name="picture6" class="form-control" placeholder="Lieu d'arrive">
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