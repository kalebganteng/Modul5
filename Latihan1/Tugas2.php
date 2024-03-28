<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Biodata</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="text" name="umur" id="umur" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" id="alamat" rows="3" required></textarea>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            $alamat = $_POST['alamat'];

            echo "<h3>Data Biodata:</h3>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Umur:</strong> $umur tahun</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
        }
        ?>
    </div>
</body>
</html>
