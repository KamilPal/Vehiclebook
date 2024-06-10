<?php
$pojazdy = [];

$file = fopen("pojazdy.txt", "r");
while (!feof($file)) {
    $line = fgets($file);
    if (!empty($line)) {
        $data = explode("|", $line);
        $pojazdy[] = [
            'brand' => $data[0],
            'model' => $data[1],
            'gen' => $data[2],
            'color' => $data[3],
            'year' => $data[4],
            'drive' => $data[5],
            'transmission' => $data[6],
            'fuel' => $data[7],
            'price' => $data[8],
            'mileage' => $data[9]
        ];
    }
}
fclose($file);

if (isset($_GET['color']) && $_GET['color'] !== 'all') {
    $selectedColor = $_GET['color'];
    $pojazdy = array_filter($pojazdy, function ($car) use ($selectedColor) {
        return $car['color'] === $selectedColor;
    });
}

if (isset($_GET['drive']) && $_GET['drive'] !== 'all') {
    $selectedDrive = $_GET['drive'];
    $pojazdy = array_filter($pojazdy, function ($car) use ($selectedDrive) {
        return $car['drive'] === $selectedDrive;
    });
}

if (isset($_GET['transmission']) && $_GET['transmission'] !== 'all') {
    $selectedTransmission = $_GET['transmission'];
    $pojazdy = array_filter($pojazdy, function ($car) use ($selectedTransmission) {
        return $car['transmission'] === $selectedTransmission;
    });
}

if (isset($_GET['fuel']) && $_GET['fuel'] !== 'all') {
    $selectedFuel = $_GET['fuel'];
    $pojazdy = array_filter($pojazdy, function ($car) use ($selectedFuel) {
        return $car['fuel'] === $selectedFuel;
    });
}

if (!empty($_GET['year_from']) && !empty($_GET['year_to'])) {
    $minYear = intval($_GET['year_from']);
    $maxYear = intval($_GET['year_to']);

    $pojazdy = array_filter($pojazdy, function ($car) use ($minYear, $maxYear) {
        $carYear = intval($car['year']);
        return $carYear >= $minYear && $carYear <= $maxYear;
    });
}

if (!empty($_GET['price_from']) && !empty($_GET['price_to'])) {
    $minPrice = floatval($_GET['price_from']);
    $maxPrice = floatval($_GET['price_to']);

    $pojazdy = array_filter($pojazdy, function ($car) use ($minPrice, $maxPrice) {
        $carPrice = floatval($car['price']);
        return $carPrice >= $minPrice && $carPrice <= $maxPrice;
    });
}

if (!empty($_GET['mileage_from']) && !empty($_GET['mileage_to'])) {
    $minMileage = floatval($_GET['mileage_from']);
    $maxMileage = floatval($_GET['mileage_to']);

    $pojazdy = array_filter($pojazdy, function ($car) use ($minMileage, $maxMileage) {
        $carMileage = floatval($car['mileage']);
        return $carMileage >= $minMileage && $carMileage <= $maxMileage;
    });
}
?>
