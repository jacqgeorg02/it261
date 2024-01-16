<?php
//understanding the logic!!
// 1 ruble = 0.017 dollars
// 1 poundsterling = 1.15 dollars
// 1 canadian dollar = .76 dollars
// 1 euro = 1.00 dollars
// 1 yen = .0074 dollars

// rubles = 10007
// pound sterling = 500
// canada = 5000
// euros = 1200
// yen = 2000
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Logic Exercise</title>

    <style>
        * {
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }

        #wrapper {
            width:500px;
            margin:30px auto;
        }

        table {
            border: 1px solid orange;
            border-collapse:collapse;
            width:500px;
        }

        th, td {
            border: 1px solid orange;
            padding:8px;

        }

        h1, h2, h3 {
            text-align: center;
        }
    </style>   
</head>

<body>
    <div id="wrapper">
        <h1>After our world-wind travels, we have returned home with the following currencies</h1>
        <ul>
            <li>Rubles</li>
            <li>Pounds Sterling</li>
            <li>Canadian Dollars</li>
            <li>Euros</li>
            <li>Yen</li>
        </ul>
        <h2>Whatever shall we do?</h1>

    <table>
        <tr>
        <th colspan="2">Currency</th>
        <th>dollars</th>
        </tr>

        <tr>
            <th>Rubles</th>
            <td>10007</td>
            <td>170.12</td>
        </tr>

        <tr>
            <th>Pounds Sterling</th>
            <td>500</td>
            <td>575.00</td>
        </tr>

        <tr>
            <th>Canadian Dollars</th>
            <td>5000</td>
            <td>3800.00</td>
        </tr>

        <tr>
            <th>Euros</th>
            <td>1200</td>
            <td>1200.00</td>
        </tr>

        <tr>
            <th>Yen</th>
            <td>2000</td>
            <td>14.80</td>
        </tr>





    </table>



    <!-- end of wrapper -->
    </div>
</body>
</html>
