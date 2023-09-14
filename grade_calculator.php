<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grade Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section class="container mx-auto flex justify-center mt-16">
    <div class="max-w-lg w-full rounded shadow border-2 border-indigo-200">
        <h1 class="text-center text-white bg-indigo-600 py-3 font-bold text-2xl">Grade Calculator</h1>
        <div class="py-3 px-6">
            <form action="" method="post" class="space-y-4 mb-3">
                <div class="flex flex-col space-y-2">
                    <label for="math">Math</label>
                    <input type="number" id="math" name="math" class="border-2 border-indigo-200 focus:outline-none focus:border-indigo-400 py-1.5 px-4" placeholder="Enter Math Subject Marks"/>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="higherMath">Higher Math</label>
                    <input type="number" id="higherMath" name="higherMath" class="border-2 border-indigo-200 focus:outline-none focus:border-indigo-400 py-1.5 px-4" placeholder="Enter Higher Math Subject Marks"/>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="physics">Physics</label>
                    <input type="number" id="physics" name="physics" class="border-2 border-indigo-200 focus:outline-none focus:border-indigo-400 py-1.5 px-4" placeholder="Enter Physics Subject Marks"/>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="chemistry">Chemistry</label>
                    <input type="number" id="chemistry" name="chemistry" class="border-2 border-indigo-200 focus:outline-none focus:border-indigo-400 py-1.5 px-4" placeholder="Enter Chemistry Subject Marks"/>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="biology">Biology</label>
                    <input type="number" id="biology" name="biology" class="border-2 border-indigo-200 focus:outline-none focus:border-indigo-400 py-1.5 px-4" placeholder="Enter Biology Subject Marks"/>
                </div>

                <button class="bg-indigo-500 px-4 py-1.5 rounded justify-center text-white" type="submit" name="calculate" value="calculate">GPA Calculate</button>
            </form>
            <h4>
                <?php
                if (isset($_POST['calculate'])){
                    $math = $_POST["math"];
                    $higherMath = $_POST["higherMath"];
                    $physics = $_POST["physics"];
                    $chemistry = $_POST["chemistry"];
                    $biology = $_POST["biology"];
                    $averMarks = ($math + $higherMath + $chemistry + $physics + $biology) / 5;

                    if ($averMarks >= 80 && $averMarks <= 100) {
                        $result = "A";
                    } else if($averMarks >= 70 && $averMarks < 80){
                        $result = "B";
                    }else if($averMarks >= 60 && $averMarks < 70){
                        $result = "C";
                    }else if($averMarks >= 50 && $averMarks < 60){
                        $result = "D";
                    }else{
                        $result = "F";
                    }
                    echo "The average test score is $averMarks and the corresponding letter grade is $result .";
                }
                ?>
            </h4>
        </div>
    </div>
</section>
</body>
</html>
