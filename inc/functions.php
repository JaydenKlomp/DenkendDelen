<?php

$choices = array();

function displayTexts(){
    global $opts1;
    global $opts2;

    global $resp1;
    global $resp2;

    global $choices;

    echo'
        <div class="their-text">
            <span>Hey, alles goed daar op vakantie? Ik mis je wel echt heel erg😉. Normaal geniet ik elke week van jou mooie uitzicht en dat moet ik nu voor 2 weken missen.</span>
        </div>
        <div class="their-text">
            <span>Wil je me anders een foto sturen, dan voelt het net alsof we toch samen zijn.</span>
        </div>
        <div class="breakDiv">.</div>
    ';


    // $sequence = array();
    // $i = 1;
    // foreach ($choices as $choice){
    //     if($choice == "1"){
    //         scene_You($choice, $opts1);
    //         scene_Them($choice, $resp1);
    //     }elseif($choice == "2"){
    //         scene_You($choice, $opts2, $i-1);
    //         scene_Them($choice, $resp2, $i-1);
    //     }elseif($choice == "3"){
    //         scene_You($choice, $opts2, $i-1);
    //         scene_Them($choice, $resp2, $i-1);
    //     }

    //     array_push($sequence, $choice);
    //     $i+=1;
    // }
}

function defineChoicesArray(){
    global $choices;

    if (isset($_GET['choiceOne'])){
        array_push($choices, $_GET['choiceOne']);

        if (isset($_GET['choiceTwo'])){
            array_push($choices, $_GET['choiceTwo']);

            if (isset($_GET['choiceThree'])){
                array_push($choices, $_GET['choiceThree']);
                
                if (isset($_GET['choiceFour'])){
                    array_push($choices, $_GET['choiceFour']);
                }
            }
        }
    }

}

$opts1 = array("",
"<img src='media/images/bh.jpg'><img>  Hey, tuurlijk stuur ik jou een foto. Ben net wakker dus zit nog lekker warm in me badjas.",
"<img src='media/images/bh.jpg'><img> Tuurlijk stuur ik een foto!"
);
 
$resp1 = array("",
"Mooie foto, dat kan toch ook wel met wat minder kleding aan?🍆🍑",
"Mooie foto, dat kan toch ook wel met wat minder kleding aan?🍆🍑"
);

$opts2 = array("",
    array("", "<img src='media/images/nobh.jpg'><img> Ja tuurlijk schat, als jij er dan ook een stuurt🥵❤️", "Ja tuurlijk, alleen komt dat nu effe niet goed uit."),
    array("",  "nee sorry...", "Ja tuurlijk, alleen komt dat nu effe niet goed uit.")
);

$resp2 = array("",
    array("", "Jij bent echt mooi, wacht ik stuur zo een foto van mezelf!", "Ow? Waarom komt dat nu niet goed uit? Je weet dat je mij kan vertrouwen toch?"),
    array("", "want??", "Ow? Waarom komt dat nu niet goed uit? Je weet dat je mij kan vertrouwen toch?")
);

$opts3 = array("",
    array("", array("", "hihi isgoed ik wacht wel", "wel opschieten he"), array("", "Tuurlijk vertrouw ik jou schatje, ik ben alleen net van huis dus ik maak de foto een andere keer voor je.", "uhm... Ik weet niet of ik daar klaar voor ben. Momenteel voel ik  me daar niet prettig bij.")),
    array("", array("", "daar voel me ik me niet goed bij..", "flikker toch op joh!!"), array("", "Tuurlijk vertrouw ik jou schatje, ik ben alleen net van huis dus ik maak de foto een andere keer voor je.", "uhm... Ik weet niet of ik daar klaar voor ben. Momenteel voel ik  me daar niet prettig bij."))
);

$resp3 = array("",
    array("", array("", "<img src='media/images/sixpack.jpg'><img>", "wacht!!"), array("", "ow, raar dat jij mij niet vertrouwd, maar goed dan weten we dat ook weer hé.", "Dat snap ik volledig schatje, goed dat je het aan geeft! Tot over 2 weken😘")),
    array("", array("", "oh het spijt me", "hjb je bent gewoon een hoer"), array("", "dat zeg je altijd! als je niet wil zeg dat gewoon.", "oh oke dat begrijp ik wel.."))
);


