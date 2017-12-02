<?php

namespace src\AdventOfCode;

class Day2 extends AbstractAdventOfCode
{
    protected $class = 2;

    public function firstPart(): string
    {
        $spreadsheet = $this->input;
        $checksum = 0;
        foreach (explode(PHP_EOL, $spreadsheet) as $line) {
            $smallest = PHP_INT_MAX;
            $largest = 0;
            foreach (explode("\t", $line) as $number) {
                $smallest = min($smallest, $number);
                $largest = max($largest, $number);
            }
            $checksum += $largest - $smallest;
        }

        return $checksum;
    }

    public function secondPart(): string
    {
        // TODO: Implement secondPart() method.
    }
}