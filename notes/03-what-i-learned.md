# What I Learned - Student Notes OOP Viewer

## Main Learning Outcome
This project helped me move from basic procedural PHP into beginner object-oriented PHP.

Instead of only working with raw arrays and helper functions, I learned how to represent one student note as an object and give that object its own behavior.

## What I Learned About OOP

### 1. A class is a blueprint
The `StudentNote` class defines what one note should contain and what one note should be able to do.

It stores:
- student name
- note text
- status

It can do things like:
- check if the note is open
- check if the note is closed
- match a student name
- format the status label

### 2. An object is one actual note
The raw data started as arrays, but each raw note was turned into a `StudentNote` object.

That helped me understand the difference between:
- a raw data structure
- an object created from that data

### 3. Methods belong to one object
I learned that methods like:
- `isOpen()`
- `isClosed()`
- `matchesStudent()`

belong to one note object.

That means the note can answer questions about itself.

## What I Learned About PHP Syntax

### Array access vs object access
This project made the difference much clearer.

### Arrays use:
- square brackets like `["student_name"]`

### Objects use:
- the arrow operator like `->studentName`
- method calls like `->isOpen()`

That was one of the biggest syntax shifts in the project.

### `require_once`
I used `require_once` to connect the app files together and avoid repeating file loading.

### `$_GET`
I learned how to read query parameters from the URL and use them to change what the page displays.

Examples:
- `?status=open`
- `?status=closed`
- `?student=Mia`

### `count()`
I used `count()` for the total notes summary and learned when built-in functions are enough versus when a loop is needed.

## What I Learned About App Structure

### One-note logic vs many-notes logic
This was an important lesson.

### One-note logic belongs in the class
Examples:
- is this note open?
- does this note match this student?
- how should this note’s status be displayed?

### Many-notes logic belongs in helper functions
Examples:
- build note objects from raw data
- filter notes by status
- filter notes by student
- count open notes
- count closed notes

This separation made the code easier to understand.

## What I Learned About Request / Response
This project helped me understand that a page can respond differently depending on the request.

Examples:
- one request asks for open notes
- another request asks for closed notes
- another request asks for Mia’s notes

PHP reads the request, runs the logic, and returns different output.

That made the request/response idea feel much more real.

## Problems I Ran Into
Some of the main issues I hit were:
- treating objects like arrays
- treating arrays like objects
- overwriting variables by mistake
- using the wrong variable names in helper functions
- forgetting that object methods must be called on the object
- using the wrong query parameter format in the URL

Fixing those mistakes helped the concepts stick better.

## Biggest Takeaways
- arrays and objects are not accessed the same way
- a class should describe one thing clearly
- helper functions are useful for collection-level logic
- query parameters are a simple way to create dynamic page behavior
- small projects are a good way to understand OOP without getting lost

## Final Reflection
This project felt like a strong bridge from:
- beginner procedural PHP
to
- beginner OOP with request-based page behavior

It stayed small enough to manage, but still gave me practice with:
- classes
- objects
- methods
- loops
- functions
- filtering
- query parameters
- summary logic

It also gave me a cleaner mental model for how PHP pages can turn a request into different browser output.