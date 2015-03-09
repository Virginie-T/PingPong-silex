<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        /*
        input: 1
        output: [1]
        Spec: Output from 1 to the number that was input inside of an array
        */
        function test_makePingPong_singleNumber()
        {
            //arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 1;

            //act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //assert
            $this->assertEquals([1], $result);
        }

        /*
        input: 2
        output: [1,2]

        Spec: Count from 1 to the number that was input inside of an array
        */
        function test_makePingPong_two()
        {
            //arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            //act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //assert
            $this->assertEquals([1, 2], $result);
        }

        /*
        input: 3
        output: [1,2,”ping”]

        spec: Count from 1 to the number input, replacing numbers divisible by 3 with ping
        */
        function test_makePingPong_ping()
        {
            //arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            //act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //assert
            $this->assertEquals([1,2,'ping'], $result);
        }
    }


 ?>
