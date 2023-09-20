<?php 
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2) {
        $password = '';

        //Upper
        for ($i=0; $i < $upper; $i++) { 
            $password .= chr(rand(65, 90));
        };

        //Lower
        for ($i=0; $i < $lower; $i++) { 
            $password .= chr(rand(97, 122));
        };

        //Numeric
        for ($i=0; $i < $numeric; $i++) { 
            $password .= chr(rand(48, 57));
        };

        //Other
        for ($i=0; $i < $other; $i++) { 
            $password .= chr(rand(33, 47));      
        };

        $passwdArray = str_split($password);
        shuffle($passwdArray);
        $password = implode('', $passwdArray);

        return $password;
    };

    $randomPasswd = rand_Pass();
    echo "La contraseña generada automáticamente es: $randomPasswd";
?>