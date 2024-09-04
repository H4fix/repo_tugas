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
