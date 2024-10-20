<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php mint</title>
</head>
<body>
    <h1> bang udah bang </h1>
    <?php
        echo "halo yuyyy<br>";
        print ("dlajhsdk <br>");
        printf ("adahsiud");

        echo "<br></br>";
        echo "<b>ini tebal </b>";
        echo "<table border =1>";
            echo "<tr>";
                echo "<td>ini kolom 1 </td>";
                echo "<td>ini kolom 2 </td>";
            echo "</tr>";
        echo "</table>";

        $bilangandesimal = 12.2;
        $bilanganbulad = 22;
        echo "<br> </br>";
        echo $bilanganbulad/2 ;
        echo "<br></br>";
        if ($bilanganbulad > 10){
            echo " lebih dari 10";
        }else if ($bilanganbulad< 10){
            echo "kurang dari 10";
        }
        
        
        echo "<br> </br>";
        for ($w=0; $w<5; $w++){
            echo "shong shingg" .$w+1 ."<br>";
        }

    ?>
    
</body>
</html>


