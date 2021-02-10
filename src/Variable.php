<?php

namespace koans;

class Variable{

    public function declareAnInt(){
        $intVariable = 1;
        return $intVariable;
    }

    public function declareABoolean(){
        $boolVariable = True;
        return $boolVariable;
    }

    public function declareAFloat(){
        $floatVariable = 3.2;
        return $floatVariable;
    }

    public function declareAnArray(){
        $arrayVariable = array('Maider', 'Ivan'); //$arrayVariable = ['Maider', 'Ivan'];
        return $arrayVariable;
    }

    public function declareAnIntWithNullValue(){
        $intVariable = null;
        return $intVariable;
    }

    public function assignAVariableValueToAnotherVariable($valor){
        $x = 1;
        $x = $valor;
        return $x;
    }

    public function castStringIntToBoolean($valor){
        $x = (bool) $valor;
        return $x;
    }


}