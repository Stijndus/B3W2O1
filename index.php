<?php
include'comp.php';
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

<body>
    <div class="content">
        <section>
        <h1>Mad Libs</h1>
            <div class="wrapper">
                <?php
             echo $nav;
            ?>
                <form class="form">
                    <label for="quest1">Wat zou je graag willen kunnen?</label>
                    <input type="text" id="quest1" name="quest1"><br>
                    <label for="quest2">Met welke persoon kun je goed opschieten</label>
                    <input type="text" id="quest2" name="quest2"><br>
                    <label for="quest3">Wat is je favoriete getal?</label>
                    <input type="text" id="quest3" name="quest3"><br>
                    <label for="quest4">Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <input type="text" id="quest4" name="quest4"><br>
                    <label for="quest5">Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" id="quest5" name="quest5"><br>
                    <label for="quest6">Wat is je slechtste persoonlijke eigenschap</label>
                    <input type="text" id="quest6" name="quest6"><br>
                    <label for="quest7">Wat is het ergste dat je kan overkomen?</label>
                    <input type="text" id="quest6" name="quest7">
                </form>
                <?php
                    echo $end;
                ?>
            </div>
        </section>
    </div>
</body>

</html>