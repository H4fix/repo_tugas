<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Tahun Kabisat</title>
</head>
<body>
    <h1>Menentukan Tahun Kabisat</h1>
    
    <form method="post" action="">
        <label for="year">Masukkan Tahun:</label>
        <input type="number" id="year" name="year" min="1" required>
        <input type="submit" value="Periksa">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil tahun dari formulir
        $year = intval($_POST["year"]);

        // Fungsi untuk menentukan tahun kabisat
        function isLeapYear($year) {
            return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
        }

        if (isLeapYear($year)) {
            echo "<p>$year adalah tahun kabisat.</p>";
        } else {
            echo "<p>$year bukan tahun kabisat.</p>";
        }
    }
    ?>
</body>
</html>
