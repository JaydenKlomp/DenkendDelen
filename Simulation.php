<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="https://www.sterkhuis.nl/wp-content/uploads/2018/01/Logo-Sterk-Huis.svg">
    <title>DenkendDelen - Hackathon 2023</title>
</head>
<body class="indexBody">
    <?php include('inc/functions.php') ?>
    <div class="mainContainer">
        <div class="phoneContainer">
            <span class="camNotch"></span>
            <span class="camNotch-2"></span>
            <div class="phone">
                <div class="phone-ui">
                    <span class="btnBack"></span>
                    <div class="profilePic"></div>
                    <span class="profileName">Persoon 1</span>
                </div>
                <div class="phone-content">
                    <div class="dateDiv">
                        <span><p>Text Message</p></span>
                        <span><p>Today</p><p> 22:56</p></span>
                    </div>
                    <?php
                    // defineChoicesArray();
                    displayTexts();
                    
                    if (isset($_GET['choiceOne'])){
                        $choice1 = $_GET['choiceOne'];

                        scene_You($opts1, $choice1);
                        scene_Them($resp1, $choice1);
                    }
                    if (isset($_GET['choiceTwo'])){
                        $choice1 = $_GET['choiceOne'];
                        $choice2 = $_GET['choiceTwo'];

                        scene_You($opts2, $choice1, $choice2);
                        scene_Them($resp2, $choice1, $choice2);
                    }
                    if (isset($_GET['choiceThree'])){
                        $choice1 = $_GET['choiceOne'];
                        $choice2 = $_GET['choiceTwo'];
                        $choice3 = $_GET['choiceThree'];

                        scene_You($opts3, $choice1, $choice2, $choice3);
                        scene_Them($resp3, $choice1, $choice2, $choice3);
                    }
                    textEnd();
                    ?>
                </div>
                <div class="phone-ui-2">
                    <div class="messageBox">Text Message</div>
                    <div class="btnSend"><img src="media/images/arrow-up.png" alt=""></div>
                </div>
                
            </div>
            <div class="btnOptions">
                <?php displayButtons(); ?>
                <button class="btnHome" onclick="location.href='index.html'">Reset</button>
            </div>
        </div>
    </div>
    <script rel="javascript" src="js/main.js"></script>
    <script rel="javascript" src="js/jquery.js"></script>
    <script>var messageBody = document.querySelector('.phone-content');
    messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;</script>
</body>
</html>