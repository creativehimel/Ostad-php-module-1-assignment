<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compare Two Number</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section class="container mx-auto flex justify-center mt-16">
    <div class="max-w-lg w-full rounded shadow border-2 border-indigo-200">
        <h1 class="text-center text-white bg-indigo-600 py-3 font-bold text-2xl">Compare Two Number</h1>
        <div class="py-3 px-6">
            <form action="" method="post" class="space-y-4 mb-3">
                <div class="flex flex-col space-y-2">
                    <label for="number1">Number 1:</label>
                    <input type="number" id="number1" name="number1" class="border-2 border-indigo-200 focus:outline-none focus:border-indigo-400 py-1.5 px-4" placeholder="Enter number 1"/>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="number2">Number 1:</label>
                    <input type="number" id="number2" name="number2" class="border-2 border-indigo-200 focus:outline-none focus:border-indigo-400 py-1.5 px-4" placeholder="Enter number 2"/>
                </div>

                <button class="bg-indigo-500 px-4 py-1.5 rounded justify-center text-white" type="submit" name="compare" value="compare">Compare</button>
            </form>
            <h4>
                <?php
                if (isset($_POST['compare'])){
                    $number1 = $_POST["number1"];
                    $number2 = $_POST["number2"];
                    if ($number1 > $number2){
                        $largerNumber = $number1;
                    }else{
                        $largerNumber = $number2;
                    }
                    echo "The larger number is $largerNumber .";
                }
                ?>
            </h4>
        </div>
    </div>
</section>
</body>
</html>
