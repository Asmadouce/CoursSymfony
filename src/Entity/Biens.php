<?php
//https://symfony.com/doc/current/doctrine.html

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BiensRepository")
 */
class Biens
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;
    /**
     * @ORM\Column(type="integer")
     */
    private $surface;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;
    /**
     * @ORM\Column(type="integer")
     */
    private $price;

//-----    get(ACCESSOR) ID-------------------------------------------------------------------------------------
    public function getId(): ?int
    {
        return $this->id;
    }
//-----    get(ACCESSOR) / set(MUTATOR) TITLE-------------------------------------------------------------------------------------
    public function getTitle() {
        return $this ->title;
    }
    public function setTitle($title)
    {  
        $this -> title = $title;
    }
//-----    get(ACCESSOR) / set(MUTATOR) SURFACE-----------------------------------------------------------------------------------
    public function getSurface() {
        return $this ->surface;
    }
    public function setSurface($surface)
    {  
        $this -> surface = $surface;
    }
//-----    get(ACCESSOR) / set(MUTATOR) PICTURE------------------------------------------------------------------------------------
    public function getPicture() {
        return $this ->picture;
    }
    public function setPicture($picture)
    {  
        $this -> picture = $picture;
    }
//-----    get(ACCESSOR) / set(MUTATOR) PRICE----------------------------------------------------------------------------------------
    public function getPrice() {
        return $this ->price;
    }
    public function setPrice($price)
    {  
        $this -> price = $price;
    }


}
