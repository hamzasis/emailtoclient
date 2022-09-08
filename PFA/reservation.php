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
                    <strong><div><li><a href="adminvol.php" target="courses"  style="font-family: Georgia, serif;">Vol</a></li></strong>
                    <strong><li><a href="adminvoiture.php" style="font-family: Georgia, serif;">Voiture</a></li></strong>
                    <strong><li><a href="adminhotel.php" style="font-family: Georgia, serif;">Hôtel</a></li></strong>
                    <strong><li><a href="Adminclient.php" style="font-family: Georgia, serif;">Admin</a></li></strong>
                    <strong><li><a href="reservation.php" class="A" style="font-family: Georgia, serif;">Réservations</a></li></strong>
                    <strong><li style="margin-left:450px;background-color:#1C77E3;border-radius: 5px;"><a href="" style="font-family: Georgia, serif;color:white">Se connecter</a></li></strong>
                </ul>
            </div>
            <div style="background-color:#1C77E3">
            <hr style="height:3px;margin-top:15px">
            </div>
        </nav>
    </div>
    <?php
    include 'PFAcon.php';
    $query="select * from reserve"; 
    $result=mysqli_query($dbCon,$query);
    ?>
    <div class="container mt-2">
    <div class="row">
    <div class="col-md-12">
    </div>
</div>
<div class="col-md-12">
<div class="float-left">
<h2 style="margin-left:420px">Réservations</h2>
</div>
<div class="float-right">
</div>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>
<table class="table" style="width:1300px;border: 1px solid #fff;border-collapse: collapse;background-color:white">
<thead style="border:1px #fff">
<tr>
<th scope="col" style="border:1px #fff">Numéro d'identité</th>
<th scope="col" style="border:1px #fff">Id Vol</th>
<th scope="col" style="border:1px #fff">Numéro vol</th>
<th scope="col" style="border:1px #fff">Classe</th>
<th scope="col" style="border:1px #fff">Nombre des place</th>
<th scope="col" style="border:1px #fff">date de départ</th>
<th scope="col" style="border:1px #fff">Enteprise</th>
<th scope="col" style="border:1px #fff">Id Voiture</th>
<th scope="col" style="border:1px #fff">Date dépare</th>
<th scope="col" style="border:1px #fff">Date fin</th>
<th scope="col" style="border:1px #fff">Supplements</th>
<th scope="col" style="border:1px #fff">Enteprise</th>
<th scope="col" style="border:1px #fff">Id hôtel</th>
<th scope="col" style="border:1px #fff">Nombre des chambres</th>
<th scope="col" style="border:1px #fff">Date fin </th>
<th scope="col" style="border:1px #fff">Total</th>
</tr>
</thead>
<tbody style="border:1px #fff">
<tr style="border:1px #fff">
<td style="border:1px #fff"><?php echo $array[1];?></td>
<td style="border:1px #fff"><?php echo $array[2];?></td>
<td style="border:1px #fff"><?php echo $array[3];?></td>
<td style="border:1px #fff"><?php echo $array[4];?></td>
<td style="border:1px #fff"><?php echo $array[5];?></td>
<td style="border:1px #fff"><?php echo $array[6];?></td>
<td style="border:1px #fff">Enteprise</td>
<td style="border:1px #fff"><?php echo $array[7];?></td>
<td style="border:1px #fff"><?php echo $array[8];?></td>
<td style="border:1px #fff"><?php echo $array[9];?></td>
<td style="border:1px #fff"><?php echo $array[10];?></td>
<td style="border:1px #fff">Enteprise</td>
<td style="border:1px #fff"><?php echo $array[11];?></td>
<td style="border:1px #fff"><?php echo $array[12];?></td>
<td style="border:1px #fff"><?php echo $array[13];?></td>
<td style="border:1px #fff"><?php echo $array[14];?></td>

<td style="border:1px #fff">
<a href="suppclient.php" style="margin-left:10px" class="btn btn-primary">Supprimer</a>

<a href="modifclient.php" style="margin-left:10px" class="btn btn-primary">Modifier</a>
</tr>
</tbody>
</table>
<?php endwhile; ?>
    <?php else: ?>
</div>
</div>
</div>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</body>
</html>