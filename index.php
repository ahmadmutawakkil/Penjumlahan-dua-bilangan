<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Dua Bilangan</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { text-align: center; }
        input[type="number"] { margin: 5px; padding: 5px; }
        button { padding: 5px 10px; }
    </style>
</head>
<body>
    <div class="container">
        <!-- Tambahkan Informasi Nama, Kelas, dan NIM -->
        <p>Nama: Ahmad Mutawakkil</p>
        <p>Kelas: TI22K1</p>
        <p>NIM: 202211019</p>

        <h2>Penjumlahan Dua Bilangan</h2>
        
        <form method="POST" action="">
            <input type="number" name="bilangan1" placeholder="Masukkan bilangan pertama" required>
            <input type="number" name="bilangan2" placeholder="Masukkan bilangan kedua" required>
            <br><br>
            <button type="submit" name="submit">Hitung</button>
        </form>

        <?php
            if (isset($_POST['submit'])) {
                $bilangan1 = $_POST['bilangan1'];
                $bilangan2 = $_POST['bilangan2'];
                $hasil = $bilangan1 + $bilangan2;
                echo "<h3>Hasil Penjumlahan: $hasil</h3>";
            }
        ?>
    </div>
</body>
</html>
