<?php

require_once "functions.php";

$noteObjects = buildStudentNoteObjects($studentNotes);
$studentName = $_GET["student"] ?? "";
$filteredNotes = filterNotesByStudent($noteObjects, $studentName);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Student Notes OOP Viewer</title>
    <meta name="viewport" content="width=device-width" />
</head>

<body>
    <p><a href="index.php">All notes</a></p>

    <h1>Notes by student</h1>
    <p><a href="student-view.php?student=Mia">Mia</a></p>
    <p><a href="student-view.php?student=Andy">Andy</a></p>
    <p><a href="student-view.php?student=Jordan">Jordan</a></p>
    <p><a href="student-view.php?student=Chloe">Chloe</a></p>

    <?php

    foreach ($filteredNotes as $filteredNote) { ?>

        <h1>
            <?php echo $filteredNote->studentName; ?>
        </h1>
        <p>
            <?php echo $filteredNote->noteText; ?>
        </p>
        <p>
            <?php echo $filteredNote->getStatusLabel(); ?>
        </p>

    <?php } ?>

</body>

</html>