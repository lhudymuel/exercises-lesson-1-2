<?php 

function calculate($set1, $set2){
    $primenumbers = array(0,1,2,3,4);
    for ($ll = 0; $ll < count($primenumbers); $ll++) {

        if ($ll % 2 == 0) {
            $set = $set1;
        } else {
            $set = $set2;
        }
        echo '<table style="width:50%">';
        echo "<tr>";
        echo '<td style="background-color:'. $set .'">';
        echo '<pre>' . ($primenumbers[$ll]*2)."\t" . 
        ($primenumbers[$ll]*$primenumbers[$ll])."\t" . 
        ($primenumbers[$ll]*$primenumbers[$ll]*$primenumbers[$ll]) . "<br>";
        echo "<td>";
        echo "</td>";
        echo '</table>';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>exercise5</title>
   
</head>

<body>
  
   
        <?php
        calculate("cyan", "pink");
        print "<BR>";
        calculate("#CCCCCC", "#999999");
        ?>
    
    </table>

</body>
<a href="index.html">Back</a>
</html>