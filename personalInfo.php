<?php
$name = "Md. Himel Ali";
$age = 28;
$bio = "Hi, I'm <span class='italic font-bold'>Md. Himel Ali</span>, a front-end & back-end developer with over 1 year of experience in the industry. I'm passionate about creating beautiful, user-friendly websites and web applications. I'm a highly motivated and self-directed individual with a proven track record of success. I'm always looking for new challenges and opportunities to learn and grow.";
$country = "Bangladesh";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Personal Info</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section class="container mx-auto flex justify-center mt-16">
    <div class="max-w-lg w-full rounded shadow border-2 border-indigo-200">
        <h1 class="text-center text-white bg-indigo-600 py-3 font-bold text-2xl">My Personal Information</h1>
        <div class="py-3 px-5">
            <h3> <spna class="font-bold pe-1.5">Name: </spna> <?php echo $name; ?></h3>
            <h3> <spna class="font-bold pe-1.5">Age: </spna> <?php echo $age; ?></h3>
            <h3 class="text-justify"> <spna class="font-bold pe-2">Bio: </spna> <?php echo $bio; ?></h3>
            <h3> <spna class="font-bold pe-1.5">Country: </spna> <?php echo $country; ?></h3>
        </div>
    </div>
</section>
</body>
</html>