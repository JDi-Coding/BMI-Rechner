<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Rechner</title>
</head>
<body>
    <h1>BMI Rechner</h1>

    <label for="gewicht">Gewicht (in kg):</label>
    <input type="number" id="gewicht" required><br><br>

    <label for="groesse">Größe (in m):</label>
    <input type="number" step="0.01" id="groesse" required><br><br>

    <button onclick="calculateBMI()">Berechne BMI</button>

    <h3>Ihr BMI:</h3>
    <div id="bmi_result"></div>
</body>
</html>
