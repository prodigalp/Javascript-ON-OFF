<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Master of Procrastination</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Zen+Dots&display=swap" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <section class="lightBulb">
            <div class="lightBulbParam">
                <h1>Interlock System 2.0</h1>
                <div class="imgLight">
                    <img id="imgSwitch" src="assets/img/off.png" alt="Image Default Image">
                </div>
                <div class="buttonArea">
                    <button onclick="document.getElementById('imgSwitch').src='assets/img/on.png'">ON</button>
                    <button onclick="document.getElementById('imgSwitch').src='assets/img/off.png'">OFF</button>
                </div>
            </div>
        </section>
    </div>
    <!-- <script src="main.js"></script> -->
</body>

</html>