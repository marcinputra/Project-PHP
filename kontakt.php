<?php
include('site/header.php');
?>

<?php
if (isset($_POST['submit']) && $_POST['code'] == $_POST['codesave']) {

    $wiadomosc = "Wiadmość od (nazwa): <strong>";
    $wiadomosc .= $_POST['name'];
    $wiadomosc .= "</strong>\n";
    $wiadomosc .= "Mail nadawcy: <strong>";
    $wiadomosc .= $_POST['email'];
    $wiadomosc .= "</strong>\n";
    $wiadomosc .= "Tresc wiadomości: ";
    $wiadomosc .= $_POST['news'];

    $charSet = "UTF-8";
    $userName = "marputra@wp.pl";
    $port = 587;
    $mailSubject = $_POST['tittlenews'];

    $header = "Content-type: text/html; charset=" . $charSet . " \r\n";
    $header .= "From: " . $_POST['name'] . " <" . $_POST['name'] . "> \r\n";
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-Transfer-Encoding: 8bit \r\n";
    $header .= "Date: " . date("r (T)") . " \r\n";
    $header .= iconv_mime_encode("Subject", $mailSubject);
    // Send mail
    $success = mail($userName, $mailSubject, $wiadomosc, $header);

    if (!$success) {
        $komunikat = "Twoja wiadmość nie została wysłana.";
        print "$komunikat";
    } else {
        $komunikat = "Dziekujemy za wysłaną wiadomość! Odezwiemy się w ciągu 24 godzin.";
        print "$komunikat";
    }
?>
    <h1 class="maintitle">Mail został wysłany</h1>
<?php
} else {
?>
    <form action="kontakt.php" method="post">
        <div class="container">
            <div class="row justify-content-start formularz">
                <div class="col-xl-2 col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Imię i Nazwisko:</label>
                </div>
                <div class="col-xl-4 col-md-8">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jan Kowalski" name="name">
                </div>
            </div>
            <div class="row justify-content-start formularz">
                <div class="col-xl-2 col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">E-mail:</label>
                </div>
                <div class="col-xl-4 col-md-8">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="jan@kowalski.pl" name="email">
                </div>
            </div>
            <div class="row justify-content-start formularz">
                <div class="col-xl-2 col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Temat widomości:</label>
                </div>
                <div class="col-xl-4 col-md-8">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Wpisz temat wiadomości" name="tittlenews">
                </div>
            </div>
            <div class="row justify-content-start formularz">
                <div class="col-xl-2 col-md-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Wiadomość:</label>
                </div>
                <div class="col-xl-4 col-md-8">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Wpisz treść wiadomości" name="news"></textarea>
                </div>
            </div>
            <div class="row justify-content-start formularz">
                <div class="col-xl-2 col-md-4 alert alert-success text-center">
                    <?php
                    $tmp = '';
                    $kod = array();
                    for ($i = 0; $i < 4; $i++) {
                        $kod[] = rand(0, 9);
                        echo $kod[$i];
                        $tmp .= $kod[$i];
                    }

                    // print_r($kod);
                    ?>
                    <input type="hidden" value="<?php echo $tmp; ?>" name="codesave">
                    <!-- <br>Dodać zabezpieczenie do wysłania wiadomości. -->
                </div>
                <div class="col-xl-4 col-md-8">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Wpisz kod do wysłania" name="code">
                </div>
            </div>
            <div class="row justify-content-start formularz">
                <div class="col-xl-2 col-md-4">
                    <button type="submit" class="btn btn-primary" name="submit">Wyślij</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </div>
        </div>
    </form>


<?php
}
?>

<?php include('site/footer.php'); ?>