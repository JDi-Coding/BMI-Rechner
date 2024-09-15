<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Rechner</title>
    <script src="./backend/script.js"></script>
</head>
<body>
    <h1>BMI Rechner</h1>

    <label for="gewicht">Gewicht (in kg):</label>
    <input type="number" id="gewicht" required>

    <label for="groesse">Größe (in cm):</label>
    <input type="number" step="0.01" id="groesse" required>

    <label for="AktivitätsLevel">Aktivität:</label>
    <Select id="aktivität" name="AktivitätsLevel" required>
        <option Value="">Bitte Auswählen</option>
        <option Value="1">Aktiv</option>
        <option Value="2">Etwas Aktiv</option>
        <option Value="3">Wenig Aktiv</option>
        <option Value="4">Nicht Aktiv</option>
    </Select>

    <label for="JobArt">JobArt:</label>
    <Select name="JobArt" id="jobart" required>
        <option Value="">Bitte Auswählen</option>
        <option Value="1">Handwerklich</option>
        <option Value="2">Bürojob</option>
    </Select>

    <button onclick="calculateBMI()">Berechne BMI</button>

    <h3>Ihr BMI:</h3>
    <div id="bmi_result"></div>
</body>
</html>