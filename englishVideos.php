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
    <link rel="stylesheet" href="css/videoSet.css">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css"/>

    <title>Videos</title>
</head>
<body>
    <header>
        <!--Full navigation bar-->
        <?php include 'navigation.php'?>
    </header>
    <!--  emberded video-->
    <div class="vplayer" id="hidePlayer">
        <iframe width="90%" height="90%" name="player"
                src="https://www.youtube.com/embed/G-IS-scTJDo" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
    </div>
    <div class="container">
        <div id="preSchool">
            <h1>Pre School-English</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/TzVZweQVato" target="player" onclick="openPlayer()">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>1:26</p>
                            </div>
                        </a>
                    </div>
                    <h3>Shapes</h3>
                </div>
                <div class="card">
                    <div class="card-image" >
                        <a href="https://www.youtube.com/embed/nvgFQ2BQPJ0" target="player" onclick="openPlayer()"> 
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>1:23</p>
                            </div>
                        </a>
                    </div>
                    <h3>Alphabet</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/LgmPVi9Wngc" target="player" onclick="openPlayer()">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p> 2:11</p>
                            </div>
                        </a>
                    </div>
                    <h3>Colours</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
        <div id="grade1">
            <h1>Grade 1-English</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
        <div id="grade2">
            <h1>Grade 2-English</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
        <div id="grade3">
            <h1>Grade 3-English</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
    </div>
    <footer class="mainFooter">
        <div class="baseline">Privacy Policy - kids web © 2022 - All Rights Reserved</div>
    </footer>
    
    <script src="js/script.js" ></script>
</body>
</html>