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

$error =  array("","","","","","","");
$validation = false;
$check = array(false, false, false, false, false, false, false);
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
    if((count(array_unique($check))==1) and in_array(true, $check,true)==false){
        $validation = true;
        $story = "<p>Er zijn veel mensen die niet kunnen $input[0]. Neem nou $input[1]. Zelfs met de hulp
        van een $input[3]  of zelfs $input[2]  kan $input[1]  niet $input[0]. Dat heeft niet te maken met
        een gebrek aan $input[4], maar met een te veel aan $input[5]. Te veel $input[5]
        leidt tot $input[6] en dat is niet goed als je wilt $input[0]. Helaas voor $input[1].</p>";
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
                <?php if(!$validation){?>
                <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <span class="error"><?php echo $error[0];?></span>       
                    <label for="quest1">Wat zou je graag willen kunnen?</label>
                    <input type="text" id="quest1" name="quest[]"><br>
                    <span class="error"><?php echo $error[1];?></span>
                    <label for="quest2">Met welke persoon kun je goed opschieten?</label>
                    <input type="text" id="quest2" name="quest[]"><br>
                    <span class="error"><?php echo $error[2];?></span>
                    <label for="quest3">Wat is je favoriete getal?</label>
                    <input type="text" id="quest3" name="quest[]"><br>
                    <span class="error"><?php echo $error[3];?></span>
                    <label for="quest4">Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <input type="text" id="quest4" name="quest[]"><br>
                    <span class="error"><?php echo $error[4];?></span>
                    <label for="quest5">Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" id="quest5" name="quest[]"><br>
                    <span class="error"><?php echo $error[5];?></span>
                    <label for="quest6">Wat is je slechtste persoonlijke eigenschap?</label>
                    <input type="text" id="quest6" name="quest[]"><br>
                    <span class="error"><?php echo $error[6];?></span>
                    <label for="quest7">Wat is het ergste dat je kan overkomen?</label>
                    <input type="text" id="quest7" name="quest[]">
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