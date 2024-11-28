<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $math = '';
    public $result = 0;
    public function render()
    {
        return view('livewire.calculator');
    }

    public function addMath($number)
    {
        $this->math .= $number;
    }

    public function operation($operation)
    {
        if ($operation == '=') {
            $tmp = str_replace('x', '*', $this->math);

            $this->result = eval('return ' . $tmp . ';');
        } else {
            $this->math .= $operation;
        }
    }

    public function clearMath()
    {
        $this->math = '';
        $this->result = 0;
    }
}
