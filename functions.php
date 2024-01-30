<?php
$hide = false;
$playerChoice1 = "";
$playerChoice2 = "";

echo "<div class='container'>";
if (isset($_POST["player1Choice"])) {
    $playerChoice1 = $_POST["player1"];
    $hide = true;
    echo "<p class='player1-msg'>Speler 1 heeft een keuze gemaakt</p>";
}

if (isset($_POST["player2Choice"])) {
    $playerChoice1 = $_POST["player1"];
    $playerChoice2 = $_POST["player2"];
}

if ($playerChoice1 !== "" && $playerChoice2  !== "") {
    echo "<p class='choice-msg'>Speler 1 heeft " . $playerChoice1 . " gekozen</p>";
    echo "<p class='choice-msg'>Speler 2 heeft " . $playerChoice2 . " gekozen</p>";

    if ($playerChoice1 === $playerChoice2) {
        echo "<p class='draw-msg'>Het is gelijkspel!</p>";
    } elseif (
        ($playerChoice1 === 'steen' && $playerChoice2 === 'schaar') ||
        ($playerChoice1 === 'papier' && $playerChoice2 === 'steen') ||
        ($playerChoice1 === 'schaar' && $playerChoice2 === 'papier')
    ) {
        echo "<p class='player-win-msg'>Speler 1 wint!</p>";
    } else {
        echo "<p class='player-win-msg'>Speler 2 wint!</p>";
    }
    echo "</div>";
}
