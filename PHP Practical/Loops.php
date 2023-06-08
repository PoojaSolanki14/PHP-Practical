<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>
    <?php
    echo "<h4>While Loop in PHP</h4>";
    $a = 0;
    while($a<=12){
        echo "<br>";
        echo "The value of A is : ",$a;
        $a++;
    }

    $b = 0;
    $languages =array("C","C++","JAVA","HTML","PHP","Android");
    while($b< count($languages)){
        echo "<br>";
        echo "The value of languages is : ",$languages[$b];
        $b++;
    }

    echo "<h4>Do While Loop In PHP</h4>";
    //atleast one condition is always true in do while loop
    $c = 0;
    do {
        echo "<br>";
        echo "The value of languages is : ",$languages[$c];
        $c++;
    }while($c< count($languages));

    $c = 50;
    do {
        echo "<br>";
        echo "The value of C is : ",$c;
        $c++;
    }while($c<10);

    echo "<h4>For Loop In PHP</h4>";
    $e=10;

    for($e=0;$e<10;$e++){
        echo $e;
    }

    echo "<h4>ForEach Loop In PHP</h4>";
    
    foreach($languages as $value){
        echo "<br>";
        echo $value;
    }
    ?>
</body>
</html>