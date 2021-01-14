<?php
    class CalcAdvenced extends Calculator
    {
        function racine_carre()
        {
            return sqrt($this->nbr1);
        }
        function exponentiel()
        {
            return exp($this->nbr1);
        }
    }
?>