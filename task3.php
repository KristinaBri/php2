<?php 
    $output = "";

   
    if (isset($_POST['metai']) && is_numeric($_POST['metai'])) {
        $metai = $_POST['metai'];
        
        switch ((($metai - 1984)) % 10)  {
            case 0:
            case 1:
                $spalva = '<span style="color:green; font-weight:bold">ŽALIA</span>';
                break;
            case 2:
            case 3:
                $spalva = '<span style="color:red; font-weight:bold">RAUDONA</span>';
                break;
            case 4:
            case 5:
                $spalva = '<span style="color:yellow; background-color:black; font-weight:bold">GELTONA</span>';
                break;
            case 6:
            case 7:
                $spalva = '<span style="color:white; font-weight:bold; background-color:black">BALTA</span>';
                break;
            case 8: 
            case 9:
                $spalva = '<span style="font-weight:bold">JUODA</span>';
                break;
            default:
                $spalva = "Nezinoma";
        }
        if ($metai >= 1984 && $metai <= 2043) {
            $output = $metai . " metų spalva yra " . $spalva;
        } else {
            $output = "Toks skaičius negalimas!";
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
    <title>Task 3</title>
</head>
<body>
<?php include 'nav.php'; ?>

<div class="main3" style="width: 65%; text-align: center; margin: 0 auto;">
<h1>Užduotis nr.3</h1>
<p>Senovės japonų kalendorių sudarė 60 metų ciklas. Visi metai cikle buvo sunumeruoti nuo 1 iki 60 ir suskirstyti poromis, kurių kiekviena turėjo savo spalvą (žalią, raudoną, geltoną, baltą ar juodą). Ciklo metų spalvos buvo paskirstytos taip:
 1, 2, 11, 12, 21, 22, …, 51, 52 metai – žalia spalva;
 3, 4, 13, 14, 23, 24, …, 53, 54 metai – raudona spalva;
 5, 6, 15, 16, 25, 26, …, 55, 56 metai – geltona spalva;
 7, 8, 17, 18, 27, 28, …, 57, 58 metai – balta spalva;
 9, 10, 19, 20, 29, 30, …, 59, 60 metai – juoda spalva.

Žinoma, kad naujasis 60 metų ciklas prasidėjo 1984-aisiais ir baigsis 2043-iaisiais metais; 1984-ieji ir 1985-ieji buvo žalios spalvos metai, 1986-ieji ir 1987-ieji buvo raudonos spalvos metai, 2043-ieji bus juodos spalvos metai. Sukurkite puslapį kuriame būtų įvedami metai ir būtų išvedama kokia yra įvestų metų spalva pagal japonų kalendorių.</p>

<form action="" method="post">
    <input type="text" name="metai" placeholder="Įveskite metus" style="padding: 20px; margin: 15px;"><br>
    <button style="padding: 20px; margin: 15px;">Rodyti spalvą</button>
</form>

<?=$output?>
</div>



</body>
</html>