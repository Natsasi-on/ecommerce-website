<?php include("./common/header-admin.php"); ?>
<link rel="stylesheet" href="./common/styles/login.css">
<link rel="stylesheet" href="./common/styles/admin-login.css">
<section class="flex-row-box img-box">
    <div class="img-admin container">
        <a href="https://www.vecteezy.com/free-vector/computer"><img src="./common/images/admin-img2.jpg" alt="Computer Vectors by Vecteezy"></a>
    </div>
    <div class="sign-in container">
        <h1>Sign In</h1>
        <form class="flex-column">
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
            <label for="password">Password :</label>
            <input type="text" name="password" id="password">
            <a href="">Forgot Password?</a>
            <div class="btn-box">
                <button class="btn">Sign In</button>
            </div>
        </form>
    </div>
</section>
<?php include("./common/Footer-admin.php"); ?>
</body>

</html>