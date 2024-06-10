<?php
include("filtrowanie.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Cars.css">
    <title>Wyświetlanie danych</title>
</head>
<body>
    <header>
        <h2>Wyświetlasz dane pojazdów</h2>
    </header>
    <ul>
        <li><a href="Main.php">Strona główna</a></li>
        <li><a href="add.php">Dodaj nowy pojazd</a></li>
    </ul>
    <input type="checkbox" id="filter-toggle" class="filter-toggle">
    <label for="filter-toggle" class="filter-label">Filtruj</label>
    <div id="filter-form" class="filter-form">
    <table>
    <form method="get" action="">
    <tr><th><label for="color-filter">Kolor:</label>
    <select name="color" id="color-filter">
        <option value="all">Wszystkie</option>
        <option value="Beżowy" <?= isset($_GET['color']) && $_GET['color'] == 'Beżowy' ? 'selected' : '' ?>>Beżowy</option>
        <option value="Biały" <?= isset($_GET['color']) && $_GET['color'] == 'Biały' ? 'selected' : '' ?>>Biały</option>
        <option value="Błękitny" <?= isset($_GET['color']) && $_GET['color'] == 'Błękitny' ? 'selected' : '' ?>>Błękitny</option>
        <option value="Bordowy" <?= isset($_GET['color']) && $_GET['color'] == 'Bordowy' ? 'selected' : '' ?>>Bordowy</option>
        <option value="Brązowy" <?= isset($_GET['color']) && $_GET['color'] == 'Brązowy' ? 'selected' : '' ?>>Brązowy</option>
        <option value="Czarny" <?= isset($_GET['color']) && $_GET['color'] == 'Czarny' ? 'selected' : '' ?>>Czarny</option>
        <option value="Czerwony" <?= isset($_GET['color']) && $_GET['color'] == 'Czerwony' ? 'selected' : '' ?>>Czerwony</option>
        <option value="Fioletowy" <?= isset($_GET['color']) && $_GET['color'] == 'Fioletowy' ? 'selected' : '' ?>>Fioletowy</option>
        <option value="Granatowy" <?= isset($_GET['color']) && $_GET['color'] == 'Granatowy' ? 'selected' : '' ?>>Granatowy</option>
        <option value="Niebieski" <?= isset($_GET['color']) && $_GET['color'] == 'Niebieski' ? 'selected' : '' ?>>Niebieski</option>
        <option value="Pomarańczowy" <?= isset($_GET['color']) && $_GET['color'] == 'Pomarańczowy' ? 'selected' : '' ?>>Pomarańczowy</option>
        <option value="Srebrny" <?= isset($_GET['color']) && $_GET['color'] == 'Srebrny' ? 'selected' : '' ?>>Srebrny</option>
        <option value="Szary" <?= isset($_GET['color']) && $_GET['color'] == 'Szary' ? 'selected' : '' ?>>Szary</option>
        <option value="Zielony" <?= isset($_GET['color']) && $_GET['color'] == 'Zielony' ? 'selected' : '' ?>>Zielony</option>
        <option value="Złoty" <?= isset($_GET['color']) && $_GET['color'] == 'Złoty' ? 'selected' : '' ?>>Złoty</option>
        <option value="Żółty" <?= isset($_GET['color']) && $_GET['color'] == 'Żółty' ? 'selected' : '' ?>>Żółty</option>
        <option value="Inny kolor" <?= isset($_GET['color']) && $_GET['color'] == 'Inny kolor' ? 'selected' : '' ?>>Inny kolor</option>
    </select></th></tr>

    <tr><th><label for="drive-filter">Napęd:</label>
    <select name="drive" id="drive-filter">
        <option value="all">Wszystkie</option>
        <option value="4x4" <?= isset($_GET['drive']) && $_GET['drive'] == '4x4' ? 'selected' : '' ?>>4x4</option>
        <option value="Przednie" <?= isset($_GET['drive']) && $_GET['drive'] == 'Przednie' ? 'selected' : '' ?>>Przód</option>
        <option value="Tylne" <?= isset($_GET['drive']) && $_GET['drive'] == 'Tylne' ? 'selected' : '' ?>>Tył</option>
    </select></th></tr>

    <tr><th><label for="transmission-filter">Skrzynia biegów:</label>
    <select name="transmission" id="transmission-filter">
        <option value="all">Wszystkie</option>
        <option value="Manualna" <?= isset($_GET['transmission']) && $_GET['transmission'] == 'Manualna' ? 'selected' : '' ?>>Manualna</option>
        <option value="Automatyczna" <?= isset($_GET['transmission']) && $_GET['transmission'] == 'Automatyczna' ? 'selected' : '' ?>>Automatyczna</option>
    </select></th></tr>

    <tr><th><label for="fuel-filter">Paliwo:</label>
    <select name="fuel" id="fuel-filter">
        <option value="all">Wszystkie</option>
        <option value="Benzyna" <?= isset($_GET['fuel']) && $_GET['fuel'] == 'Benzyna' ? 'selected' : '' ?>>Benzyna</option>
        <option value="Diesel" <?= isset($_GET['fuel']) && $_GET['fuel'] == 'Diesel' ? 'selected' : '' ?>>Diesel</option>
        <option value="Elektryczny" <?= isset($_GET['fuel']) && $_GET['fuel'] == 'Elektryczny' ? 'selected' : '' ?>>Elektryczne</option>
        <option value="Etanol" <?= isset($_GET['fuel']) && $_GET['fuel'] == 'Etanol' ? 'selected' : '' ?>>Etanol</option>
        <option value="Hybryda" <?= isset($_GET['fuel']) && $_GET['fuel'] == 'Hybryda' ? 'selected' : '' ?>>Hybryda</option>
        <option value="Wodór" <?= isset($_GET['fuel']) && $_GET['fuel'] == 'Wodór' ? 'selected' : '' ?>>Wodór</option>
    </select></th></tr>

    <tr><th><label for="year-from">Rok produkcji od:</label>
    <input type="text" name="year_from" id="year-from" value="<?= isset($_GET['year_from']) ? $_GET['year_from'] : '' ?>">

    <label for="year-to">Rok produkcji do:</label>
    <input type="text" name="year_to" id="year-to" value="<?= isset($_GET['year_to']) ? $_GET['year_to'] : '' ?>"></th></tr>

    <tr><th><label for="price-from">Cena od:</label>
    <input type="text" name="price_from" id="price-from" value="<?= isset($_GET['price_from']) ? $_GET['price_from'] : '' ?>">

    <label for="price-to">Cena do:</label>
    <input type="text" name="price_to" id="price-to" value="<?= isset($_GET['price_to']) ? $_GET['price_to'] : '' ?>"></th></tr>

    <tr><th><label for="mileage-from">Przebieg od:</label>
    <input type="text" name="mileage_from" id="mileage-from" value="<?= isset($_GET['mileage_from']) ? $_GET['mileage_from'] : '' ?>">

    <label for="mileage-to">Przebieg do:</label>
    <input type="text" name="mileage_to" id="mileage-to" value="<?= isset($_GET['mileage_to']) ? $_GET['mileage_to'] : '' ?>"></th></tr>
    <tr><th style="background-color: black;"><button type="submit">Filtruj dane</button></th></tr>
    </form>
    </table>
    </div>
    <table>
        <tr>
            <th style ="background-color:grey">Marka</th>
            <th style ="background-color:grey">Model</th>
            <th style ="background-color:grey">Generacja</th>
            <th style ="background-color:grey">Kolor</th>
            <th style ="background-color:grey">Rok produkcji</th>
            <th style ="background-color:grey">Napęd</th>
            <th style ="background-color:grey">Skrzynia biegów</th>
            <th style ="background-color:grey">Paliwo</th>
            <th style ="background-color:grey">Cena</th>
            <th style ="background-color:grey">Przebieg</th>
            

        <?php foreach ($pojazdy as $pojazd): ?>
            <tr>
                <td><?= $pojazd['brand'] ?></td>
                <td><?= $pojazd['model'] ?></td>
                <td><?= $pojazd['gen'] ?></td>
                <td><?= $pojazd['color'] ?></td>
                <td><?= $pojazd['year'] ?></td>
                <td><?= $pojazd['drive'] ?></td>
                <td><?= $pojazd['transmission'] ?></td>
                <td><?= $pojazd['fuel'] ?></td>
                <td><?= $pojazd['price'] ?></td>
                <td><?= $pojazd['mileage'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
