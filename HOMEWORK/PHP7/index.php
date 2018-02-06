<?php
    $yearOfBirth = 1981;

    echo "<h3> Jūsų gimimo metai yra ".$yearOfBirth.
    ". Jums dabar arba šiais metais bus ".getAge($yearOfBirth).".</h3>";

    function getAge ($yearOfBirth) {
        return date("Y") - $yearOfBirth;
    }
 ?>
