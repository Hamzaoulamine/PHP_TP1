<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche étudiant</title>
</head>
<body>
    <?php
    $nom = "El Amrani";
    $prenom = "Youssef";
    $filiere = "Génie Informatique";
    $annee = "2ème année";
    $age = 21;
    ?>

    <h1>Fiche étudiant</h1>

    <ul>
        <li>Nom : <?php echo $nom; ?></li>
        <li>Prénom : <?php echo $prenom; ?></li>
        <li>Filière : <?php echo $filiere; ?></li>
        <li>Année : <?php echo $annee; ?></li>
    </ul>

    <p><?php echo "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis étudiant en " . $annee . " " . $filiere . "."; ?></p>
</body>
</html>
