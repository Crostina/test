<?php
include "../../Controller/SCC.php";

$c = new SCC();
$coachingSessions = $c->listCoachingSessions();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Coaching Sessions</title>
    <style>
        .box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <center>
        <h1>List of Coaching Sessions</h1>

    </center>

    <?php foreach ($coachingSessions as $session): ?>
        <div class="box">
            <p><strong>Id SC: </strong><?= $session['idSC']; ?></p>
            <p><strong>Duree: </strong><?= $session['duree']; ?></p>
            <p><strong>Acces: </strong><?= $session['acces']; ?></p>
            <p><strong>Sujet: </strong><?= $session['sujet']; ?></p>
            <p><strong>Code: </strong><?= $session['code']; ?></p>

        </div>
    <?php endforeach; ?>
</body>
</html>