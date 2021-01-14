<?php
    class Document
    {
        public $idDoc,$category,$author,$title,$price;

        function getId()
        {
            return $this->idDoc;
        }
        function getContent()
        {
            return array("idDoc" => $this->idDoc,
                        "Category" => $this->category, 
                        "Author" => $this->author,
                        "Title" => $this->title, 
                        "Price" => $this->price);
        }
    }
?>