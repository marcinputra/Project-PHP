<?php include('site/header.php'); ?>
<?php
$error = array("", "", "", "", "", true, true);
if (isset($_POST['submit'])) {
    $imie = htmlspecialchars($_POST['imie']);
    if ($imie == "" || strlen($imie) < 3) {
        $error[0] = "Brak imienia.";
        // echo $error[0];
    }
    $nazwisko = htmlspecialchars($_POST['nazwisko']);
    if ($nazwisko == "" || strlen($nazwisko) < 3) {
        $error[1] = "Brak nazwiska.";
    }
    $mail = htmlspecialchars($_POST['mail']);
    if ($mail == "") {
        $error[2] = "Brak mail'a.";
    }
    $login = htmlspecialchars($_POST['login']);
    if ($login == "" || strlen($login) < 2) {
        $error[3] = "Brak loginu.";
    }
    $haslo1 = htmlspecialchars($_POST['haslo1']);
    $haslo2 = htmlspecialchars($_POST['haslo2']);
    if (
        !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $haslo1)
        || !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $haslo2)
        || $haslo1 != $haslo2
    )
        $error[4] = "Hasło musi posiadać min. 8 znaków. i być identyczne.";
    // 1wwwdAw@dwaA!aa

    if (!empty($_POST['regulamin'])) {
        $error[5] = true;
    } else {
        $error[5] = false;
    }
    $code = htmlspecialchars($_POST['code']);
    $codesave = htmlspecialchars($_POST['codesave']);
    if ($code == $codesave) {
        $error[6] = true;
    } else {
        $error[6] = false;
    }
}
?>

<!-- formularz -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- <form action="signup.php" method="post"> -->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <h2>Załóż konto</h2>
                <div class="mb-3">
                    <?php
                    if ($error[0] != "") {
                    ?>
                        <label for="" class="alert alert-warning"><?php echo $error[0]; ?></label>
                    <?php } ?>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Imię" name="imie">
                </div>
                <div class="mb-3">
                    <?php
                    if ($error[1] != "") {
                    ?>
                        <label for="" class="alert alert-warning"><?php echo $error[1]; ?></label>
                    <?php } ?>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nazwisko" name="nazwisko">
                </div>
                <div class="mb-3">
                    <?php
                    if ($error[3] != "") {
                    ?>
                        <label for="" class="alert alert-warning"><?php echo $error[3]; ?></label>
                    <?php } ?>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="login" name="login">
                </div>
                <div class="mb-3">
                    <?php
                    if ($error[2] != "") {
                    ?>
                        <label for="" class="alert alert-warning"><?php echo $error[2]; ?></label>
                    <?php } ?>
                    <input type="mail" class="form-control" id="exampleFormControlInput1" placeholder="nazwa@mail.com" name="mail">
                </div>
                <div class="mb-3">
                    <?php
                    if ($error[4] != "") {
                    ?>
                        <label for="" class="alert alert-warning"><?php echo $error[4]; ?></label>
                    <?php } ?>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="hasło" name="haslo1">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="powtórz hasło" name="haslo2">
                </div>
                <div class="mb-3">
                    <label class="form-check-label alert alert-success" for="flexCheckChecked">
                        <?php
                        $tmp = '';
                        $kod = array();
                        for ($i = 0; $i < 4; $i++) {
                            $kod[] = rand(0, 9);
                            echo $kod[$i];
                            $tmp .= $kod[$i];
                        }
                        ?>
                    </label>
                    <input type="hidden" value="<?php echo $tmp; ?>" name="codesave">
                </div>
                <div class="col-xl-4 col-md-8">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Wpisz kod do wysłania" name="code">
                </div>
                <div class="form-check">
                    <?php
                    if (!$error[5]) {
                    ?>
                        <label for="" class="alert alert-warning">Musisz zaakceptować regulamin, aby korzystać z serwisu Internetowego.</label>
                    <?php } ?>
                    <input class="form-check-input" type="checkbox" value="regulamin" id="flexCheckChecked" name="regulamin">
                    <label class="form-check-label" for="flexCheckChecked">
                        Akceptuje regulamin strony Internetowej.
                    </label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3" name="submit">Załóż konto</button>
                    <button type="reset" class="btn btn-primary mb-3">Wyczyść</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end - formularz -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            if ($error[0] == "" && $error[1] == "" && $error[2] == "" && $error[3] == "" && $error[4] == "" && $error[5] && isset($_POST['submit']) && $error[6]) {
                $conn = mysqli_connect('localhost', 'webPLA', 'webPLA', 'portal');
                if (!$conn) {
                    echo 'Błąd połaczenia z bazą danych. Error : ' . mysqli_connect_error();
                } else {
                    $flagLogin = true;
                    $flagMail = true;
                    $sqlSelect = 'SELECT login, mail FROM users';
                    $result = mysqli_query($conn, $sqlSelect);
                    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($users as $user1) {
                        if ($user1['login'] == $login) {
                            $flagLogin = false;
                            break;
                        }
                    }
                    foreach ($users as $user2) {
                        if ($user2['mail'] == $mail) {
                            $flagMail = false;
                            break;
                        }
                    }
                    if ($flagLogin && $flagMail) {
                        $datadodania = date("Y-m-d");
                        $sql = "INSERT INTO users(imie, nazwisko, login, mail, haslo, regulamin, dataDodania) VALUES ('$imie','$nazwisko','$login','$mail','$haslo1',true,'$datadodania')";
                        mysqli_query($conn, $sql);
                        echo 'Dodano użytkownika!';
                    } else {
                        echo 'Podany login lub mail istnieje.';
                    }
                    mysqli_close($conn);
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include('site/footer.php'); ?>