<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Fibonacci</h2>

    <form method="post" action="index.php">
        <label>Input N:</label>
        <input type="text" name="n" placeholder="Masukkan Nilai" min="1" required>
        <br><br>
        <input type="submit" name="submit">
    </form> 


     <?php
    if (isset($_POST['n'])) {
        $n = (int) $_POST['n'];

        $a = 0;
        $b = 1;
        $c = 0;
        $total = 0;

        while ($c < 2 * $n) {
            if ($c % 2 == 1) {
                $total = $total + $c;
            }
            echo "<h3>Deret fibonance: $c.-</h3>";
            $c = $a + $b;
            $a = $b;
            $b = $c;

        }
        echo "<h3>Hasil: $total</h3>";
}
?>

</body>
</html>