<?php

require_once "functions.php";

$noteObjects = buildStudentNoteObjects($studentNotes);
$totalNotes = countAllNotes($studentNotes);
$openNotes = countOpenNotes($noteObjects);
$closedNotes = countClosedNotes($noteObjects);

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

    <h1>Notes Summary</h1>
    
        <p>Total notes: 
            <?php echo $totalNotes; ?>
        </p>
        <p>Open notes:
            <?php echo $openNotes; ?>
        </p>
        <p>Closed notes:
            <?php echo $closedNotes; ?>
        </p>
    

</body>

</html>