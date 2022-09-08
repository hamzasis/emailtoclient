<?php
session_start();
if(isset($_POST['Login'])){
    $type = $_POST['type'];
    $_SESSION['type'] = $type;
    header('Location:voitures.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort booking form</title>
    <link rel="stylesheet" href="v.css">
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
    <div>
        <nav style="background-color:whitesmoke">
            <h2 class="flight" style="font-style: italic;color:#1C77E3"><i class="fas fa-car" style="color:#1C77E3"></i>SweetFlight.com
            </h2>
            <a href="index.html"></a>
            <div class="nav-links" >
                <ul>
                    <strong><div><li><a href="mainVol.php" target="courses"  style="font-family: Georgia, serif;">Vol</a></li></strong>
                    <strong><li><a href="mainvoiture.php" class="A" style="font-family: Georgia, serif;">Voiture</a></li></strong>
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
    <div>
    </div>
    <!--body-->
    <div class="container">
    <h2 style="color:black;margin-left:350px;padding-bottom:0px;margin-top:75px">Choisissez votre type de voiture</h2>
        <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form class="AA" action="" method="post" >
        <div class="card shadow">
            <div>
            <h5 class="card-title" style="color:black;margin-top:15px">Petite</h5>
                <img src="car2.jpg" alt="car1" class="img-fluid card-img-top">
            </div>
            <div class="card-body">
                <div> 
                <i class="fas fa-person" style="color:black ;margin-right:12px">  4</i>
                    <i class="fas fa-suitcase" style="color:black ;margin-right:12px">  2</i></div>
                <h5 style="margin-top:20px">
                    <span style="color:black">de 300 DH - </span>
                    <span class="price" style="color:black">600 DH</span>
                </h5>         
                <input type="text" style="visibility:collapse" required="required" name="type" value="petite"  class="form-control" placeholder="Nom">
                <input type="submit" class="btn btn-primary" value="choisir"  name="Login" style="margin-left:5px;margin-top:15px" id="Login">
            </div>
        </div>
    </form>
    </div>
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form class="AA" action="" method="post">
        <div class="card shadow">
            <div>
            <h5 class="card-title" style="color:black;margin-top:15px">Moyenne</h5>
                <img src="car1.jpg" alt="car1" class="img-fluid card-img-top">
            </div>
            <div class="card-body">
                <div> 
                <i class="fas fa-person" style="color:black ;margin-right:12px">  4</i>
                    <i class="fas fa-suitcase" style="color:black ;margin-right:12px">  5</i></div>
                <h5 style="margin-top:20px">
                    <span style="color:black">de 400 DH - </span>
                    <span class="price" style="color:black">800 DH</span>
                </h5>         
                <input type="text" style="visibility:collapse" required="required" name="type" value="moyenne"  class="form-control" placeholder="Nom">
                <input type="submit" class="btn btn-primary" value="choisir"  name="Login" style="margin-left:5px;margin-top:15px" id="Login">            </div>
        </div>
    </form>
    </div>
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form class="AA" action="" method="post" >
        <div class="card shadow">
            <div>
            <h5 class="card-title" style="color:black;margin-top:15px">Grand</h5>

                <img src="RC.jpg" alt="car1" class="img-fluid card-img-top">
            </div>
            <div class="card-body">
                <div> 
                <i class="fas fa-person" style="color:black ;margin-right:12px">  7 </i>
                    <i class="fas fa-suitcase" style="color:black ;margin-right:12px">      10</i>                </div>
                <h5 style="margin-top:20px">
                    <span style="color:black">de 1000 DH - </span>
                    <span class="price" style="color:black">1100 DH</span>
                </h5>         
                <input type="text" style="visibility:collapse" required="required" name="type" value="Grand"  class="form-control" placeholder="Nom">
                <input type="submit" class="btn btn-primary" value="choisir" name="Login" style="margin-left:5px;margin-top:15px" id="Login">            </div>
        </div>
    </form>
    </div>
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form class="AA" action="" method="post" >
        <div class="card shadow">
            <div>
            <h5 class="card-title" style="color:black;margin-top:15px">SUV</h5>

                <img src="SUV.jpg" alt="car1" class="img-fluid card-img-top">
            </div>
            <div class="card-body">
                <div> 
                <i class="fas fa-person" style="color:black ;margin-right:12px">  2</i>
                    <i class="fas fa-suitcase" style="color:black ;margin-right:12px">  2</i>                </div>
                <h5 style="margin-top:20px">
                    <span style="color:black">de 1300 DH - </span>
                    <span class="price" style="color:black">1600 DH</span>
                </h5>         
                <input type="text" style="visibility:collapse" required="required" name="type" value="SUV"  class="form-control" placeholder="Nom">
                <input type="submit" class="btn btn-primary" value="choisir" name="Login" style="margin-left:5px;margin-top:15px" id="Login">            </div>
        </div>
    </form>
    </div>
</body>
</html>
