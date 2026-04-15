# Project Overview - Student Notes OOP Viewer

## Project Name
Student Notes OOP Viewer

## Project Summary
This project is a small PHP practice app built to strengthen object-oriented programming basics while still reinforcing core PHP fundamentals.

The app displays student notes, filters them by status or student name, and shows a simple summary view. It uses raw note data, converts that data into objects, and responds differently depending on the request made through the browser URL.

## Project Goal
The goal of this project is to move from basic procedural PHP into beginner-level object-oriented PHP.

This project practices:
- classes
- objects
- methods
- request/response using query parameters

It also reinforces:
- variables
- arrays
- loops
- functions
- conditionals
- page rendering in the browser

## Why I Built This
I already built a simpler student notes project using basic PHP concepts such as arrays, loops, functions, and conditional logic.

This project is the next step because it keeps the same domain but introduces object-oriented structure. That made it easier to focus on new concepts without also having to learn a completely new project idea.

It works as a small bridge project between:
- beginner procedural PHP
- beginner OOP in PHP
- basic request/response thinking

## Built Features
This project includes:

- a page that shows all student notes
- a page that filters notes by status
- a page that filters notes by student
- a page that shows a simple note summary
- a class that represents a student note
- helper functions for building and filtering note objects

## Pages

### 1. All Notes Page
Shows all notes in the browser.

### 2. Notes by Status Page
Filters notes by status using a query parameter in the URL.

Examples:
- `?status=open`
- `?status=closed`

### 3. Student View Page
Filters notes by student name using a query parameter in the URL.

Examples:
- `?student=Mia`
- `?student=Andy`

### 4. Summary Page
Shows:
- total notes
- open notes
- closed notes

## Main Concepts This Project Uses

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

## Project Structure
At a high level, the project contains:

- `app/` for the PHP app files
- `notes/` for project notes and reflections
- `screenshots/` for proof-of-work images
- `README.md` for repo documentation

The app folder includes:
- raw data
- the `StudentNote` class
- helper functions
- page files for each view

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

## Success Criteria
This project is successful because I can now:

- define a PHP class for student notes
- create multiple note objects from raw data
- call methods on those objects
- filter notes based on URL query parameters
- render different outputs in the browser
- explain the difference between raw arrays, objects, methods, and helper functions

## Outcome
By the end of this project, I had a clearer understanding of how PHP moves from:
- plain data
- to structured objects
- to browser output based on a request

This project also gave me a clean GitHub artifact that shows progression from PHP basics into beginner OOP.