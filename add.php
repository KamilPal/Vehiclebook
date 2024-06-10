<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Dodaj samochód</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Cars.css">
</head>

<body>
    <header>
        <h2>Dodajesz dane pojazdu</h2>
    </header>
    <nav>
        <ul>
            <li><a href="Main.php">Strona główna</a></li>
            <li><a href="wyswietl.php">Strona do wyświetlenia pojazdów</a></li>
        </ul>
    </nav>
        <table>
        <form action="zapiszpojazd.php" method="POST">
    <tr><th>Marka: <input type="text" name="brand" required></th></tr>
    <tr><th>Model: <input type="text" name="model" required></th></tr>
    <tr><th>Generacja: <input type="number" name="gen" step="1" value="1" min="1" max="10"></th></tr>
    <tr><th><label for="color">Wybierz kolor: </label>
    <select id="color" name="color">
        <option value="Beżowy">Beżowy</option>
        <option value="Biały">Biały</option>
        <option value="Błękitny">Błękitny</option>
        <option value="Bordowy">Bordowy</option>
        <option value="Brązowy">Brązowy</option>
        <option value="Czarny">Czarny</option>
        <option value="Czerwony">Czerwony</option>
        <option value="Fioletowy">Fioletowy</option>
        <option value="Granatowy">Granatowy</option>
        <option value="Niebieski">Niebieski</option>
        <option value="Pomarańczowy">Pomarańczowy</option>
        <option value="Srebrny">Srebrny</option>
        <option value="Szary">Szary</option>
        <option value="Zielony">Zielony</option>
        <option value="Złoty">Złoty</option>
        <option value="Żółty">Żółty</option>   
        <option value="Inny kolor">Inny kolor</option>  
    </select></th></tr>
    <tr><th><label for="year">Wybierz rok  produkcji:</label>
    <input type="text" id="year" name="year" list="years" pattern="[0-9]{4}" maxlength="4" required>
    <datalist id="years">
        <?php
        $currentYear = date("Y");
        for ($year = 1886; $year <= $currentYear; $year++) {
            echo "<option value=\"$year\">";
        }
        ?>
    </datalist></th></tr>
    <tr><th><label for="drive">Napęd: </label>
    <select id="drive" name="drive">
        <option value="4x4">4x4</option>
        <option value="Przednie">Na przednie koła</option>
        <option value="Tylne">Na tylne koła</option>
    </select></th></tr>
    <tr><th><label for="transmission">Rodzaj skrzyni biegów: </label>
    <select id="transmission" name="transmission">
        <option value="Manualna">Manualna</option>
        <option value="Automatyczna">Automatyczna</option>
    </select></th></tr>
    <tr><th><label for="fuel">Rodzaj paliwia: </label>
    <select id="fuel" name="fuel">
        <option value="Benzyna">Benzyna</option>
        <option value="Diesel">Diesel</option>
        <option value="Elektryczny">Elektryczny</option>
        <option value="Etanol">Etanol</option>
        <option value="Hybryda">Hybryda</option>
        <option value="Wodór">Wodór</option>
    </select></th></tr>
    <tr><th>Cena: <input type="number" name="price" step="1" value="1" min="0" max=""required></th></tr>
    <tr><th>Pzebieg: <input type="number" name="mileage" step="1" value="1" min="0" max=""required></th></tr>
    <!--<tr><th>Email: <input type="email" name="email"></th></tr>-->
    <tr><th><input type="submit" value="Umieść swój pojazd"></p>
    </table>

    <footer>

    </footer>
</body>
</html>