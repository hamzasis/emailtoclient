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
<body style="background:whitesmoke">
<div><nav style="background:whitesmoke">
            <h2 class="flight" style="font-style: italic;color:#1C77E3"><i class="fas fa-plane " style="color:#1C77E3"></i>SweetFlight.com
            </h2>
            <a href="index.html"></a>
            <div class="nav-links" >
                <ul>
                    <strong><div><li><a href="adminvol.php" target="courses" class="A" style="font-family: Georgia, serif;">Vol</a></li></strong>
                    <strong><li><a href="adminvoiture.php" style="font-family: Georgia, serif;">Voiture</a></li></strong>
                    <strong><li><a href="adminhotel.php" style="font-family: Georgia, serif;">Hôtel</a></li></strong>
                    <strong><li><a href="adminClient.php" style="font-family: Georgia, serif;">Admin</a></li></strong>
                    <strong><li><a href="reservation.php" style="font-family: Georgia, serif;">Réservations</a></li></strong>
                    <strong><li style="margin-left:350px;background-color:#1C77E3;border-radius: 5px;"><a href="ajtvol.php" style="font-family: Georgia, serif;color:white">Ajouter</a></li></strong>
                    <strong><li style="margin-left:10px;background-color:#1C77E3;border-radius: 5px;"><a href="Login.php" style="font-family: Georgia, serif;color:white">Se connecter</a></li></strong>
                </ul>
            </div>
            <div style="background-color:#1C77E3">
            <hr style="height:3px;margin-top:15px">
            </div>
        </nav>
    </div>
    <div class="container mt-2">
    <div class="row">
    <div class="col-md-12">
    </div>
</div>
<div class="col-md-12">
<div class="float-left">
<h2 style="margin-left:400px">Les Vols</h2>
</div>
<div class="float-right">
</div>
<table class="table" style="width:1100px;border: 1px solid #fff;border-collapse: collapse;background-color:white">
<thead style="border:1px #fff">
<tr>
<th scope="col" style="border:1px #fff;visibility:collapse">Id</th>
<th scope="col" style="border:1px #fff">Num</th>
<th scope="col" style="border:1px #fff">Lieu départ</th>
<th scope="col" style="border:1px #fff">Lieu d'arrive</th>
<th scope="col" style="border:1px #fff">Date départ</th>
<th scope="col" style="border:1px #fff">Date d'arrive</th>
<th scope="col" style="border:1px #fff">Prix</th>
<th scope="col" style="border:1px #fff">Entreprise</th>
</tr>
</thead>
<tbody style="border:1px #fff">
<tr style="border:1px #fff">
<th scope="row" style="border:1px #fff;visibility:collapse">1</th>
<td style="border:1px #fff">1</td>
<td style="border:1px #fff">Maroc</td>
<td style="border:1px #fff">Egype</td>
<td style="border:1px #fff">11/11/2022 - 11:11</td>
<td style="border:1px #fff">12/11/2022 - 11:11</td>
<td style="border:1px #fff">2000</td>
<td style="border:1px #fff">Entreprise</td>
<td style="border:1px #fff">
<a href="suppvol.php" style="margin-left:10px" class="btn btn-primary">Supprimer</a>
<a href="modifvol.php" style="margin-left:10px" class="btn btn-primary">Modifier</a>
</tr>
<tr style="border:1px #fff">
</tr>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>