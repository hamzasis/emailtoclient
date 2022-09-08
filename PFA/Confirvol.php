<?php
session_start();
if(isset($ldépart) && (isset($larrive))){
$ldépart = $_SESSION['ldépart'];
$larrive = $_SESSION['larrive'];
$depare = $_SESSION['depare'];
$Class = $_SESSION['Class'];
$idv = $_GET['idv'];
$numv = $_GET['numv'];
$prix = $_GET['prix'];
$nbP = $_GET['nbP'];
$Date = $_SESSION['Date'];
$ndepare = $_GET['ndepare'];
$_SESSION['numv'] = $numv;
$_SESSION['idv'] = $idv;
$_SESSION['prix'] = $prix;
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
            <h2 class="flight" style="font-style: italic;color:#1C77E3"><i class="fas fa-plane " style="color:#1C77E3"></i>SweetFlight.com</h2>
            <a href="index.html"></a>
            <div class="nav-links" >
                <ul>
                    <strong><div><li><a href="mainvol.php" target="courses" class="A" style="font-family: Georgia, serif;">Vol</a></li></strong>
                    <strong><li><a href="mainvoiture.php" style="font-family: Georgia, serif;">Voiture</a></li></strong>
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
    <div class="container">
            <?php/*
            include 'PFAcon.php';
            $query = "SELECT * FROM vol WHERE idv='" . $_GET["idv"] . "'"; // Fetch data from the table customers using id
            $result=mysqli_query($dbCon,$query);
            $customer = mysqli_fetch_assoc($result);
            */?>
        <form class="form-group" action="insertvol.php" method="POST">
        <!--<h1 class="text-black text-center" style="padding-top:40px;font-style:italic;">Confirmation <?php //echo $_GET['idv']?></h1>-->
        <h1 class="text-black text-center" style="padding-top:40px;font-style:italic;">Confirmation <?php// echo $_GET['prix']?></h1>    
        <div id="form" style="height:400px" action="insertvol.php" method="POST">
            <div>
        <h1 class="text-white text-center" style="height:0px;padding-bottom:10px"> </h1>    
        <div>        
        <div id="first-group" action="insertvol.php" method="POST">
            <form action="insertvol.php" method="POST">
                <label>
                    <h5 style="margin-right: 200px;">Nom</h5>
                </label>
                <input type="text" required="required" name="CNom" class="form-control" placeholder="Nom">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 100px;">Numéro de carte nationale</h5>
                    </label>
                    <input type="text" required="required" name="idendite" class="form-control" placeholder="Numéro de Vol">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Numéro de téléphone</h5>
                    </label>
                    <input type="text" required="required" name="tel" class="form-control" placeholder="Numéro de téléphone">
                    <input type="text" style="visibility:collapse" name="numv" value="<?php echo $_GET["numv"]; ?>"  class="form-control" placeholder="Nom">
                    <input type="text" style="visibility:collapse" name="idv" value="<?php echo $_GET["idv"]; ?>"  class="form-control" placeholder="Nom">
                    <input type="text" style="visibility:collapse" name="prix" value="<?php echo $_GET["prix"]; ?>"  class="form-control" placeholder="Nom">
                    <input type="text" style="visibility:collapse" name="ndepare" value="<?php echo $_GET["ndepare"]; ?>"  class="form-control" placeholder="Nom">
                </div>
                </div>
                <div id="second-group">
                <label>
                    <h5 style="">Prenom</h5>
                </label>
                <input type="text" required="required" name="Cprenom" class="form-control" placeholder="Prenom">
                <div class="input-grp">
                <label><h5>Nombre des places</h5></label>
                <input type="number" required="required" style="margin-top:0px;width:300px;height:38px"  id="quantity" name="nbplace" max="9" min="1">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;">Email</h5>
                    </label>
                    <input type="email" required="required" class="form-control" name="email" placeholder="Email">
                <div style="margin-top:25px">
                <button type="submit" style="margin-left:170px" class="btn btn-primary" value="submit">Confirmer</button>                
                <?php
                include 'PFAcon.php';
                $query="SELECT sum(nbplace) FROM reserve where depare < '".$_SESSION['Date']."'"; 
                $result=mysqli_query($dbCon,$query);
                ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array = mysqli_fetch_row($result)): ?>
                <input type="text" style="visibility:collapse" name="nbP" value="<?php echo $array[0] ?>"  class="form-control" placeholder="Nom">
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
                </div>        
                </div>
            </form>    
        </div>
        </form>
    </div>
</body>
</html>