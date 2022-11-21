<?php
function stars($count){
    for ($star = 0; $star < $count; $star++) {
        echo "*****" . "<br>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Exercise 4</title>
</head>

</html>

<body>
    <?php
        stars(5);
    ?>
</body>
<a href="index.html">Back</a>