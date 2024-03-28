<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggalan</title>
</head>
<body>
    <?php
    echo "<p>Format Default: " . date("m-F-Y, g:i:s a") . "</p>";
    echo "<p>Format Short Date: " . date("m/d/y") . "</p>";
    echo "<p>Format Long Date: " . date("l, F d, Y") . "</p>";
    echo "<p>Format Short Time: " . date("g:i a") . "</p>";
    echo "<p>Format Long Time: " . date("g:i:s A") . "</p>";
    ?>
</body>
</html>
