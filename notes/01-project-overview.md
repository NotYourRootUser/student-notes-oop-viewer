# Project Overview - Student Notes OOP Viewer

## Project Name
Student Notes OOP Viewer

## Project Summary
This project is a small PHP practice app built to strengthen object-oriented programming basics while still reinforcing core PHP fundamentals.

The app will display student notes, allow filtering by status or student name, and show a simple summary view. It will use raw note data, convert that data into objects, and respond differently depending on the request made through the browser URL.

## Project Goal
The goal of this project is to move from basic procedural PHP into beginner-level object-oriented PHP.

This project is being built to practice:
- classes
- objects
- methods
- request/response using query parameters

It will also reinforce:
- variables
- arrays
- loops
- functions
- conditionals
- page rendering in the browser

## Why I Am Building This
I already built a simpler student notes project using basic PHP concepts such as arrays, loops, functions, and conditional logic.

This project is the next step because it keeps the same domain but introduces object-oriented structure. That makes it easier to focus on new concepts without also having to learn a completely new project idea.

It is intended to be a small bridge project between:
- beginner procedural PHP
- beginner OOP in PHP
- basic request/response thinking

## Planned Features
This project is planned to include:

- a page that shows all student notes
- a page that filters notes by status
- a page that filters notes by student
- a page that shows a simple note summary
- a class that represents a student note
- helper functions for building and filtering note objects

## Planned Pages
### 1. All Notes Page
Shows all notes in the browser.

### 2. Notes by Status Page
Filters notes by status using a query parameter in the URL.

Example idea:
`?status=open`

### 3. Student View Page
Filters notes by student name using a query parameter in the URL.

Example idea:
`?student=Mia`

### 4. Summary Page
Shows a simple summary such as:
- total notes
- open notes
- closed notes

## Main Concepts This Project Will Practice

### PHP Fundamentals
- variables
- arrays
- loops
- functions
- conditionals

### PHP OOP Basics
- classes
- objects
- properties
- methods

### Request / Response Basics
- reading query parameters from the URL
- changing page output based on the request
- returning filtered content in the browser

## Planned Project Structure
At a high level, the project will contain:

- `app/` for the PHP app files
- `notes/` for project notes and reflections
- `screenshots/` for proof-of-work images
- `README.md` for repo documentation

The app folder is planned to include:
- raw data
- the `StudentNote` class
- helper functions
- page files for each view

## Planned Scope
This project is intentionally small.

It is designed to stay focused on OOP and request/response basics.

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

## Success Criteria
This project will be successful if I can:

- define a PHP class for student notes
- create multiple note objects from raw data
- call methods on those objects
- filter notes based on URL query parameters
- render different outputs in the browser
- explain the difference between raw arrays, objects, methods, and helper functions

## Expected Outcome
By the end of this project, I should have a clearer understanding of how PHP moves from:
- plain data
- to structured objects
- to browser output based on a request

This project should also give me a clean GitHub artifact that shows progression from PHP basics into beginner OOP.