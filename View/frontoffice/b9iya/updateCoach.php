<?php

include '../../Controller/CoachC.php';
include '../../Model/Coach.php';

// create coach
$coach = null;
// create an instance of the controller
$coachC = new CoachC();

if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["sexe"]) &&
    isset($_POST["specialite"]) &&
    isset($_POST["diplome"]) &&
    isset($_POST["motdepasse"])
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["sexe"]) &&
        !empty($_POST["specialite"]) &&
        !empty($_POST["diplome"]) &&
        !empty($_POST["motdepasse"])
    ) {
        $coach = new Coach(
            null,
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['sexe'],
            $_POST['specialite'],
            $_POST['diplome'],
            $_POST['motdepasse']
        );
        var_dump($coach);

        $coachC->updateCoach($coach, $_GET['id']);

        header('Location:listCoach.php');
    }
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach Display</title>
</head>

<body>
    <button><a href="listCoach.php">Back to list</a></button>
    <hr>

    <?php
    if (isset($_GET['id'])) {
        $oldCoach = $coachC->showCoach($_GET['id']);
    ?>

        <form action="" method="POST">
            <table>
                <tr>
                    <td><label for="id">id :</label></td>
                    <td>
                        <input type="text" id="id" name="id" value="<?php echo $_GET['id'] ?>" readonly />
                    </td>
                </tr>
                <tr>
                    <td><label for="nom">Nom :</label></td>
                    <td>
                        <input type="text" id="nom" name="nom" value="<?php echo $oldCoach['nom'] ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="prenom">Prénom :</label></td>
                    <td>
                        <input type="text" id="prenom" name="prenom" value="<?php echo $oldCoach['prenom'] ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="sexe">Sexe :</label></td>
                    <td>
                        <input type="text" id="sexe" name="sexe" value="<?php echo $oldCoach['sexe'] ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="specialite">Spécialité :</label></td>
                    <td>
                        <input type="text" id="specialite" name="specialite" value="<?php echo $oldCoach['specialite'] ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="diplome">Diplôme :</label></td>
                    <td>
                        <input type="text" id="diplome" name="diplome" value="<?php echo $oldCoach['diplome'] ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="motdepasse">Mot de passe :</label></td>
                    <td>
                        <input type="password" id="motdepasse" name="motdepasse" value="<?php echo $oldCoach['motdepasse'] ?>" />
                    </td>
                </tr>

                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>
