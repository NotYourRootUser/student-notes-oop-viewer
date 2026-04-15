# Student Notes OOP Viewer - Build Log

## Build Goal
Build a small PHP OOP app that turns raw note data into objects, filters notes based on the request, and renders different outputs in the browser.

## Build Order

### 1. Raw Data Added
Added student note data in `data.php` using associative arrays with:
- `student_name`
- `note_text`
- `status`

### 2. StudentNote Class Built
Created the `StudentNote` class with:
- properties
- constructor
- `isOpen()`
- `isClosed()`
- `getSummary()`
- `matchesStudent()`
- `getStatusLabel()`

### 3. Object Builder Helper Added
Built a helper function to convert raw note arrays into `StudentNote` objects.

### 4. Filter and Count Helpers Added
Built helper functions to:
- filter notes by status
- filter notes by student
- count all notes
- count open notes
- count closed notes

### 5. All Notes Page Built
Built `index.php` to:
- display all student note objects
- show student name, note text, and status
- link to the other app pages

### 6. Status Filter Page Built
Built `notes-by-status.php` to:
- read `status` from the URL using `$_GET`
- filter notes by status
- support both open and closed note views

### 7. Student Filter Page Built
Built `student-view.php` to:
- read `student` from the URL using `$_GET`
- filter notes by student name
- show only matching notes

### 8. Summary Page Built
Built `summary.php` to show:
- total notes
- open notes
- closed notes

## Problems I Hit
- mixed up array access and object access
- reused variable names in ways that made the code harder to follow
- used the wrong variable names inside helper functions
- had to fix query parameter handling with `$_GET`
- had to correct summary count logic
- had to fix broken or incomplete page links while testing

## Fixes I Made
- corrected array structure in `data.php`
- fixed class naming style
- corrected object vs array access mistakes
- improved helper function variable naming
- fixed helper functions to return the correct arrays
- fixed query parameter handling
- fixed summary count mismatch
- improved page links and navigation flow

## What I Tested
- all notes displayed correctly
- open notes page only showed open notes
- closed notes page only showed closed notes
- student view page only showed matching student notes
- summary page correctly counted:
  - total notes
  - open notes
  - closed notes
- navigation links worked between pages

## Final Result
The project now works end to end.

It successfully uses:
- raw arrays
- object creation
- class methods
- helper functions
- query-parameter filtering
- summary counts
- browser output based on the request