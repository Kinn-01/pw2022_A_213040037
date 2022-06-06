<?php 
require 'vendor/autoload.php';

require 'section/function.php';
$jerseay = query("SELECT * FROM jerseay");

// reference the Dompdf namespace
use Dompdf\Dompdf;
// use Dompdf\Options;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

// $options = new Options();
// $options->set('isRemoteEnabled',true);      
// $dompdf = new Dompdf( $options );


$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

         <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <link rel="stylesheet" href="http://localhost/pw2022_a_213040037/tubes/css/style.css" />


    <title>Chelsea Store</title>
</head>
<body>
        <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Price</th>
            <th scope="col">Tshirt</th>
            <th scope="col">Tahun</th>
            <th scope="col">Size</th>
            <th scope="col">Stok</th>
        </tr>';
        

        $i = 1;
        foreach( $jerseay as $jrs) {
            $html .= '<tr>
                    <td>' . $i++ . '</td>
                   
                    <td class="align-middle"><img src="http://localhost/pw2022_a_213040037/tubes/img/'. $jrs["gambar"] .'" 
                    width="50"></td>
                   
                    <td class="align-middle">'. $jrs["price"] .'</td>
                    <td class="align-middle">'. $jrs["tshirt"] .'</td>
                    <td class="align-middle">'. $jrs["tahun"] .'</td>
                    <td class="align-middle">'. $jrs["size"] .'</td>
                    <td class="align-middle">'. $jrs["stok"] .'</td>
            
            </tr>';
        }

 $html .= '</table>
</body>
</html>';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>
