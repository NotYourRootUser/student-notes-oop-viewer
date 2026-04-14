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

function filterNotesByStudent($noteObjects, $studentName)
{
    $filteredStudents = [];
    foreach ($noteObjects as $noteObject) {
        if (
            $noteObject->matchesStudent($studentName)
        ) {
            $filteredStudents[] = $noteObject;
        }
    }
    return $filteredStudents;
}

function countAllNotes($noteObjects) {
     $notesTotal = count($noteObjects);
     return $notesTotal;
}

function countOpenNotes($noteObjects) {
    $openNotesTotal = 0;
    foreach ($noteObjects as $noteObject) {
        if (
            $noteObject->isOpen()
            )
            $openNotesTotal++;
    }
    return $openNotesTotal;
}

function countClosedNotes($noteObjects) {
    $closedNotesTotal = 0;
    foreach ($noteObjects as $noteObject) {
        if (
            $noteObject->isClosed()
            )
            $closedNotesTotal++;
    }
    return $closedNotesTotal;
}