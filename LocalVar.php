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
function assignx()
{
    $x = 0;
    print "\$x inside function is $x.
";
}
assignx();
print "\$x outside of function is $x.
";
?>

</body>
</html>