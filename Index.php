

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
        $html = file_get_html('Header.htm');
    ?>

    <div class="wrapper">
        <h1>This webbite is mean to be an login projekt to test php</h1>
    </div>

    <!-- Foter -->
    <?php
        $html = readfile("Foter.html");
    ?>

    </body>
</html>

