<?php include("./common/header.php"); ?>
<link rel="stylesheet" href="./common/styles/login.css">
<section>
    <div class="sign-in container">
        <h1>Sign In</h1>
        <form class="flex-column ">
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
            <label for="password">Password :</label>
            <input type="text" name="password" id="password">
            <a href="">Forget Password?</a>
            <div class="btn-box">
                <button class="btn">Sign In</button>
            </div>
        </form>

    </div>
    <div class="register container">
        <h1>Register</h1>
        <form class="flex-column">
            <label for="name">Name :</label>
            <input type="text" name="name" id="name">
            <label for="lastname">Lastname :</label>
            <input type="text" name="lastname" id="lastname">
            <label for="phone">Phone Number:</label>
            <input type="text" name="phone" id="phone" placeholder="xxx-xxx-xxxx">
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
            <label for="password">Password :</label>
            <input type="text" name="password" id="password">
            <label for="confpassword">Confirm Password :</label>
            <input type="text" name="confpassword" id="confpassword">
            <div class="btn-box">
                <button class="btn">Register</button>
            </div>
        </form>
    </div>
</section>

<?php include("./common/Footer.php"); ?>