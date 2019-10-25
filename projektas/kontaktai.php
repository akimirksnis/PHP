<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", '');
    define("DB_NAME", "kontaktine_forma");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo "Atsiprasome, bet tinklalapis susidure su problema.\n";
    echo 'Klaida: ' . $mysqli->connect_error . '\n';
    exit();
}

    mysqli_query($mysqli, "INSERT INTO klientai (vardas, email, message)VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[message]')");

?>

<?php
$vardas = trim($_POST['vardas']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

       if(!empty($vardas) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = "$email";
            $to = "waitkeviciute@gmail.com";
            $subject = "Nauja zinute";
            $autorius = 'Nuo: ' . $vardas . ', ' . $email;
            $komentaras = htmlspecialchars($message);

            ' . $mail->getMessage() . ';
            echo "<script>alert('Aciu. Greitu laiku susisieksime.');</script>";
        }
}

include('index.html');
