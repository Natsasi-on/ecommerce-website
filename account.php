<?php include("./common/header.php"); ?>
<link rel="stylesheet" href="./common/styles/account.css">
<section>
    <h1>Account Setting</h1>
    <div class="container">
        <form class="flex-row-box account-setting">
            <div class="flex-column">
                <img src="images/person.jpg" alt="">
                <input type="image">
            </div>
            <div class="flex-column infor">
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
                <div class="btn-box">
                    <button class="btn">Update</button>
                </div>
            </div>

        </form>
    </div>
</section>
<?php include("./common/Footer.php"); ?>