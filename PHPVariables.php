<!DOCTYPE html>
<html>

<head>
    <title>PHP Project</title>

    <head>

    <body>
        <?php
        //integers
        $int_var = 12345;
        $another_int = -12345 + 12345;
        //doubles
        $many = 2.2888800;
        $many_2 = 2.2111200;
        $few = $many + $many_2;
        print($many + $many_2 = $few);
        //boolean
        if (TRUE)
            print("This will always print<br>");
        else
            print("This will never print<br>");
        //strings
        $string_1 = "This is a string in double quotes";
        $string_2 = "This is a somewhat longer, singly quoted string";
        $string_39 = "This string has thirty-nine characters";
        $string_0 = ""; // a string with zero characters
        $variable = "Emerson Bagawe";
        $literally = 'My $variable will not print!\\n';
        print($literally);
        $literally = "My $variable will print!\\n";
        print($literally);
        ?>
    </body>

</html>