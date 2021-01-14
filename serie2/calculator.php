<?php
    class Calculator
    {
        public $nbr1,$nbr2;

        function add()
        {
            return $this->nbr1 + $this->nbr2;
        }
        function sub()
        {
            return $this->nbr1 - $this->nbr2;
        }
        function multiply()
        {
            return $this->nbr1 * $this->nbr2;
        }
    }    
?>