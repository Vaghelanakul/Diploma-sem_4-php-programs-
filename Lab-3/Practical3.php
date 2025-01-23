<!-- 3. WAP to make a Simple Calculator using switch...case. (B -->
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    
    <form method="get">
        First Number: <input type="number" name="num1" >
        Operation:
        <select name="operation" >
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        Second Number: <input type="number" name="num2" ><br>
        
        <button type="submit" name="submit" >Calculate</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operation = $_GET['operation'];

        switch ($operation) {
            case "add": 
                $result = $num1 + $num2; 
                break;
            case "sub": 
                $result = $num1 - $num2; 
                break;
            case "multiply": 
                $result = $num1 * $num2; 
                break;
            case "divide":
                $result = $num1 / $num2;
                break;
            default: 
                $result = "Invalid operation!";
        }

        echo "The result is: $result";
    }
    ?>
</body>
</html>
