<?php

namespace koans;

use PHPUnit\Framework\TestCase;

class VariablesTest extends TestCase{
    /**
     * @test
     **/
    public function declaresAnInt(){
        $variable = new Variable();
        $integerValue = $variable->declareAnInt();
        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     **/
    public function declaresABoolean(){
        $variable = new Variable();
        $booleanValue = $variable->declareABoolean();
        $this->assertIsBool($booleanValue);
    }

    /**
     * @test
     **/
    public function declaresAFloat(){
        $variable = new Variable();
        $floatValue = $variable->declareAFloat();
        $this->assertIsFloat($floatValue);
    }

    /**
     * @test
     **/
    public function declaresAnArray(){
        $variable = new Variable();
        $arrayValue = $variable->declareAnArray();
        $this->assertIsArray($arrayValue);
    }

    /**
     * @test
     **/
    public function declaresAnIntWithNullValue(){
        $variable = new Variable();
        $intNullValue = $variable->declareAnIntWithNullValue();
        $this->assertIsNotInt($intNullValue);
    }

    /**
     * @test
     **/
    public function assignsAVariableValueToAnotherVariable(){
        $variable = new Variable();
        $anotherValue = $variable->assignAVariableValueToAnotherVariable('hola');
        $this->assertEquals('hola', $anotherValue);
    }

    /**
     * @test
     **/
    public function castsStringIntToBoolean(){
        $variable = new Variable();
        $stringValue = $variable->castStringIntToBoolean('True');
        $this->assertIsBool($stringValue);
    }



}
