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
    //PHP Global Variables
    $somevar = 15;
    function addit()
    {
        global $somevar;
        $somevar++;
        print "Somevar is $somevar";
    }
    addit();

    ?>

</body>

</html>