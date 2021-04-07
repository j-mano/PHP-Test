    <!-- signup page -->
    <!-- header / meny -->
    <?php
        $html = file_get_html('Header.htm');
    ?>
    <!-- Signup form html -->
    <section class="signup-form">
        <h2>Login</h2>
        <form action="SignUp.inc.php" metod="post">
        <input type="text"      name="name"         placeholder="Username/Email">
        <input type="password"  name="pwd"          placeholder="Password">

        <button type="submit"   name="submit">Log In</button>
        </form>
    </section>
    
    <!-- Foter -->
    <?php
        $html = readfile("Foter.php");
    ?>