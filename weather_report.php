<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather Report System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section class="container mx-auto flex justify-center mt-16">
    <div class="max-w-lg w-full rounded shadow border-2 border-indigo-200">
        <h1 class="text-center text-white bg-indigo-600 py-3 font-bold text-2xl">Weather Report</h1>
        <div class="py-3 px-5">
            <form action="" method="post" class="space-y-4 mb-3">
                <div class="flex flex-col space-y-2">
                    <label for="temperature">Temperature</label>
                    <input type="number" id="temperature" name="temperature" class="border-2 border-indigo-200 focus:outline-none focus:border-indigo-400"/>
                </div>
                <button class="bg-indigo-500 px-4 py-1.5 rounded justify-center text-white" type="submit" name="check" value="check">Weather Check</button>
            </form>
            <h4>
                <?php
                if (isset($_POST['check'])){
                    $temperature = $_POST["temperature"];
                    if ($temperature < 0) {
                        echo "It's freezing!";
                    } else if ($temperature < 25) {
                        echo "It's cool.";
                    } else {
                        echo "It's warm.";
                    }
                }
                ?>
            </h4>
        </div>
    </div>
</section>
</body>
</html>
