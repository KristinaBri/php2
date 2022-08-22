<?php 
        $output = "";

        if (isset($_POST['a'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            if ($a+$b>$c && $a+$c>$b && $b+$c>$a) {
                $output = "Trikampį sudaryti galime.";
            } else {
                $output = "Trikampio sudaryti neįmanoma.";
            }
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">

    <title>Task 1</title>
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="main1" style="width: 65%; text-align: center; margin: 0 auto;">
        <h1>Užduotis nr.1</h1>
        <p>Įvedami skaičiai -a, b, c kraštinių ilgiai (į atskirus input laukus). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir rezultatą išvestų.</p>

        <form action="" method="post">
            <input type="text" name="a" placeholder="Kraštinė nr.1" style="padding: 20px; margin: 15px;"><br>
            <input type="text" name="b" placeholder="Kraštinė nr.2" style="padding: 20px; margin: 15px;"><br>
            <input type="text" name="c" placeholder="Kraštinė nr.3" style="padding: 20px; margin: 15px;"><br>
            <button style="padding: 20px; margin: 15px;">Tikrinti</button>
        </form>

        <?= $output ?>
    </div>



    
</body>
</html>