<!-- 3. WAP to demonstrate the use of GET, POST and REQUEST methods. (A) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET, POST, and REQUEST Demo</title>
</head>

<body>

    <form method="GET" action="get.php">
        <label>GET Method:</label>
        <input type="text" name="get_input" placeholder="Enter something via GET"><br><br>
        <button type="submit" name="submit_get">Submit GET</button>
    </form>

    <form method="POST" action="post.php">
        <label>POST Method:</label>
        <input type="text" name="post_input" placeholder="Enter something via POST"><br><br>
        <button type="submit" name="submit_post">Submit POST</button>
    </form>

    

</body>

</html>