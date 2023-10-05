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
    //PHP Local Variables
    $x = 4;
    //PHP Function Parameters
    // multiply a value by 10 and return it to the caller
    function multiply($value)
    {
        $value = $value * 10;
        return $value;
    }
    $retval = multiply(10);
    print "Return value is $retval\n";

    ?>

</body>

</html>