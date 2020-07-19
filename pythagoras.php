
<?php
$a = 10;
$b = 6;
$obdelnikobsah = $a * $b;

//echo "Obsah obdelníku o stranách" . $a . "cm a " . $b . "cm je " . $obdelnikobsah . "cm.";


$c = 6;
$beta = 60;
$vyska = $c * sin(deg2rad($beta));
$trojuhelnikobsah = round(($c * $vyska)/2,0);

//echo $trojuhelnikobsah;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starověká matematika</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Starověká matematika</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Pythagoras <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Archimedes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Euklides</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Zde napiš, co hledáš" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Hledat</button>
        </form>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Obdelník</h2>
            <table>
                <tbody>
                <tr>
                    <th>Délka strany A:</th>
                    <td class="text-right"><?php echo $a ?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th>Délka strany B:</th>
                    <td class="text-right"><?php echo $b ?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th>Obvod obdelníku:</th>
                    <td class="text-right"><?php echo (2*($a+$b))?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th>Obsah obdelníku:</th>
                    <td class="text-right"><?php echo $obdelnikobsah?></td>
                    <td>cm<sup>2</sup></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <h2>Trojúhelník</h2>
            <table>
                <tbody>
                <tr>
                    <th>Délka strany A:</th>
                    <td class="text-right"><?php echo $c ?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th>Úhel:</th>
                    <td class="text-right"><?php echo $beta ?></td>
                    <td>°</td>
                </tr>
                <tr>
                    <th>Obvod trojúhleníku:</th>
                    <td class="text-right"><?php echo 3*$c?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th>Obsah trojúhelníku:</th>
                    <td class="text-right"><?php echo $trojuhelnikobsah?></td>
                    <td>cm<sup>2</sup></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
