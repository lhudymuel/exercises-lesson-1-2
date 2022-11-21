<!DOCTYPE html>
<html>

<head>
    <title>Exercise 2</title>
</head>

</html>
<body>
    <?php
    $primenumbers = array(1,2,3,5,7);
    for ($ll = 0; $ll < count($primenumbers); $ll++) {
        echo "<pre>". ($primenumbers[$ll]*2)."\t" . 
        ($primenumbers[$ll]*$primenumbers[$ll])."\t" . 
        ($primenumbers[$ll]*$primenumbers[$ll]*$primenumbers[$ll]) . "<br>";
    }
    ?>
     <a href="index.html">Back</a>
</body>