<!-- 2. WAP to demonstrate the use of Include, Require, Include_Once and Require_Once. (A) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include and Require Demo</title>
</head>
<body>

    <!-- Include Header -->

    
    <?php include 'header.php'; ?>

    <!-- Main Content -->
    <div>
        <h2>Main Page Content</h2>
        <p>This content is specific to the main page.</p>

        <!-- Include Shared Content -->
        <?php include 'content.php'; ?>

        <!-- Try Including Again (include_once ensures it's included only once) -->
        <?php include_once 'content.php'; ?>

        <!-- Missing File with Include -->
        <?php
        echo "<h3>Using include for a missing file:</h3>";
        include 'missing_file.php'; // Will generate a warning but continue execution
        ?>

        <!-- Missing File with Require -->
        <?php
        echo "<h3>Using require for a missing file:</h3>";
        // require 'missing_file.php'; // Uncommenting this will stop execution
        ?>
    </div>

    <!-- Include Footer -->
    <?php require_once 'footer.php'; ?>

</body>
</html>
