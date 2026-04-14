<?php

require_once "data.php";
require_once "StudentNote.php";

function buildStudentNoteObjects($rawNotes)
{
    $noteObjects = [];

    foreach ($rawNotes as $rawNote) {
        $note = new StudentNote(
            $note["student_name"],
            $note["note_text"],
            $note["status"]
        );

        $noteObjects[] = $rawNote;
    }

    return $noteObjects;
}
