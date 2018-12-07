<?php 

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Création d'une vidéo "Matrix" (1.5h)
$matrix = new Video('Matrix', 1.5*3600);
// Création d'une photo "Joconde"
$joconde = new Photo('Joconde');
// Création d'une musique "Stairway to heaven" (8 min)
$stairway = new Music('Stairway to heaven', 8*60);
// Création d'une playlist "P1"
$p1 = new Playlist('P1');
// Ajout de "Matrix" à "P1"
$p1->add($matrix);
// Ajout de "Joconde" à "P1"
$p1->add($joconde);
// Création d'une playlist "P2"
$p2 = new Playlist('P2');
// Ajout de "Stairway to heaven" à "P2"
$p2->add($stairway);
// Ajout de "P1" à "P2"
$p2->add($p1);
// Affichage de "Lecture de Matrix (durée: 5400s)"
//$matrix->play();
// Affichage de P2
echo $p2;
