<?php
// Überprüfen, ob alle Daten gesendet wurden
if (isset($_POST['gewicht'], $_POST['groesse'], $_POST['aktivität'], $_POST['jobart'])) {
    $gewicht = $_POST['gewicht'];
    $groesse = $_POST['groesse'] / 100; // Umrechnung von cm in Meter
    $aktivität = $_POST['aktivität'];
    $jobart = $_POST['jobart'];

    // Sicherstellen, dass die Größe > 0 ist
    if ($groesse > 0) {
        // Berechnung des BMI: Gewicht / (Größe^2)
         //Verarbeitung nach Aktivität
         $aktivitätText = '';
         switch ($aktivität) {
             case '1':
                 $aktivitätText = 'Aktiv';
                 $bmi = $gewicht / ($groesse * $groesse) - 0.5;
                 break;
             case '2':
                 $aktivitätText = 'Etwas aktiv';
                 $bmi = $gewicht / ($groesse * $groesse) - 0.3;
                 break;
             case '3':
                 $aktivitätText = 'Wenig aktiv';
                 $bmi = $gewicht / ($groesse * $groesse) - 0.1;
                 break;
             case '4':
                 $aktivitätText = 'Nicht aktiv';
                 $bmi = $gewicht / ($groesse * $groesse);
                 break;
         }
         switch ($jobart) {
            case '1':
                $bmi = $bmi - 0.17;
                $jobartText = "Handwerklich";
                break;
            case '2':
                $bmi = $bmi - 0.04;
                $jobartText = "Bürojob";
                break;
            case '3':
                $bmi = $bmi;
                $jobartText = "Joblos";
            }     
        $bmi = round($bmi, 2);  //runden

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

        echo "Ihr BMI beträgt: $bmi ($kategorie). Aktivitätslevel: $aktivitätText, Jobart: $jobartText.";
    } else {
        echo "Ungültige Größe.";
    }
} else {
    echo "Bitte alle Felder ausfüllen.";
}
