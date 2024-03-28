<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas Persegi Panjang</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Kalkulator Luas Persegi Panjang</h2>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="panjang">Panjang:</label>
                <input type="number" name="panjang" id="panjang" required>
            </div>
            <div class="form-group">
                <label for="lebar">Lebar:</label>
                <input type="number" name="lebar" id="lebar" required>
            </div>
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php
        if(isset($_POST['hitung'])){
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $luas = $panjang * $lebar;
            echo "<h3>Luas Persegi Panjang adalah: $luas</h3>";
        }
        ?>
    </div>
</body>
</html>
