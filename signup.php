    <!-- signup page -->
    <!-- header / meny -->
    <?php
        $html = file_get_html('header.htm');
    ?>
    <!-- Signup form html -->
    <section class="signup-form">
        <h2>sign up</h2>
        <form action="SignUp.inc.php" metod="post">
        <input type="text"      name="name"         placeholder="Full name....">
        <input type="text"      name="email"        placeholder="Email.......">
        <input type="text"      name="uid"          placeholder="UserName......">
        <input type="password"  name="pwd"          placeholder="Password.......">
        <input type="password"  name="pwdrepeat"    placeholder="Reapeat Password....">

        <button type="submit"   name="submit">Sign up</button>
        </form>
    </section>

    
    
    <!-- Foter -->
    <?php
        $html = readfile("foter.php");
    ?>