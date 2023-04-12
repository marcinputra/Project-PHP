<?php
include('site/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Logowanie</h1>
        </div>
    </div>
    <div class="row">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Login</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="login">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
            <button type="cancel" class="btn btn-primary">Cancel</button>
        </form>
    </div>
</div>