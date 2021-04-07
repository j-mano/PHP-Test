<!-- index file of the webbsite -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>php test webbsite</title>
        <link rel="stylesheet" href="css/">
    </head>
    <body>
    
    <!-- header / meny -->
    <?php
        $html = file_get_html("header.php");
    ?>

    <div class="wrapper">
        <h1>This webbite is mean to be an login projekt to test php</h1>
    </div>

    <!-- Foter -->
    <?php
        $html = file_get_html("foter.php");
    ?>

    </body>
</html>

