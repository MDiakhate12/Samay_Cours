<?php require("partials/header.php"); ?>
<?php require("partials/nav.php"); ?>

<div class="form offset-4 col-4">

    <form action="" method="POST">

        <div class="form-group">
            <input class="form-control" type="text" name="first_name" id="username" placeholder="Username">
        </div>

        <div class="form-group">
            <input class="form-control" type="email" name="email" id="email" placeholder="Em@il">
        </div>

        <div class="form-group">
            <input class="form-control" type="password" name="password" id="password" placeholder="password">
        </div>

        <div class="form-group">
            <input class="form-control" type="password" name="password_confirm" id="password_confirm" placeholder="Password Confirmation">
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-block" type="submit" name="register">Register</button>
        </div>

    </form>

</div>

<?php require("partials/footer.php"); ?>