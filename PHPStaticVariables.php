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
    //PHP Static Variables
    function keep_track()
    {
        static $count = 0;
        $count++;
        print $count;
        print "";
    }
    keep_track();
    keep_track();
    keep_track();

    ?>

</body>

</html>