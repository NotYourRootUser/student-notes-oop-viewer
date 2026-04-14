<?php

require_once "functions.php";

$noteObjects = buildStudentNoteObjects($studentNotes);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Student Notes OOP Viewer</title>
    <meta name="viewport" content="width=device-width" />
</head>

<body>

    <h1>All Student Notes</h1>

    <?php foreach ($noteObjects as $noteObject) { ?>
        <h2>
            <?php echo $noteObject->studentName; ?>
        </h2>
        <p>
            <?php echo $noteObject->noteText; ?>
        </p>
        <p>
            <?php echo $noteObject->getStatusLabel(); ?>
        </p>
    <?php
    } ?>

</body>

</html>