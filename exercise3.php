<!DOCTYPE html>
<html>

<head>
    <title>exercise3</title>
</head>

<?php
$data = random_int(0, 10);

echo "Random Number: ".$data . " ";

if ($data % 2 == 0) {
    $color = 'green';
    $oddoreven = 'even';
} else {
    $color = 'blue';
    $oddoreven = 'odd';
}

?>

<style>
    td {
        background-color: <?php echo $color; ?>;
        border: 1px solid black;
       
    }
</style>


<body>
    <table style=" width: 60%;">
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