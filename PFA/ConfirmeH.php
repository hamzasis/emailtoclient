<?php
session_start();
if(isset($destination)){
    $Nchambres = $_GET['Nchambres'];
    $idh = $_GET['idh'];
    $prixH = $_GET['prixH'];
    $_SESSION['prixH'] = $prixH;
    $nch = $_POST['nch'];
    $_SESSION['nch'] = $nch;
    $Dhotel = $_POST['Dhotel'];
    $_SESSION['Dhotel'] = $Dhotel;
    $Fhotel = $_POST['Fhotel'];
    $_SESSION['Fhotel'] = $Fhotel;
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
    <div class="container">
        <form class="form-group" action="inserthotel.php"  method="post">
        <h1 class="text-black text-center" style="padding-top:10px;font-style:italic;">Confirmation <?php// echo $_SESSION['Dhotel'];?> <?php// echo $_SESSION['Fhotel'];?> </h1>    
        <div id="form" style="height:420px">
            <div>
        <h1 class="text-white text-center" style="height:0px"> </h1>    
        <div>        
        <div id="first-group">
                <label>
                    <h5 style="margin-right: 220px;color:black">Prenom</h5>
                </label>
                <input type="text"  name="Cprenom" class="form-control" placeholder="Prenom">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 100px;margin-top:10px">Numéro de carte nationale</h5>
                    </label>
                    <input type="text" class="form-control" name="idendite" placeholder="Numéro de carte nationale">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;margin-top:10px">Date début</h5>
                    </label>
                    <input type="date" name="Dhotel" id="nemo" class="form-control">
                    <script src="js/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <script src="js/custom.js"></script>
                    <script>
                     var todayDate = new Date();
                      var month = todayDate.getMonth() + 1 ;
                    var year = todayDate.getUTCFullYear() - 0;
                        var tdate = todayDate.getDate();
                            if(month < 10){
                            month = "0" + month
                        }
                            if(tdate < 10){
                            tdate = "0" + tdate;
                        }
                        var maxDate = year + "-" + month + "-" + tdate;
                        document.getElementById("nemo").setAttribute("min", maxDate);
                        console.log(maxDate);
                    </script>
                </div>
                <div class="input-grp">
                <label>
                    <h5 style="margin-right: 10 0px;color:black">Nombre des chambres</h5>
                </label>
                <input type="number" min=1 max=5 name="nch" class="form-control" placeholder="Nombre des chambres">
                </div>
                <input type="text" name="idh" style="visibility:collapse" class="form-control" value="<?php echo $_GET["idh"];?>" placeholder="Email">
                <input type="text" name="prixH" style="visibility:collapse" class="form-control" value="<?php echo $_GET["prixH"];?>" placeholder="Email">
                <input type="text" name="Nchambres" style="visibility:collapse" class="form-control" value="<?php echo $_GET["Nchambres"];?>" placeholder="Email">
            </div>
        <div id="second-group">
        <label>
                    <h5 style="margin-right: 220px;color:black">Nom</h5>
                </label>
                <input type="text"  name="CNom" class="form-control" placeholder="Nom">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 50px;margin-top:10px">Email</h5>
                    </label>
                    <input type="Email" class="form-control" placeholder="Email">
                </div>
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;margin-top:10px">Date de fin</h5>
                    </label>
                    <input type="date" name="Fhotel" id="demo" class="form-control">
                    <script src="js/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <script src="js/custom.js"></script>
                    <script>
                     var todayDate = new Date();
                      var month = todayDate.getMonth() + 1 ;
                    var year = todayDate.getUTCFullYear() - 0;
                        var tdate = todayDate.getDate();
                            if(month < 10){
                            month = "0" + month
                        }
                            if(tdate < 10){
                            tdate = "0" + tdate;
                        }
                        var maxDate = year + "-" + month + "-" + tdate;
                        document.getElementById("demo").setAttribute("min", maxDate);
                        console.log(maxDate);
                    </script>
                </div>
        </div>
        <div id="second-group" style="padding-bottom:120px">
        <button type="submit" style="margin-left:110px" class="btn btn-primary" value="submit">Confirmer</button>                
        </div>
        </div>
        </form>
    </div>
</body>
</html>
