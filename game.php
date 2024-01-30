<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php require_once 'functions.php' ?>
    <div class="main-container">
        <h1>Steen papier schaar</h1>

        <div class="form">
            <?php if (!$hide) { ?>
                <form action="" method="post">
                    <h2>Speler 1:</h2>
                    <select name="player1" id="player1">
                        <option value="steen">Steen</option>
                        <option value="papier">Papier</option>
                        <option value="schaar">Schaar</option>
                    </select>
                    <input type="submit" name="player1Choice" value="Select">
                </form>
            <?php } ?>

            <?php if ($hide) { ?>
                <form action="" method="post">
                    <h2>Speler 2:</h2>
                    <input type="hidden" name="player1" value="<?= $playerChoice1; ?>">
                    <select name="player2" id="player2">
                        <option value="steen">Steen</option>
                        <option value="papier">Papier</option>
                        <option value="schaar">Schaar</option>
                    </select>
                    <input type="submit" name="player2Choice" value="Select">
                </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>