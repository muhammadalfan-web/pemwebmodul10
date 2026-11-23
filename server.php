
<?php

header("Content-Type: text/plain; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nama = isset($_POST["nama"]) ? trim($_POST["nama"]) : "";

    if ($nama === "") {

        echo "Input nama tidak boleh kosong!";

    } else {

        $nama = htmlspecialchars($nama, ENT_QUOTES, "UTF-8");

        echo "Halo, " . $nama . "! Selamat datang di AJAX!";

    }

} else {

    echo "Metode request tidak valid!";

}

?>
