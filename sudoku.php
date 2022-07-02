<?php


function solveSudoku($grid) {
    if (sudoku($grid, 0, 0)) {
        return $grid;
    }
    return false;
    
}


function sudoku(&$grid, $row, $col)
{
    $gridSize = 9;
    
    if ($row == $gridSize - 1 && $col == $gridSize) {
        return true;
    }
    
    
    
    if ($col == $gridSize)
    {
        $row++;
        $col = 0;
    }
    
    
    if ($grid[$row][$col] != 0)
    return sudoku($grid, $row, $col + 1);
    
    for($num = 1; $num < 10; $num++)
    {
        
        
        if (isNumberAssignable($grid, $row, $col, $num))
        {
            
            
            $grid[$row][$col] = $num;
            
            
            if (sudoku($grid, $row, $col + 1))
            return true;
        }
        
        
        $grid[$row][$col] = 0;
    }
    return false;
}


function display($grid)
{
    
    
    foreach ($grid as $line) {
        foreach ($line as $value) {
            print(strval($value) . " ");
        }
        print("<br>");
    }
}


function isNumberAssignable($grid, $row, $col, $num)
{
    
    
    for($x = 0; $x <= 8; $x++)
    if ($grid[$row][$x] == $num)
    return false;
    
    for($x = 0; $x <= 8; $x++)
    if ($grid[$x][$col] == $num)
    return false;
    
    
    $startRow = $row - $row % 3;
    $startCol = $col - $col % 3;
    
    for($i = 0; $i < 3; $i++)
    for($j = 0; $j < 3; $j++)
    if ($grid[$i + $startRow][$j + $startCol] == $num)
    return false;
    
    return true;
}


$grid = [[0, 6, 0, 0, 0, 0, 0, 3, 0],
[0, 0, 0, 5, 0, 0, 0, 0, 4],
[4, 1, 0, 0, 0, 9, 0, 2, 0],
[0, 0, 4, 0, 0, 0, 0, 0, 0],
[0, 3, 6, 0, 0, 0, 4, 8, 9],
[0, 0, 2, 4, 8, 6, 0, 0, 0],
[0, 2, 7, 0, 0, 0, 0, 9, 0],
[6, 0, 1, 9, 0, 0, 3, 0, 7],
[9, 4, 0, 0, 0, 5, 0, 1, 0],];




// if (sudoku($grid, 0, 0)) {
//     display($grid);
// }

// else
// print("no solution  exists ");



?>