function displayButtons(){
    global $opts1;
    global $opts2;
    global $opts3;
    
    if(!isset($_GET['choiceOne'])){?>

            <button onclick="location.href='?choiceOne=1'"><?php echo $opts1[1] ?><img class="sendImg" src="media/images/arrow-up.png" alt=""></button>
            <button onclick="location.href='?choiceOne=2'"><?php echo $opts1[2] ?><img class="sendImg" src="media/images/arrow-up.png" alt=""></button>
    <?php
    }

    if(isset($_GET['choiceOne']) && !isset($_GET['choiceTwo'])){
        $choiceOne = $_GET['choiceOne'];?>

            <button onclick="location.href='?choiceOne=<?php echo $choiceOne ?>&choiceTwo=1'"><?php echo $opts2[$choiceOne][1] ?><img class="sendImg" src="media/images/arrow-up.png" alt=""></button>
            <button onclick="location.href='?choiceOne=<?php echo $choiceOne ?>&choiceTwo=2'"><?php echo $opts2[$choiceOne][2] ?><img class="sendImg" src="media/images/arrow-up.png" alt=""></button>
    <?php
    }
    if(isset($_GET['choiceTwo'])){
        $choiceOne = $_GET['choiceOne'];
        $choiceTwo = $_GET['choiceTwo'];?>

            <button onclick="location.href='?choiceOne=<?php echo $choiceOne ?>&choiceTwo=<?php echo $choiceTwo ?>&choiceThree=1'"><?php echo $opts3[$choiceOne][$choiceTwo][1] ?><img class="sendImg" src="media/images/arrow-up.png" alt=""></button>
            <button onclick="location.href='?choiceOne=<?php echo $choiceOne ?>&choiceTwo=<?php echo $choiceTwo ?>&choiceThree=2'"><?php echo $opts3[$choiceOne][$choiceTwo][2] ?><img class="sendImg" src="media/images/arrow-up.png" alt=""></button>
        <?php
    }
}




function Scene_You( array $optsScene, int $firstIndex, $secondIndex = null, int $thirdIndex = null){

    if ($secondIndex == null && $thirdIndex == null){
        echo'
            <div class="breakDiv">.</div>
            <div class="textDisplay-' . $firstIndex . ' your-text">
                <span>' . ($optsScene[$firstIndex]) . '</span>
            </div>
        '; 
    }
    else if($thirdIndex == null){
        echo'
            <div class="breakDiv">.</div>
            <div class="textDisplay-' . $firstIndex . ' your-text">
                <span>' . $optsScene[$firstIndex][$secondIndex] . '</span>
            </div>
        '; 
    }
    else{
        echo'
        <div class="breakDiv">.</div>
        <div class="textDisplay-' . $firstIndex . ' your-text">
            <span>' . $optsScene[$firstIndex][$secondIndex][$thirdIndex] . '</span>
        </div>
    '; 
    }
}

function Scene_Them(array $respScene, int $firstIndex,  int $secondIndex = null, int $thirdIndex = null){

    if ($secondIndex == null && $thirdIndex == null){
        echo'
            <div class="breakDiv">.</div>
            <div class="textDisplay-' . $firstIndex . ' their-text">
                <span>' .   ($respScene[$firstIndex]) . '</span>
            </div>
        '; 
    }
    else if($thirdIndex == null){
        echo'
            <div class="breakDiv">.</div>
            <div class="textDisplay-' . $firstIndex . ' their-text">
                <span>' . $respScene[$firstIndex][$secondIndex] . '</span>
            </div>
        '; 
    }
    else{
        echo'
            <div class="breakDiv">.</div>
            <div class="textDisplay-' . $firstIndex . ' their-text">
                <span>' . $respScene[$firstIndex][$secondIndex][$thirdIndex] . '</span>
            </div>
        '; 
    }
}

function textEnd(){
    if(isset($_GET['choiceThree'])){
        echo'
            <div onclick="location.href=\'Einde_Goed.html\'" class="textDisplayOne their-text endText">
                <span>Klik nu verder voor je evaluatie</span>
            </div>
        '; 
    }
}
?>