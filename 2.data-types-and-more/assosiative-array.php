<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assosiative Array</title>
</head>
<body>
   <?php 
    //Array old method
    $arrayList = array('Ruhul','Amin','Parvez');
    print_r($arrayList);
    
    echo "<br>";
    
    //Assosiative Array old method
    $newArray = array('firstName' => 'Ruhul', 'lastName' => 'Amin');
    print_r($newArray);
    
    echo "<br>";
    
    //Array new method
    $arrayList2 = ['ruhul', 'amin', 'parvez'];
    print_r($arrayList2);
    
    echo "<br>";
    
    //Assosiative Array new method
    $arrayList3 = ['first' => 'RUHUL', 'last' => 'PARVEZ'];
    print_r($arrayList3);
    ?>
    
</body>
</html>