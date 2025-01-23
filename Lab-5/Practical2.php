<!-- 2. WAP to create calculator using all four types of UDF.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="GET">
        <input type="number" name="num1" placeholder="Enter first number" >
		<select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" >
        
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operation = $_GET['operation'];

		
		function add($a, $b) {
			return $a + $b;
		}
	
		// Function for Subtraction
		function subtract($a, $b) {
			return $a - $b;
		}
	
		// Function for Multiplication
		function multiply($a, $b) {
			return $a * $b;
		}
	
		// Function for Division
		function divide($a, $b) {
			return $a / $b;
		}
		
	
        switch ($operation) {
            case 'add':
				$result= add($num1, $num2);
                echo "Result is $result";
                break;
            case 'subtract':
                $result= subtract($num1, $num2);
                echo "Result is $result";
                break;
            case 'multiply':
				$result= multiply($num1, $num2);
                echo "Result is $result";
                break;
            case 'divide':
                $result= divide($num1, $num2);
                echo "Result is $result";
                break;
            default:
                echo "Invalid operation!";
        }
    }
    ?>

</body>
</html>
