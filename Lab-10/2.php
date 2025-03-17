<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Account Number</th>
            <th>Balance</th>
            <th>Branch</th>
        </tr>

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "diploma-4";
            $con = mysqli_connect($servername, $username, $password, $dbname);

            if ($con) {
                $query = "SELECT * FROM account";
                $sql = mysqli_query($con, $query);

                while ($arr = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td> <?php echo $arr['AccountNumber'] ?></td>
                        <td><?php echo $arr['Balance'] ?></td>
                        <td><?php echo $arr['Branch'] ?></td>
                    </tr>

                <?php
                }
            } else {
                echo "Connection Failed";
            }

            ?>

        </tbody>
    </table>
</body>

</html>