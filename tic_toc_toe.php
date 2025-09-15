<?php

$arr = [[" ", " ", " "],
    [" ", " ", " "],
    [" ", " ", " "]];

printBoard($arr);

while (true) {
//играч 1 дай координати 
    while (true) {
        //printBoard($arr);
        echo "Player 1, enter X coordinates:: \n";
        $x = trim(fgets(STDIN));
        echo "Player 1, enter Y coordinates:: \n";
        $y = trim(fgets(STDIN));
        //check x,y
        if ($x < 0 || $x > 2 || $y < 0 || $y > 2 || $arr[$x][$y] != " ") {
            echo "Invalid coordinates.\n";
            continue;
        } else {
            //запиши координати на играч 1
            $arr[$x][$y] = "X";
//    shell_exec("clear");
            printBoard($arr);
            break;
        }
    }



//играч 2 дай координати
    while (true) {
        //printBoard($arr);
        echo "Player 2, enter W coordinates:: \n";
        $w = trim(fgets(STDIN));
        echo "Player 2, enter Z coordinates:: \n";
        $z = trim(fgets(STDIN));
        //check x,y
        if ($w < 0 || $w > 2 || $z < 0 || $z > 2 || $arr[$w][$z] != " ") {
            echo "Invalid coordinates.\n";
            continue;
        } else {
            //запиши координати на играч 2
            $arr[$w][$z] = "O";
//        shell_exec("clear");
            printBoard($arr);
            break;
        }
    }
}

//check if wins
//if (checkWin($arr, $arr[$x][$y])) {
//    printBoard($arr);
//    echo "Играч 1 печели!!!\n";
//} elseif (checkWin($arr, $arr[$w][$z])) {
//    printBoard($arr);
//    echo "Играч 2 печели!!!\n";
//} else {
//    echo "Никой не печели. :(\n";
//}
//==========================================================================================

function printBoard(&$arr) {

    echo shell_exec("clear");
    foreach ($arr as $cols) {
        foreach ($cols as $rows) {
            echo $rows . "|";
        }
        echo PHP_EOL;
    }
    echo PHP_EOL;
    checkWin($arr);
}

//check where the X or O is 3
function checkWin(&$arr) {
    check($arr, "X");
    check($arr, "O");
    return checkIsFull($arr);
}

function check(&$arr, $player) {

    $isWin = false;
    // Check X rows 
    for ($i = 0; $i < 3; $i++) {
        if ($arr[$i][0] == $player && $arr[$i][1] == $player && $arr[$i][2] == $player) {
            $isWin = true;
        }
    }
    // Check X cols
    for ($i = 0; $i < 3; $i++) {
        if ($arr[0][$i] == $player && $arr[1][$i] == $player && $arr[2][$i] == $player) {
            $isWin = true;
        }
    }
    // Check diagonals
    if (($arr[0][0] == $player && $arr[1][1] == $player && $arr[2][2] == $player) ||
            ($arr[0][2] == $player && $arr[1][1] == $player && $arr[2][0] == $player)) {
        $isWin = true;
    }

    if ($isWin) {
        echo "Yey $player wins!";
        newGame($arr);
    }

    return $isWin;
}

function checkIsFull(&$arr) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($arr[$i][$j] == " ") {
                return false;
            }
        }
    }

    echo "No empty places left.\n";
    newGame($arr);
    return true;
}

function newGame(&$arr) {
    $arr = [[" ", " ", " "],
        [" ", " ", " "],
        [" ", " ", " "]];
}
