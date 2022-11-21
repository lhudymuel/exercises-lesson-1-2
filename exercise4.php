<!DOCTYPE html>
<html>

<head>
    <title>Exercise 3</title>
</head>

<?php
//$systolic = 132;
//$diastolic = 86;

$systolic = random_int(100, 200);
$diastolic = random_int(50, 100);


echo "Blood Pressure Number: ".$systolic . " over ". $diastolic;

if ((120 < $systolic)&&($systolic < 130) || (80 < $diastolic)&&($diastolic < 85)) {
    $color = 'green';
    $oddoreven = 'normal';
} else if((130 < $systolic)&&($systolic < 139) || (85 < $diastolic)&&($diastolic < 89)){
    $color = 'yellow';
    $oddoreven = 'warning';
}else if(($systolic < 140) || (90 < $diastolic)){
    $color = 'red';
    $oddoreven = 'high';
}else {
    $oddoreven = 'error';
}

?>

<style>
    td {
        background-color: <?php echo $color; ?>;
        border: 1px solid black;
    }
</style>


<body>
    <table style="width:60%">
        <tr>
            <td>
                <center>
                    <?php echo $oddoreven ?>
                </center>
            </td>
        </tr>
        <a href="index.html"><br>Back</a>
</body>

</html>