<?php
class Books{
    private string $title;
    private string $author;
    private float $price;
    private int $amount;

    public function __construct(string $title, string $author, float $price, int $amount){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->amount = $amount;
    }

    #set

    public function setTitle(string $title):void{
        $this->title = $title;
    }
    public function setAuthor(string $author):void{
        $this->author = $author;
    }
    public function setPrice(float $price):void{
        $this->price = $price;
    }
    public function setAmount(int $amount):void{
        $this->amount = $amount;
    }

    #get

    public function getTitle():string{
        return $this->title;
    }
    public function getAuthor():string{
        return $this->author;
    }
    public function getPrice():float{
        return $this->price;
    }
    public function getAmount():int{
        return $this->amount;
    }

}