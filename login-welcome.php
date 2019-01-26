<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $name = "";

        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            echo $_POST['name'];
            $name = $_POST['name'];
        }else{
            $name = "Not Submitted";
        }

        
    ?>

    <h1 class = "centered">Welcome <?php echo $name ?></h1>

</body>
</html>