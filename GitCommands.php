<!DOCTYPE html>
<link rel="stylesheet" href="GitCommandsStyles.css">
<html>

<head>
    <title>PHP Project</title>

    <head>

    <body class="Information">
        <?php
        echo '<h1>3 Important Commands</h1><br>';
        echo '<div class="descriptions">';
        $git = "git add . or 'specific file'<br>";
        print($git);
        $git = "git commit -m 'message'<br>";
        print($git);
        $git = "git push<br>";
        print($git);
        echo '</div>';

        echo '<h1>Basic Commands</h1><br>';
        echo '<div class="descriptions">';
        $git = "git init<br>";
        print($git);
        $git = "git add README.MD<br>";
        print($git);
        $git = "git commit -m 'comments'<br>";
        print($git);
        $git = "git branch -M main<br>";
        print($git);
        $git = "git remote add origin 'https link of github'<br>";
        print($git);
        $git = "git push -u origin main<br>";
        print($git);
        echo '</div>';

        echo '<h1>*if errors occured*</h1><br>';
        echo '<div class="descriptions">';
        $git = "git pull<br>";
        print($git);
        $git = "git fetch origin main:tmp<br>";
        print($git);
        $git = "git rebase tmp<br>";
        print($git);
        $git = "git push<br>";
        print($git);
        echo '</div>';

        echo "<h1>*if di nag push*</h1><br>";
        echo '<div class="descriptions">';
        $git = "git push -set--upstream origin main<br>";
        print($git);
        echo '</div>';

        echo "<h1>*to copy files to your computer*</h1><br>";
        echo '<div class="descriptions">';
        $git = "git clone 'https link of github'<br>";
        print($git);
        $git = "git pull<br>";
        print($git);
        echo '</div>';

        echo "<h1>*to remove files*</h1><br>";
        echo '<div class="descriptions">';
        $git = "git rm 'file name'<br>";
        print($git);
        $git = "git commit -m 'message'<br>";
        print($git);
        $git = "git push<br>";
        print($git);
        $git = "*your file should be removed :)*<br>";
        print($git);
        echo '</div>';
        ?>
    </body>

</html>