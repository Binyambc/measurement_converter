<div class="converter">
    <form action="" method="post">
        <label for="temprature">Fahrenheit</label>
        <input type="number" name="fahrenheit" placeholder="Fahrenheit" required>
        <br>
        <label for="speed">Speed</label>
        <input type="number" name="kmh" placeholder="km/h" required>
        <br>
        <label for="mass">Mass</label>
        <input type="number" name="kg" placeholder="kg" required>

    </form>

    <?php
    $inputFahrenheit = $_POST["fahrenheit"];
    $celcius = convertTemprature($inputFahrenheit);

    function convertTemprature($inputFahrenheit)
    {
        $celcius = ($inputFahrenheit - 32) * (5 / 9);
        return $celcius;
    }

    echo "The converted value is: $celcius °C.";

    $inputKmh = $_POST["kmh"];
    $mps = convertSpeed($inputKmh);

    function convertSpeed($inputKmh)
    {
        $mps = ($inputKmh * 5 / 18);
        return $mps;
    }

    echo "The converted value is: $mps m/s.";

    ?>

</div>