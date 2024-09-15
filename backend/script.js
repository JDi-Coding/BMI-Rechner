function calculateBMI() {
    // Hole die Eingabewerte
    let gewicht = document.getElementById("gewicht").value;
    let groesse = document.getElementById("groesse").value;
    let aktivität = document.getElementById("aktivität").value;
    let jobart = document.getElementById("jobart").value;

    // Überprüfe, ob alle Felder ausgefüllt sind
    if (gewicht === "" || groesse === "" || aktivität === "" || jobart === "") {
        alert("Bitte füllen Sie alle Felder aus.");
        return;
    }

    // Erstellen eines AJAX-Anfrageobjekts
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "backend/bmi_calculator.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Bei erfolgreicher Anfrage das Ergebnis anzeigen
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("bmi_result").innerHTML = xhr.responseText;
        }
    };

    // Sende die Eingabedaten an das PHP-Skript
    xhr.send("gewicht=" + gewicht + "&groesse=" + groesse + "&aktivität=" + aktivität + "&jobart=" + jobart);
}
