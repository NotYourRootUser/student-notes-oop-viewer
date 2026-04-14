<?php

require_once "functions.php";

$noteObjects = buildStudentNoteObjects($studentNotes);
$statusFilter = $_GET["status"] ?? "open";
$filteredNotes = filterNotesByStatus($noteObjects, $statusFilter);
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

    <h1>Notes by status</h1>
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