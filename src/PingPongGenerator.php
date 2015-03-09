<?php
    class PingPongGenerator
    {
            function generatePingPongArray($input_number)
            {
                $count = 1;
                $ping_pong_array = array();
                while ($count <= $input_number) {
                    array_push($ping_pong_array, $count);
                    $count++;
                }
                return $ping_pong_array;
            }
    }

?>
