<?php
// This file will demonstrate for loops and in addition to placing your php inside your HTML!!!
// The for loop -- Loops thourhg a block of code a specified number of times.
// for (init counter; test counter; increment counter) {code to be executed for eachiteration;}
// celsius and fahrenheit
// $fahr = ($celcius * 9/5) +32;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celsius Table</title>
    <style>
     * {
        padding:0;
        margin:0;
        box-sizing: border-box;
     }  
     
     table {
        width:500px;
        margin:20px auto;
        border-collapse:collapse;
        border:1px solid lightblue;
     }

     td, th {
        border:1px solid lightblue;
        border-collapse:collapse;
        padding:5px;
     }

     h1, h2 {
        text-align:center;
        margin:10px 0;
        color:green;
     }
    </style>

</head>
<body>
    <h1>My Celsius / Fahrenheit Table </h1>
    <table>
    <tr>
        <th>Celsius</th>
        <th>Fahrenheit</th>
    </tr>
    <?php
    for($cel = 0; $cel <=100; $cel += 5) {
        $fahr = ($cel * 9/5) + 32;
        echo '<tr>';
        echo '<td> '.$cel.' degrees </td>';
        echo '<td> '.$fahr.' degrees </td>';
        echo '</tr>';
    }
    ?>
    </table>
    <h1>My Celsius / Fahrenheit Table with an increment of 3 </h1>
    <table>
    <tr>
        <th>Celsius</th>
        <th>Fahrenheit</th>
    </tr>
    <?php
    for($cel = 0; $cel <=100; $cel += 3) {
        $fahr = ($cel * 9/5) + 32;
        echo '<tr>';
        echo '<td> '.$cel.' degrees </td>';
        echo '<td>'.number_format($fahr, 0).' degrees </td>';
        echo '</tr>';
    }
    ?>
    </table>

    <h2>You will now complete a kilometer / mileage table on your own.</h2>

    <h1>My Kilometer / Mileage Table</h1>
    <table>
    <tr>
        <th>Kilometers</th>
        <th>Miles</th>
    </tr>
    <?php
    for($kil = 0; $kil <=100; $kil += 5) {
        $mil = $kil * 0.621371;
        echo '<tr>';
        echo '<td> '.$kil.' Kilometers</td>';
        echo '<td> '.$mil.' Miles </td>';
        echo '</tr>';
    }
    ?>
    </table>
    <h1>My Kilometer / Mileage Table with 1 Decimal Place</h1>
    <table>
    <tr>
        <th>Kilometers</th>
        <th>Miles</th>
    </tr>
    <?php
    for($kil = 0; $kil <=100; $kil += 5) {
        $mil = $kil * 0.621371;
        echo '<tr>';
        echo '<td> '.$kil.' Kilometers</td>';
        // echo '<td> ' .$mil.' Miles </td>';
        echo '<td>'.number_format($mil, 1).' Miles</td>'; 
        echo '</tr>';
    }
    ?>
    </table>
    
</body>
</html>