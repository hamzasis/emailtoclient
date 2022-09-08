<?php
session_start();
if(isset($_POST['Login'])){
    $ldépart = $_POST['ldépart'];
    $_SESSION['ldépart'] = $ldépart;
    $larrive = $_POST['larrive'];
    $_SESSION['larrive'] = $larrive;
    $depare = $_POST['depare'];
    $_SESSION['depare'] = $depare;
    $Class = $_POST['Class'];
    $_SESSION['Class'] = $Class;
    $Test = $_POST['Test'];
    $_SESSION['Test'] = $Test;
    $Date = $_POST['Date'];
    $_SESSION['Date'] = $Date;
    header('Location:tableVol.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher des vols</title>
    <link rel="icon" href="Logo.jpg" type="image/ico">
    <link rel="stylesheet" href="A.css">
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
    <div style="background-color:whitesmoke">
        <nav style="background-color:whitesmoke">
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
    <div>
    </div>
    <div class="container">
        <form action="" method="post">
        <form class="form-group">
        <h2 style="text-align:center;color:black;padding-top:20px;margin-top:65px;background-color:none">Trouver un billet d'avion vers votre prochaine destination ! </h2>

        <div id="form" method="POST">
            <div>
        <h1 class="text-white text-center" style="height:0px"> </h1>    
        <div>        
        <div id="first-group" method="POST">
                <label>
                    <h5 style="margin-right: 220px;color:black">Lieu de départ</h5>
                </label>
                <input type="text" required="required" name="ldépart" class="form-control" placeholder="Ville">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 150px;margin-top:10px">Date de depart</h5>
                    </label>
                    <input type="date" required="required" placeholder="dd-mm-yyyy" id="demo" name="depare" min="{{minDate}}" class="form-control">
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
                <div id="second-group">
                <label>
                    <h5 style="">Lieu d'arrive</h5>
                </label>
                <input type="text" name="larrive" required="required" class="form-control" placeholder="Ville">
                <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 98px;padding-top:10px">Classe</h5>
                    </label>
                    <select class="custom-select" required="required" name="Class">
                        <option value=""  disabled selected>Choisir votre classe</option>
                        <option value="Economie">Economie</option>
                        <option value="premiere">premiere</option>
                        <option value="deuxième">deuxième</option>
                        <option value="business">business</option>
                    </select>
                </div>        
                </div>
                <div id="second-group" style="padding-bottom:120px">
                <input type="submit" class="btn btn-primary" value="Rechercher"  name="Login" style="margin-left:150px" id="Login">
                <input type="text" style="visibility:collapse" name="Date" readonly="true" value="<?php echo date('Y-m-d'); ?>"  class="form-control" placeholder="Nom">
                </div>
        </div>
        </form>
        </form>
    </div>
    <section class="header" style="background-color:white">
        <div class="text-box" style="background-color:whitesmoke">
            <h1 style="text-align:center;background-color:none">Notre suggestion pour vous</h1>
            <input type="text" style="visibility:collapse" name="Test" class="form-control" value="Test">
        </div>
    <?php
    include 'PFAcon.php';
    //$query="select * from voiture limit 200";
    $query="select * from hotel "; // Fetch all the data from the table customers
    $result=mysqli_query($dbCon,$query);
    ?>
    </section>
    <!--hotel-->
    <section class="campus" style="background-color:whitesmoke;margin-top:75px">
    
    <div class="row">
    <?php if ($result->num_rows > 0): ?>
    <?php while($array=mysqli_fetch_row($result)): ?> 
            <div class="facilities-col" style="border-radius:15px;border:3px solid rgb(255, 255, 255);border-color: #1C77E3;background-color:white;width:0px;height:302px;margin-right:18px">
                <img src="<?php echo $array[8];?>" style="margin-right:20px;width:220px;margin-top:10px">
                <h6 style="margin-bottom:10px;margin-top:19px;margin-left:42px"><?php echo $array[1];?></h6>

                <a href="seehotel.php?idh=<?php echo $array[0];?> && HuH=Test" class="btn btn-primary" style="margin-left:70px;margin-top:18px">voir plus <?php  $array[0];?></a>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
        </div>
    </section>
    <?php endif; ?>
    <?php mysqli_free_result($result); ?>
    </body>
</html>
