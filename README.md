# Student Notes OOP Viewer

A small PHP practice project built to strengthen beginner object-oriented programming concepts while still reinforcing core PHP fundamentals.

## Project Goal
Build a small PHP app that displays student notes, filters them by status or student name, and uses objects and methods to control how the data is handled and displayed.

## Project Overview
This project started as a progression from a simpler procedural PHP student notes project.

Instead of only working with raw arrays and helper functions, this version introduces a `StudentNote` class, object creation, object methods, query-parameter filtering, and a summary view.

The app uses raw note data, converts that data into objects, and returns different browser output depending on the request.

## Features
- view all student notes
- filter notes by status
- filter notes by student
- view a summary of total, open, and closed notes
- convert raw note arrays into `StudentNote` objects
- use object methods to check status and match students
- use `$_GET` query parameters to control page output

## Pages

### All Notes
Displays all student notes.

### Notes by Status
Filters notes by status using query parameters.

Examples:
- `notes-by-status.php?status=open`
- `notes-by-status.php?status=closed`

### Student View
Filters notes by student name using query parameters.

Examples:
- `student-view.php?student=Mia`
- `student-view.php?student=Andy`

### Summary
Displays:
- total notes
- open notes
- closed notes

## Learning Focus
This project was built to practice:

- classes
- objects
- properties
- methods
- constructors
- request/response using query parameters
- variables
- arrays
- loops
- functions
- conditionals

## Project Structure
~~~text
student-notes-oop-viewer/
├── app/
│   ├── data.php
│   ├── StudentNote.php
│   ├── functions.php
│   ├── index.php
│   ├── notes-by-status.php
│   ├── student-view.php
│   └── summary.php
├── notes/
│   ├── 01-project-overview.md
│   ├── 02-setup-log.md
│   ├── 03-what-i-learned.md
│   └── 04-build-log.md
├── screenshots/
├── .gitignore
└── README.md
~~~

## Main Concepts Used

### PHP Fundamentals
- variables
- arrays
- loops
- functions
- conditionals

### PHP OOP Basics
- class definition
- object creation
- properties
- methods
- constructor-based setup

### Request / Response Basics
- reading query parameters from the URL with `$_GET`
- changing page output based on the request
- returning filtered content in the browser

## How It Works
Raw note data is stored in `data.php` as associative arrays.

A helper function in `functions.php` converts that raw data into `StudentNote` objects.

Each `StudentNote` object can:
- check whether it is open
- check whether it is closed
- match a student name
- return a formatted status label
- return a summary string

The page files then use those objects and helper functions to render different views in the browser.

## Example Request Flow

### Status Filter
A request like `notes-by-status.php?status=open` tells PHP to:
- read the `status` value from `$_GET`
- filter the note objects by open status
- render only the matching notes

### Student Filter
A request like `student-view.php?student=Mia` tells PHP to:
- read the `student` value from `$_GET`
- filter the note objects by student name
- render only the matching notes

## What I Learned
This project helped me understand the difference between:

- raw arrays and objects
- helper functions and object methods
- array access and object access
- static output and request-based output

It also helped me practice using:
- `require_once`
- `foreach`
- `count()`
- `$_GET`
- object methods like `isOpen()`, `isClosed()`, and `matchesStudent()`

## Scope
This project was intentionally kept small.

Included in scope:
- raw data in arrays
- object creation from that data
- filtering logic
- browser output
- simple summary counts

Not included in scope:
- database integration
- authentication
- edit/delete features
- complex styling
- frameworks
- advanced validation
- full CRUD behavior

## Final Result
This project works as a small bridge from beginner procedural PHP into beginner OOP in PHP.

It successfully uses:
- raw arrays
- object creation
- class methods
- helper functions
- query-parameter filtering
- summary counts
- browser output based on the request

## Project Status
Completed first version.