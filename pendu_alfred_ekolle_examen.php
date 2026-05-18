<?php

// nombre max d'erreurs 
define('MAX_ERREURS', 8);


// gestion du chagement des mots et choix depuis le fichier mots.txt
$banque_des_mots = file("mots.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$code_secret = strtolower(trim($banque_des_mots[array_rand($banque_des_mots)]));


// initialisation des variables du jeu
$cache_mot = str_repeat("_", strlen($code_secret));
$nombre_erreurs = 0;
$lettres_jouees = [];


// affichage du titre du jeu à partir du fichier dessin.php
if (file_exists("dessin.php")) {
    include "dessin.php";
    echo $titre;
}

// boucle principale du jeu avec la boucle do...while
do {
    // on affiche le mot en cours
    echo "\n\nMot mystère :";
    for ($i = 0; $i < strlen($code_secret); $i++) {
    echo in_array($code_secret[$i], $lettres_jouees) ? $code_secret[$i] . " " : "_ ";
    }

    // on affiche le nombre d'erreurs et le dessin correspondant (ici nous avons inversé)
    echo "\nErreurs : $nombre_erreurs / " . MAX_ERREURS . "\n";
    // inversion de l'index ici : 0→case 8, 1→case 7, …, 8→case 0 
    echo dessinPendu(MAX_ERREURS - $nombre_erreurs);

    // on demande une lettre au joueur
    echo "\nProposez une lettre : ";
    $essai_actuel = strtolower(trim(fgets(STDIN)));

    // on verifie la saisie de l'utilisateur
    if (strlen($essai_actuel) !== 1 || !ctype_alpha($essai_actuel)) {
        echo "Entrez une seule lettre alphabetique. \n";
        continue;
    }

    // gestion du cas ou la lettre est deja joué
    if (in_array($essai_actuel, $lettres_jouees)) {
        echo " Vous avez deja proposé cette lettre.\n";
        continue;
    }

    // on ajoute la lettre joué par l'utilisateur
    $lettres_jouees[] = $essai_actuel;
    
    // si la lettre n'est pas dans le mot, on incrémente la variable compteur des erreurs
    if (strpos($code_secret, $essai_actuel) === false) {
        $nombre_erreurs++;
    }

    // on verifie si toute les lettres sont trouvées (la victoire)
    $mot_trouve = true;
    for ($j = 0; $j < strlen($code_secret); $j++) {
        if (!in_array($code_secret[$j], $lettres_jouees)) {
            $mot_trouve = false;
            break;
        }
    }
} while ($nombre_erreurs < MAX_ERREURS && !$mot_trouve);

// gestion de fin de partie
if ($mot_trouve) {
    echo "\n Gagné ! Bravo et Félicitaions ! tu as déviné le mot : $code_secret\n";
} else {
    echo "\n Perdu ! Dommage.... le mot était : $code_secret\n";
    // même inversion à la fin : à 8 erreurs, MAX_ERREURS - 8 = 0 → pendu complet 
    echo dessinPendu(MAX_ERREURS - $nombre_erreurs); // affiche le dernier dessin complet du pendu
}