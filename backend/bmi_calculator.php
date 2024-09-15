<?php
if (isset($_POST['gewicht']) && isset($_POST['groesse'])) {
    $gewicht = $_POST['gewicht'];
    $groesse = $_POST['groesse'];

    if ($groesse > 0) {
        // Berechnung des BMI: Gewicht / (Größe^2)
        $bmi = $gewicht / ($groesse * $groesse);
        $bmi = round($bmi, 2);  // Auf 2 Dezimalstellen runden

        // BMI-Kategorisierung
        if ($bmi < 18.5) {
            $kategorie = "Untergewicht";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $kategorie = "Normalgewicht";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $kategorie = "Übergewicht";
        } else {
            $kategorie = "Adipositas";
        }

        echo "Ihr BMI beträgt: $bmi ($kategorie)";
    } else {
        echo "Ungültige Größe.";
    }
} else {
    echo "Bitte Gewicht und Größe eingeben.";
}
