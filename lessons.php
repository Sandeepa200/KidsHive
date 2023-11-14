<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">

    <!--main css file-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lessons.css">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css"/>

    <title>Lessons</title>
</head>
<body>
    <header>
        <!--Full navigation bar-->
        <?php include 'navigation.php'?>
    </header>

    <div class="container">
        <h1>select what you want to learn</h1>
        <!--Subject navigation-->
        <div class="cardpack">
            <div class="card-1">
                <h3>Maths<a href="mathsVideos"></h3>
                <ul>
                    <li><a href="mathsVideos.php#preSchool">Pre School</a></li>
                    <li><a href="mathsVideos.php#grade1">Grade 1</a></li>
                    <li><a href="mathsVideos.php#grade2">Grade 2</a></li>
                    <li><a href="mathsVideos.php#grade3">Grade 3</a></li>
                </ul>
            </div>
            <div class="card-2">
                <h3>English</h3>
                <ul>
                    <li><a href="englishVideos.php#preSchool">Pre School</a></li>
                    <li><a href="englishVideos.php#grade1">Grade 1</a></li>
                    <li><a href="englishVideos.php#grade2">Grade 2</a></li>
                    <li><a href="englishVideos.php#grade3">Grade 3</a></li>
                </ul>                      
            </div>
            <div class="card-3">
                <h3>Science</h3>
                <ul>
                    <li><a href="scienceVideos.php#preSchool">Pre School</a></li>
                    <li><a href="scienceVideos.php#grade1">Grade 1</a></li>
                    <li><a href="scienceVideos.php#grade2">Grade 2</a></li>
                    <li><a href="scienceVideos.php#grade2">Grade 3</a></li>
                </ul>             
            </div>
        </div>
    </div>
    <footer class="mainFooter">
        <div class="baseline">Privacy Policy - kids web © 2022 - All Rights Reserved</div>
    </footer>
    <script src="script.js" ></script>
</body>
</html>