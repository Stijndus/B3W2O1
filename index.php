<?php
include 'comp.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php

$error = array("", "", "", "", "", "", "", "");
$validation = false;
$check = array(false, false, false, false, false, false, false, false);
$newArr = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $input = $_POST['quest'];
    $counter = 0;
    foreach ($input as $data) {
        if (empty($data)) {
            $newArr[$counter] = checkdata($data);
            $check[$counter] = true;
        }
        $counter++;
    }
    if ((count(array_unique($check)) == 1) and in_array(true, $check, true) == false) {
        $validation = true;
        $story = "Er heerst paniek in het koninkrijk $input[2], Baas $input[5] is ten einde raad en als baas
        $input[5] ten einde raad is, dan roept hij zijn ten-einde-Raadspersoon $input[1].
        <br>
        <br>
        '$input[1]! Het is een ramp! Het is een schande!'
        <br>
        <br>
        'Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?'
        <br>
        <br>
        'Mijn $input[0] is verdwenen! Zo maar, zonder waarschuwing. En ik had nog $input[4] voor hem
        gekocht!'
        <br>
        <br>
        'Majesteit, uw $input[0] komt vast vanzelf weer terug?'
        <br>
        <br>
        'Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd $input[7] leren?'
        'Maar Sire, daar kunt u toch uw $input[6] voor gebruiken.'
        <br>
        <br>
        '$input[1], je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.'
        <br>
        <br>
        '$input[3], Sire.'
        </p>";
    } else {
        if ($check[0]) {
            $error[0] = "Er is geen geldige invoer gevonden";
        }
        if ($check[1]) {
            $error[1] = "Er is geen geldige invoer gevonden";
        }
        if ($check[2]) {
            $error[2] = "Er is geen geldige invoer gevonden";
        }
        if ($check[3]) {
            $error[3] = "Er is geen geldige invoer gevonden";
        }
        if ($check[4]) {
            $error[4] = "Er is geen geldige invoer gevonden";
        }
        if ($check[5]) {
            $error[5] = "Er is geen geldige invoer gevonden";
        }
        if ($check[6]) {
            $error[6] = "Er is geen geldige invoer gevonden";
        }
        if ($check[7]) {
            $error[7] = "Er is geen geldige invoer gevonden";
        }
    }
}

function checkdata($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<body>
    <div class="content">
        <section>
            <h1>Mad Libs</h1>
            <div class="wrapper">
                <?php
echo $nav;
echo $story;
?>
                <?php if (!$validation) {?>
                <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <h2>Er heerst paniek..</h2>
                    <span class="error"><?php echo $error[0]; ?></span>
                    <label for="quest1">Welk dier zou je nooit als huisdier nemen?</label>
                    <input type="text" id="quest1" name="quest[]"><br>
                    <span class="error"><?php echo $error[1]; ?></span>
                    <label for="quest2">Wie is de belangerijkste persoon in je leven?</label>
                    <input type="text" id="quest2" name="quest[]"><br>
                    <span class="error"><?php echo $error[2]; ?></span>
                    <label for="quest3">In welk land zou je graag willen wonen?</label>
                    <input type="text" id="quest3" name="quest[]"><br>
                    <span class="error"><?php echo $error[3]; ?></span>
                    <label for="quest4">Wat doe je als je je verveelt?</label>
                    <input type="text" id="quest4" name="quest[]"><br>
                    <span class="error"><?php echo $error[4]; ?></span>
                    <label for="quest5">Met welk speelgoed speelde je als kind het meest?</label>
                    <input type="text" id="quest5" name="quest[]"><br>
                    <span class="error"><?php echo $error[5]; ?></span>
                    <label for="quest6">Bij welke docent spijbel je het liest?</label>
                    <input type="text" id="quest6" name="quest[]"><br>
                    <span class="error"><?php echo $error[6]; ?></span>
                    <label for="quest7">Als je €100.000,- had, wat zou je dan kopen?</label>
                    <input type="text" id="quest7" name="quest[]">
                    <span class="error"><?php echo $error[7]; ?></span>
                    <label for="quest8">Wat is je favoriete bezigheid?</label>
                    <input type="text" id="quest8" name="quest[]">
                    <input type="submit" id="submit" value="Submit">
                </form>
                <?php }?>
                <?php
echo $end;
?>
            </div>
        </section>
    </div>
</body>

</html>