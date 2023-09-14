<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Even Odd Checker</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section class="container mx-auto flex justify-center mt-16">
    <div class="max-w-lg w-full rounded shadow border-2 border-indigo-200">
        <h1 class="text-center text-white bg-indigo-600 py-3 font-bold text-2xl">Even Odd Checker</h1>
        <div class="py-3 px-6">
            <form action="" method="post" class="space-y-4 mb-3">
                <div class="flex flex-col space-y-2">
                    <label for="number">Number:</label>
                    <input type="number" id="number" name="number" class="border-2 border-indigo-200 focus:outline-none focus:border-indigo-400 py-1.5 px-4" placeholder="Enter a number."/>
                </div>


                <button class="bg-indigo-500 px-4 py-1.5 rounded justify-center text-white" type="submit" name="isEvenOdd" value="isEvenOdd">Check</button>
            </form>
            <h4>
                <?php
                if (isset($_POST['isEvenOdd'])){
                    $number = $_POST["number"];
                    if ($number % 2 == 0) {
                        echo "The number is even.";
                    } else {
                        echo "The number is odd.";
                    }
                }
                ?>
            </h4>
        </div>
    </div>
</section>
</body>
</html>
