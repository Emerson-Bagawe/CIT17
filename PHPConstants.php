<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>PHP Basics</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<style>
</style>

<body>
    <?php
    //PHP Constants
    define("MINSIZE", 50);
    echo MINSIZE;
    echo constant("MINSIZE"); // same thing as the previous line
    // Valid constant names
    define("ONE", "first thing");
    define("TWO2", "second thing");
    define("THREE_3", "third thing");
    // Invalid constant names
    //define("2TWO", "second thing");
    //define("__THREE__", "third value");
    ?>

</body>

</html>