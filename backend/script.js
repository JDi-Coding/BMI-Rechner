function calculateBMI() {
    // Hole die Eingabewerte
    let gewicht = document.getElementById("gewicht").value;
    let groesse = document.getElementById("groesse").value;

    // Erstellen eines AJAX-Anfrageobjekts
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./Backend/bmi_calculator.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Bei erfolgreicher Anfrage das Ergebnis anzeigen
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("bmi_result").innerHTML = xhr.responseText;
        }
    };

    // Sende die Eingabedaten an das PHP-Skript
    xhr.send("gewicht=" + gewicht + "&groesse=" + groesse);
}