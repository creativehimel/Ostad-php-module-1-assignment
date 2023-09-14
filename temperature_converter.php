<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperature Converter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section class="container mx-auto flex justify-center mt-16">
    <div class="max-w-lg w-full rounded shadow border-2 border-indigo-200">
        <h1 class="text-center text-white bg-indigo-600 py-3 font-bold text-2xl">Temperature Converter</h1>
        <div class="py-3 px-5">
            <form action="" method="post" class="space-y-4 mb-3">
                <div class="flex flex-col space-y-2">
                    <label for="temperature">Temperature</label>
                    <input type="number" id="temperature" name="temperature" class="border-2 border-indigo-200 focus:outline-none focus:border-indigo-400"/>
                </div>
                <div class="flex justify-between items-center">
                    <label for="conversion_direction" >Conversion Direction</label>
                    <select name="conversion_direction" id="conversion_direction" class="py-1.5 px-3 bg-indigo-400 focus:outline-none bg-opacity-20 rounded text-indigo-800">
                        <option value="Celsius to Fahrenheit">Celsius to Fahrenheit</option>
                        <option value="Fahrenheit to Celsius">Fahrenheit to Celsius</option>
                    </select>
                </div>
                <button class="bg-indigo-500 px-4 py-1.5 rounded justify-center text-white" type="submit" name="convert" value="convert">Convert</button>
            </form>
            <h4>
                <?php
                    if (isset($_POST['convert'])){
                        $temperature = $_POST["temperature"];
                        $conversionDirection = $_POST["conversion_direction"];
                        // Convert the temperature
                        if ($conversionDirection == "Celsius to Fahrenheit") {
                            $convertedTemperature = ($temperature * 9 / 5) + 32;
                        } else {
                            $convertedTemperature = ($temperature - 32) * 5 / 9;
                        }
                        // Display the converted temperature
                        echo "The converted temperature is $convertedTemperature  degrees  $conversionDirection .";
                    }
                ?>
            </h4>
        </div>
    </div>
</section>
</body>
</html>
