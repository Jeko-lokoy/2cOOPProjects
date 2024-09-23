<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <link rel="stylesheet" href="style.css">
        <div>
            <label class="title" for="title">J-Calculator</label><br>
            <label for="firstnum">First Number</label>
            <input class="firstinput" type="number" name="firstnum"><br>
        </div>

        <div class="second">
            <label for="secondnum">Second Number</label>
            <input class="secondinput" type="number" name="secondnum"><br>
        </div>
        
        <div>
            <button type="submit">Calculate</button>
        </div>

        <div class="total">
                <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $firstnum = $_POST["firstnum"];
                $secondnum = $_POST["secondnum"];
                $sum = $firstnum + $secondnum;

                echo "The Sum of " . $firstnum . " and " . $secondnum. " is " . $sum;
            }
            ?>    
        </div>
    </form>   


</body>
</html>
