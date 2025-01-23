<!-- 5. WAP that prompts the user to enter a letter and check whether a letter is a vowel  -->
<!-- or consonants. (C)  -->
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="get">
        Letter: <input type="text" name="letter"><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $letter =$_GET['letter'];
        if ($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u') {
            echo "$letter is a vowel.";
        } else {
            echo "$letter is a consonant.";
        }
    }
    ?>
</body>
</html>
