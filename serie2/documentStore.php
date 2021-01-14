<?php
    class DocumentStore
    {
        public $lesLivres = array();

        function addDocument(Document $livre)
        {
            array_push($this->lesLivres,$livre);
        }
        function getDocuments()
        {
            return $this->lesLivres;
        }
    }
    function tableau($array)
    {
        $idDoc = $array['idDoc'];
        $category = $array['Category'];
        $author = $array['Author'];
        $title = $array['Title'];
        $price = $array['Price'];
        return ("
        <p>Document n°$idDoc</p>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Categorie : $category</li>
            <li class=\"list-group-item\">Auteur : $author</li>
            <li class=\"list-group-item\">Titre : $title</li>
            <li class=\"list-group-item\">Prix : $price €</li>
        </ul>");
    }
?>