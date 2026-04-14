<?php

require_once "data.php";
require_once "StudentNote.php";

function buildStudentNoteObjects($rawNotes)
{
    $noteObjects = [];

    foreach ($rawNotes as $rawNote) {
        $rawNote = new StudentNote(
            $rawNote["student_name"],
            $rawNote["note_text"],
            $rawNote["status"]
        );

        $noteObjects[] = $rawNote;
    }

    return $noteObjects;
}

function filterNotesByStatus($noteObjects, $statusFilter)
{
    $filteredNotes = [];
    foreach ($noteObjects as $noteObject) {
        if (
            $noteObject->isOpen() && $statusFilter === "open" ||
            $noteObject->isClosed() && $statusFilter === "closed"
        ) {
            $filteredNotes[] = $noteObject;
        }
    }
    return $filteredNotes;
}
