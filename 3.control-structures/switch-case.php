<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Case</title>
</head>
<body>
   <?php
    $number = 25;
    
    switch($number){
        case 23:
            echo "It is 23";
            break;
        case 25:
            echo "It is 25";
            break;
        case 27:
            echo "It is 27";
            break;
        case 30:
            echo "It is 30";
            break;
            
        default:
            echo "This is Default";
    }
    ?>
    
</body>
</html>