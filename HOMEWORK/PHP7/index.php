<?php
    $yearOfBirth = 1981;

    getAge($yearOfBirth);

    function getAge($yearOfBirth) {
        echo
        "<h3> Jūsų gimimo metai yra ".$yearOfBirth.
        ". Jums dabar arba šiais metais bus ".(date("Y") - $yearOfBirth).".</h3>";
    }
 ?>
