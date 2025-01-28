<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */

class Movie
{
    public $title;
    public $genre;
    private $ageRestriction;

    public function __construct($title, $genre, $ageRestriction)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    public function canWatch($viewerAge): bool
    {
        return $viewerAge >= $this->ageRestriction;
    }
}

$movie = new Movie('Le parrain', 'Mafia', 18);
echo "Titre film : " . $movie->title . "<br>";
echo "Genre du film : " . $movie->genre . "<br><br>";
echo $movie->canWatch(20) ? 'Peut le voir' : 'Trop jeune';