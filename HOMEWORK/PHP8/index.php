<?php
    coffeMachine(2);

    function coffeMachine ($code) {
        echo "<h3> Štai jūsų ";
            switch ($code) {
                case 1:
                    echo "kava";
                    break;
                case 2:
                    echo "latte";
                    break;
                case 3:
                    echo "juoda kava";
                    break;
                case 4:
                    echo "cappuchino";
                    break;
                default:
                    echo "karstas vanduo";
                    break;
            }
        echo ".</h3>";
    }
?>
