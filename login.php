<?php
session_start();
include('site/header.php');
?>
<?php
if (isset($_SESSION['loginSession'])) {
    if (isset($_POST['logout'])) {
        unset($_SESSION['loginSession']);
        header('location: login.php');
    } else {
?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Wylogowywanie</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <button type="submit" class="btn btn-primary" name="logout">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- 
        echo "Jest sesja";
    -->
    <?php
    }
} else {
    if (isset($_POST['submit'])) {
        $login = htmlspecialchars($_POST['login']);
        $pass  = htmlspecialchars($_POST['password']);
        // echo $login . " " . $pass;
        $conn = mysqli_connect('localhost', 'webPLA', 'webPLA', 'portal');
        if (!$conn) {
            echo 'Błąd połaczenia z bazą danych. Error : ' . mysqli_connect_error();
        } else {
            $sqlSelect = 'SELECT login, haslo FROM users';
            $result = mysqli_query($conn, $sqlSelect);
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $flag = true;
            foreach ($users as $user) {
                // echo $user['login'] . " - " . $user['haslo'] . "<br>";
                if ($user['login'] == $login && $user['haslo'] == $pass) {
                    echo "Jestem zalogowany!!!";
                    $flag = false;
                    $_SESSION['loginSession'] = $login;
                    header('location: login.php');
                    // break;
                }
                // else {
                //     echo "Błędnie podałeś login lub hasło.";
                // }
            }
            if ($flag) echo "Błędnie podałeś login lub hasło.";
        }
    }
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
                <button type="submit" class="btn btn-primary" name="submit">Log In</button>
                <button type="cancel" class="btn btn-primary">Cancel</button>
            </form>
        </div>
    </div>
<?php } ?>

<?php include('site/footer.php'); ?>