<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['brand'])) {
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $gen = $_POST["gen"];
    $color = $_POST["color"];
    $year = $_POST["year"];
    $drive = $_POST["drive"];
    $transmission = $_POST["transmission"];
    $fuel = $_POST["fuel"];
    $price = $_POST["price"];
    $mileage = $_POST["mileage"];

    /*$sender = "pzx110624@student.poznan.merito.pl";
    $recipient = $_POST["email"];

    $subject = "Potwierdzenia wypełnienia formularza";

    $headers = 'From: ' . $sender;
    $message = "Dziękuje za wypełnienie formularza! Poniżej znajdują się szczegóły:\n";
    $message .= "Marka: $brand\n";
    $message .= "Model: $model\n";
    $message .= "Generacja: $gen\n";
    $message .= "Kolor: $color\n";
    $message .= "Rok: $year\n";
    $message .= "Napęd: $drive\n";
    $message .= "Skrzynia biegów: $transmission\n";
    $message .= "Paliwo: $fuel\n";
    $message .= "Cena: $price\n";
    $message .= "Przebieg: $mileage\n";

    if (mail($recipient, $subject, $message, $headers)) {
        echo 'Wiadomość została wysłana';
    } else {
        echo "Błąd";
    }*/

    $carData = "$brand|$model|$gen|$color|$year|$drive|$transmission|$fuel|$price|$mileage\n";

    $file = fopen("pojazdy.txt", "a");

    fwrite($file, $carData);

    fclose($file);

    header("Location: wyswietl.php");
    exit;
}
?>
