<?php 
    $result = "";
    $num = 1;


    if (isset($_POST['year'])) {
        $year = $_POST['year'];

        if ($year < 1896) {
            $result = "Olimpinės žaidynės dar net neprasidėjo.";
        } else if ($year >= 1896 && $year % 4 === 0) {
            $result = "Metai olimpiniai: " . "$num";
        } else {
            $result = "Metai ne olimpiniai";
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
    <title>Task 2</title>
</head>
<body>
    <?php include 'nav.php' ?>
    
    <div class="main2" style="width: 65%; text-align: center; margin: 0 auto;">
        <h1>Užduotis nr.2</h1>
        <p>Pirmosios vasaros olimpinės žaidynės įvyko 1896 m. Atėnuose. Po to jos vyko arba turėjo vykti kas ketveri metai, t.y. 1900 m. – antrosios, 1904 m. – trečiosios ir t.t. Neįvykusioms žaidynėms skiriamas eilės numeris, o jų metai vis tiek laikomi olimpiniais. Tinklapyje turi būti įvedami metai, nustatykite olimpinių žaidimų numerį, jei metai yra olimpiniai arba praneškite, kad metai ne olimpiniai. Tinkalpyje turi būti išvedama ar tai buvo olimpiniai metai ar ne, jei tai buvo olimpiniai metai taip pat išvesti ir jų numerį.</p>

        <form action="" method="post">
            <input type="text" name="year" placeholder="Įrašykite metus" style="padding: 20px; margin: 15px;"><br>
            <button style="padding: 20px; margin: 15px;">Rezultatas</button>
        </form>

        <?= $result?>
    </div>


</body>
</html>