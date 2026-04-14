<?php

class StudentNote
{
    public $studentName;
    public $noteText;
    public $status;

    public function __construct($studentName, $noteText, $status)
    {
        $this->studentName = $studentName;
        $this->noteText = $noteText;
        $this->status = $status;
    }

    public function isOpen()
    {
        return $this->status === "open";
    }

    public function isClosed()
    {
        return $this->status === "closed";
    }

    public function getSummary()
    {
        return $this->studentName . " - " . $this->noteText;
    }

    public function matchesStudent($name)
    {
        return $this->studentName === $name;
    }

    public function getStatusLabel()
    {
        return ucfirst($this->status);
    }
}