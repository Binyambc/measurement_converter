<div class="converter">
    <form action="" method="post">
        <label for="temprature">Fahrenheit</label>
        <input type="number" name="fahrenheit" placeholder="Fahrenheit">
        <br>
        <label for="speed">Speed</label>
        <input type="number" name="kmh" placeholder="km/h">
        <br>
        <label for="mass">Mass</label>
        <input type="number" name="kg" placeholder="kg">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $inputFahrenheit = $_POST["fahrenheit"];
        $celcius = convertTemprature($inputFahrenheit);

        function convertTemprature($inputFahrenheit)
        {
            $celcius = ($inputFahrenheit - 32) * (5 / 9);
            return $celcius;
        }

        echo "<p>The converted value is " . $celcius . "°C.</p>";

        $inputKmh = $_POST["kmh"];
        $speed = convertSpeed($inputKmh);

        function convertSpeed($inputKmh)
        {
            $speed = ($inputKmh * 5 / 18);
            return $speed;
        }

        echo "<p>The converted value is " . $speed . "m/s.</p>";

        $inputKg = $_POST["kg"];
        $gram = convertMass($inputKg);

        function convertMass($inputKg)
        {
            $gram = ($inputKg * 1000);
            return $gram;
        }

        echo "<p>The converted value is: " . $gram .  "g.</p>";
    }
    ?>

</div>