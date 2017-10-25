<?php

class BookEntity
{
    public $id;
    public $title;
    public $author;
    public $price;
    public $category;
    public $year;
    public $image;
    public $description;
    
    function __construct($id, $title, $author, $price, $category, $year, $image, $description) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->category = $category;
        $this->year = $year;
        $this->image = $image;
        $this->description = $description;
    }

}

?>
