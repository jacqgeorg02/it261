<?php
$people['Donald_Trump'] = 'trump_Former President...present defendant...<b>future resident of the "poky".</b>_dt';
$people['Joe_Biden'] = 'biden_President from PA and <b>will probably run in \'24</b>._jb';
$people['Hilary_Clinton'] = 'clint_Secretary from NY._hc';
$people['Bernie_Sanders'] = 'sande_Senator from VT._bs';
$people['Elizabeth_Warren'] = 'warre_Senator from MA._ew';
$people['Kamala_Harris'] = 'harri_Vice President from CA._kh';
$people['Cory_Booker'] = 'booke_Senator from NJ._cb';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY._ay';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN._pb';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN._ak';
$people['Julian_Castro'] = 'castr_Former Secretary of Housing/Urban from TX._jc';
// $people as our variable, then we have our key, and then we have our value
// when it comes to people, it's going to be a $name and the value will be $image

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7 Class Exercise -- Pictures</title>
    <style>
        table {
            border:1px solid #800000;
            border-collapse:collapse;
        }

        td {
            border:1px solid #800000;
        }


    </style>
</head>
<body>
    <!-- when we have an array, we have to have a foreach loop -->

<table>
<?php foreach($people as $name => $image):?>
<tr>
    <td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt ="<?php echo str_replace('_', ' ',$name) ;?>"></td>
    <td><?php echo str_replace('_', ' ',$name )  ;?></td>
    <td>
    <?php echo substr($image, 6,-3);?>
    </td>
    <td><img src="images/<?php echo substr($image, -2, 2);?>.jpg" alt ="<?php echo str_replace('_', ' ',$name) ;?>">
    </td>
</tr>
<?php endforeach ; ?>


</table>





    
</body>
</html>