<?php


class Sort
{
    public $list;

    public function __construct($list)
    {
        $this->list = $list;
    }

    public function selectionSort()
    {
        for ($i=0; $i < count($this->list) - 1; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < count($this->list); $j++) {
                if ($this->list[$min] > $this->list[$j])
                    $min = $j;
                }
            $this->swap($i, $min);
        }
    }

    public function bubbleSort()
    {
        for ($i=0; $i < count($this->list) - 1; $i++)
            for ($j = $i + 1; $j < count($this->list); $j++) {
                if ($this->list[$i] > $this->list[$j])
                    $this->swap($i, $j);
            }
    }

    public function insertionSort()
    {
        for ($i=1; $i < count($this->list); $i++) {
            $temp = $this->list[$i];
            $j = $i-1;
            while ($j >= 0  && $temp < $this->list[$j] ) {
                $this->list[$j+1] = $this->list[$j];
                $j--;
            }

            $this->list[$j+1] = $temp;
        }
        
    }

    public function swap($left, $right)
    {
        $saveDataLeft = $this->list[$left];
        $this->list[$left] = $this->list[$right];
        $this->list[$right] = $saveDataLeft;
    }

    public function readList()
    {
        $listString = '';

        for ($i=0; $i < count($this->list) - 1; $i++) {
            $listString .= $this->list[$i].' ';
            if ($i % 10 == 0 && $i >= 10)
                $listString .= "<br>";
        }

        return $listString;
    }

}