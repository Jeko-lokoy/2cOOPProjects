<!DOCTYPE html>
<html>
<head>
    <title>J-Calculator</title>
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            border-width: 100px;
        }
        .calculator {
            background-color: #fff;
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="number"] {
            width: 40px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>J-Calculator</h1>
        <form method="post">
            <label for="num1">Number 1:</label>
            <input type="number" id="num1" name="num1" required><br><br>
            <label for="num2">Number 2:</label>
            <input type="number" id="num2" name="num2" required><br><br>
            <input type="submit" name="submit" value="Calculate">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $sum = $num1 + $num2;
            $difference = $num1 - $num2;
            $product = $num1 * $num2;
            $quotient = $num1 / $num2;

            echo "<h2>Results:</h2>";
            echo "Sum: " . $sum . "<br>";
            echo "Difference: " . $difference . "<br>";
            echo "Product: " . $product . "<br>";
            echo "Quotient: " . $quotient . "<br>";
        }
        ?>
    </div>
</body>
</html>
