<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */

class Article
{
    public $title;
    protected $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function getSummary($maxLength)
    {
        if (strlen($this->content) > $maxLength) {
            return substr($this->content, 0, $maxLength) . '...';
        }
        return $this->content;
    }
}

$article = new Article('Titre de l\'article', 'Mon super article de fou');
echo $article->title . '<br>';
echo $article->getSummary(10);