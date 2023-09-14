<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section class="container mx-auto flex justify-center mt-16">
    <div class="max-w-lg w-full rounded shadow border-2 border-indigo-200">
        <h1 class="text-center text-white bg-indigo-600 py-3 font-bold text-2xl">Simple Calculator</h1>
        <div class="py-3 px-5">
            <form action="" method="post" class="space-y-4 mb-3">
                <div class="flex flex-col space-y-2">
                    <label for="number1">Number 1:</label>
                    <input type="number" id="number1" name="number1" class="border-2 px-4 py-1.5 border-indigo-200 focus:outline-none focus:border-indigo-400" placeholder="Enter 1st number"/>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="number2">Temperature</label>
                    <input type="number" id="number2" name="number2" class="border-2 px-4 py-1.5 border-indigo-200 focus:outline-none focus:border-indigo-400" placeholder="Enter 2nd number"/>
                </div>
                <div class="flex justify-between items-center">
                    <label for="operation" >Select Operation</label>
                    <select name="operation" id="operation" class="py-1.5 px-3 bg-indigo-400 focus:outline-none bg-opacity-20 rounded text-indigo-800">
                        <option value="addition">Addition</option>
                        <option value="subtraction">Subtraction</option>
                        <option value="multiplication">Multiplication</option>
                        <option value="division">Division</option>
                    </select>
                </div>
                <button class="bg-indigo-500 px-4 py-1.5 rounded justify-center text-white" type="submit" name="convert" value="convert">Convert</button>
            </form>
            <h4>
                <?php
                if (isset($_POST['convert'])){
                    $number1 = $_POST["number1"];
                    $number2 = $_POST["number2"];
                    $operation = $_POST["operation"];
                    // Convert the temperature
                    if ($operation == "addition") {
                        $result = $number1 + $number2;
                    } else if($operation == "subtraction"){
                        $result = $number1 - $number2;
                    }else if($operation == "multiplication"){
                        $result = $number1 * $number2;
                    }else if($operation == "division"){
                        $result = $number1 / $number2;
                    }else{
                        $result = "Invalid operation";
                    }
                    echo "The result is $result .";
                }
                ?>
            </h4>
        </div>
    </div>
</section>
</body>
</html>
