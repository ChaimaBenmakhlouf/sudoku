# Project Title
sudoku in php

# Project Description
it's a project that resolve sudoku


# How to Install and Run the Project

- To run the php file you have to install mamp(for mac) or wamp(for windows), then you have to write on the url the path of your project

- I added some tests with PhpUnit, to run it you have to write this following command : vendor/bin/phpunit tests
(here, "tests" is the folder that i created with the file test inside)

# How to Use the Project

- In the file sudoku.php, I commented the last "if" to do tests with PhpUnit. But if you want to display the grid you have to uncommente it.

- In the GridTest.php : you have to call the function solveSudoku and send a parameter.
```
function solveSudoku($grid);
```
In my tests, if there is a solution it will return the grid or if the sudoku is insolvent it will return false

- There is 4 tests that ensure the smooth running of the project

- The test already cover the 3 grids from the instruction ("https://gist.github.com/tanguybernard/0a7e72e2fbebbde9d454376ae71a8160")
