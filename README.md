# PHP Object Reference Assignment Bug

This repository demonstrates a common and often overlooked bug in PHP: the unexpected behavior of object reference assignment.  When assigning objects in PHP, a new reference to the *same* object is created, not a copy. Modifications made through one reference affect all other references.

## The Bug

The `bug.php` file shows the problematic code.  Modifying the `value` property through one reference unexpectedly changes the `value` in the original object.

## The Solution

The `bugSolution.php` demonstrates how to create a true copy of an object, ensuring that modifications made to one copy do not affect others.  This uses the `clone` keyword.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` and observe the output.
3. Run `bugSolution.php` and compare the output.  This shows the fix to avoid the reference issue.