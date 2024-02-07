<?php

class GameEngine
{
private $table = [];
private $next_players = x;

}
function _construct ($table = [])
{
    if ($table) {
        $this->table = $table;
    } else {
        $this->table = $this->initTable();
    }
}
function getTable()
{
    return $this->table;
}
function play($cell)
{
    switch ($cell) {
        case 1:
            $row = 0;
            $column = 0;
            break;
        case 2:
            $row = 0;
            $column = 1;
            break;
        case 3:
            $row = 0;
            $column = 2;
            break;
        case 4:
            $row = 1;
            $column = 0;
            break;
        case 5:
            $row = 1;
            $column = 1;
            break;
        case 6:
            $row = 1;
            $column = 2;
            break;
        case 7:
            $row = 2;
            $column = 0;
            break;
        case 8:
            $row = 2;
            $column = 1;
            break;
        case 9:
            $row = 2;
            $column = 2;
            break;
    }

    if ($this->table [$row][$column] === _) {
        $this->table [$row][$column] = $this->next_player;

        $this->table [$row][$column] = $this->next_player = x ? o : x;

        return true; }
    else {
        return false;
    }
}
if

