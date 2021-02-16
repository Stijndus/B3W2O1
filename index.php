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

$baksteen = false;
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
        $baksteen = true;
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
                ?>
                <?php if(!$baksteen){?>
                <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <label for="quest1">Wat zou je graag willen kunnen?</label>
                    <input type="text" id="quest1" name="quest[]"><br>
                    <label for="quest2">Met welke persoon kun je goed opschieten</label>
                    <input type="text" id="quest2" name="quest[]"><br>
                    <label for="quest3">Wat is je favoriete getal?</label>
                    <input type="text" id="quest3" name="quest[]"><br>
                    <label for="quest4">Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <input type="text" id="quest4" name="quest[]"><br>
                    <label for="quest5">Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" id="quest5" name="quest[]"><br>
                    <label for="quest6">Wat is je slechtste persoonlijke eigenschap</label>
                    <input type="text" id="quest6" name="quest[]"><br>
                    <label for="quest7">Wat is het ergste dat je kan overkomen?</label>
                    <input type="text" id="quest7" name="quest[]">
                    <input type="submit" id="submit" value="Submit">
                </form>
                <?php } ?>
                <?php
                    echo $end;
                ?>
            </div>
        </section>
    </div>
</body>

</html>