# Student Notes OOP Viewer - Setup Log

## Goal
Set up and track a small PHP OOP practice project locally before and during the early build stage.

## Project Folder
`student-notes-oop-viewer`

## Files Created

### Main folders
- `app/`
- `notes/`
- `screenshots/`

### Top-level files
- `README.md`
- `.gitignore`

### App files
- `data.php`
- `StudentNote.php`
- `functions.php`
- `index.php`
- `notes-by-status.php`
- `student-view.php`
- `summary.php`

### Notes files
- `01-project-overview.md`
- `02-setup-log.md`
- `03-what-i-learned.md`
- `04-build-log.md`

## Local Setup Steps
1. Created the project folder and named it `student-notes-oop-viewer`.
2. Initialized the project as a Git repository.
3. Created the main folder structure for the app, notes, and screenshots.
4. Created the starting PHP files for the app pages, class file, data file, and helper file.
5. Added the project overview note to define the scope, learning targets, planned pages, and feature boundaries.
6. Added this setup log to track the environment, file structure, and local run method.

## How I Ran the Project
The project was tested locally in the browser using PHP's built-in server.

Example command:

~~~bash
php -S localhost:8000
~~~

Example paths:
- `http://localhost:8000/index.php`
- `http://localhost:8000/notes-by-status.php?status=open`
- `http://localhost:8000/notes-by-status.php?status=closed`
- `http://localhost:8000/student-view.php?student=Mia`
- `http://localhost:8000/student-view.php?student=Andy`
- `http://localhost:8000/summary.php`

## What I Checked During Setup
- the project folder exists
- Git has been initialized
- the folder structure is in place
- the main project files exist
- the notes files were created
- the project can be run locally through localhost

## Small Setup Fixes
- corrected folder and file naming for consistency
- made sure the planned page names matched the project overview
- confirmed the local run paths for browser testing

## Result
The project structure and local setup were completed successfully.

The app was built and tested page by page in the browser.