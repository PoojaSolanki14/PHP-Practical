<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else</title>
    <style>
        *{
            margin:0;
            padding:6px;
            box-sizing:border-box;
        }
        .container{
            max-width:80%;
            background-color:red; 
            margin:auto;
            padding:23px;  
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Let's Learn PHP</h1>
        This is the container
        <?php
        $age=34;
        echo "<br>";
        if($age>18){
            echo "You can go to party";
        }
        else if($age==7){
                echo "You are 7 year old";
        }
        else if($age==9){
                echo "You are 9 year old";
        }
        else{
            echo "You can not go to party";
        }
        ?>
    </div>
</body>
</html>