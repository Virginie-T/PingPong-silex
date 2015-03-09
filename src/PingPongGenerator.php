<?php
    class PingPongGenerator
    {
            function generatePingPongArray($input_number)
            {
                $ping_pong_array = array();
                for ($counter = 1; $counter <= $input_number; $counter++) {
                    if ($counter % 3 == 0) {
                        array_push($ping_pong_array, "ping");
                    }
                    else {
                        array_push($ping_pong_array, $counter);
                    }
                }

                return $ping_pong_array;
            }
    }

?>
