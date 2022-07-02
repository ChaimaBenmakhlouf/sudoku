<?php
require 'sudoku.php';
use PHPUnit\Framework\TestCase;

class GridTest extends TestCase {
    
    public function testGridOne() {
        
        $grid =  [
            [8,0,3,9,2,5,7,4,6],
            [9,5,6,8,4,7,3,1,2],
            [4,7,2,3,6,1,8,9,5],
            [6,2,4,7,1,9,5,3,8],
            [7,9,5,6,3,8,4,2,1],
            [3,8,1,4,5,2,9,6,7],
            [2,3,8,1,7,4,6,5,9],
            [5,4,9,2,8,6,1,7,3],
            [1,6,7,5,9,3,2,8,4]
        ];
        $result = solveSudoku($grid);
        $this->assertNotFalse($result);
        $this->assertEquals($result[0], [8,1,3,9,2,5,7,4,6]);
        $this->assertEquals($result[1], [9,5,6,8,4,7,3,1,2]);
        $this->assertEquals($result[2], [4,7,2,3,6,1,8,9,5]);
        $this->assertEquals($result[3], [6,2,4,7,1,9,5,3,8]);
        $this->assertEquals($result[4], [7,9,5,6,3,8,4,2,1]);
        $this->assertEquals($result[5], [3,8,1,4,5,2,9,6,7]);
        $this->assertEquals($result[6], [2,3,8,1,7,4,6,5,9]);
        $this->assertEquals($result[7], [5,4,9,2,8,6,1,7,3]);
        $this->assertEquals($result[8], [1,6,7,5,9,3,2,8,4]);
        
        
    }
    
    public function testGridTwo() {
        
        $grid =  [
            [8,0,3,9,2,5,7,4,6],
            [9,5,6,8,4,7,3,1,2],
            [4,7,2,3,6,1,8,9,5],
            [6,2,4,7,1,9,5,3,8],
            [7,9,5,6,3,8,4,2,1],
            [3,8,1,4,5,2,9,6,7],
            [2,3,8,1,7,4,6,5,9],
            [5,4,9,2,8,6,1,0,0],
            [1,6,7,5,9,3,2,0,0]
        ];
        
        
        $result = solveSudoku($grid);
        $this->assertNotFalse($result);
        $this->assertEquals($result[0], [8,1,3,9,2,5,7,4,6]);
        $this->assertEquals($result[1], [9,5,6,8,4,7,3,1,2]);
        $this->assertEquals($result[2], [4,7,2,3,6,1,8,9,5]);
        $this->assertEquals($result[3], [6,2,4,7,1,9,5,3,8]);
        $this->assertEquals($result[4], [7,9,5,6,3,8,4,2,1]);
        $this->assertEquals($result[5], [3,8,1,4,5,2,9,6,7]);
        $this->assertEquals($result[6], [2,3,8,1,7,4,6,5,9]);
        $this->assertEquals($result[7], [5,4,9,2,8,6,1,7,3]);
        $this->assertEquals($result[8], [1,6,7,5,9,3,2,8,4]);
        
        
    }
    
    public function testGridThree() {
        
        $grid =  [
            [7,4,6,8,5,3,1,9,2],
            [2,3,8,1,9,6,7,4,5],
            [5,9,1,4,2,7,6,3,8],
            [8,1,4,6,3,9,2,5,7],
            [3,6,7,2,8,5,4,1,9],
            [9,5,2,7,4,1,8,6,3],
            [6,2,9,3,7,4,5,8,1],
            [1,8,5,9,6,2,3,7,4],
            [4,7,3,5,1,8,9,2,6]
        ];
        
        
        $result = solveSudoku($grid);
        $this->assertNotFalse($result);
        $this->assertEquals($result[0], [7,4,6,8,5,3,1,9,2]);
        $this->assertEquals($result[1], [2,3,8,1,9,6,7,4,5]);
        $this->assertEquals($result[2], [5,9,1,4,2,7,6,3,8]);
        $this->assertEquals($result[3], [8,1,4,6,3,9,2,5,7]);
        $this->assertEquals($result[4], [3,6,7,2,8,5,4,1,9]);
        $this->assertEquals($result[5], [9,5,2,7,4,1,8,6,3]);
        $this->assertEquals($result[6], [6,2,9,3,7,4,5,8,1]);
        $this->assertEquals($result[7], [1,8,5,9,6,2,3,7,4]);
        $this->assertEquals($result[8], [4,7,3,5,1,8,9,2,6]);
        
        
    }
    
    
    
    
    public function testWrongGridShouldReturnFalse() {
        
        $wrongGrid = [
            [1,1,3,9,2,5,7,4,6],
            [9,5,6,8,4,7,3,1,2],
            [4,7,2,3,6,1,8,9,5],
            [6,2,4,7,1,9,5,3,8],
            [7,9,5,6,3,8,4,2,1],
            [3,8,1,4,5,2,9,6,7],
            [0,2,8,1,7,4,6,5,9],
            [5,4,9,2,8,6,1,7,3],
            [1,6,7,5,9,3,2,8,4]
        ];
        
        $this->assertFalse(solveSudoku($wrongGrid));
        
        
    }
    
    
}


