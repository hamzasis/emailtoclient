<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort booking form</title>
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
            <h2 class="flight" style="font-style: italic;color:#1C77E3"><i class="fas fa-taxi " style="color:#1C77E3"></i>sweetflight.com
            </h2>
            <a href="index.html"></a>
            <div class="nav-links" >
                <ul>
                    <strong><div><li><a href="mainvol.php" target="courses" style="font-family: Georgia, serif;">Vol</a></li></strong>
                    <strong><li><a href="mainvoiture.php" style="font-family: Georgia, serif;">Voiture</a></li></strong>
                    <strong><li><a href="mainhotel.php" style="font-family: Georgia, serif;">Hotel</a></li></strong>
                    <strong><li><a href="Taxi.php" class="A" style="font-family: Georgia, serif;">taxi</a></li></strong>
                    <strong><li><a href="" style="font-family: Georgia, serif;">About</a></li></strong>
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
        <form class="form-group">
        <h2 style="text-align:center;color:black;padding-top:20px;margin-top:65px;background-color:none">Reservation d'un taxi </h2>
        <div id="form" style="height:240px">
            <div>
        <h1 class="text-white text-center" style="height:0px"> </h1>    
        <div>        
        <div id="first-group">
            <div class="input-grp">
                    <label>
                        <h5 style="margin-right: 100px;">Numéro de carte nationale</h5>
                    </label>
                    <input type="text" required="required" name="idendite" class="form-control" placeholder="Numéro de Vol">
                </div>
                </div>
                <div id="second-group">
                <label>
                        <h5 style="margin-right: 150px;margin-top:0px">Date de depart</h5>
                    </label>
                    <input type="datetime-local" class="form-control">    
                </div>
                <div id="second-group" style="padding-bottom:120px">
                <a href="table.php" class="btn btn-primary" style="margin-left:100px">Confirme</a>
                </div>
        </div>
        </form>
    </div>
    </body>
</html>