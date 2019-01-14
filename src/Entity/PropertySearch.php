<?php

namespace App\Entity;



class PropertySearch
{
    /**
     * @var int|null
     */
    private $maxPrice;
    
    /**
     * @var int|null
     */
    private $minSurface;

 

    /**
     * @return  int|null
     */ 
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @param  int|null  $maxPrice
     * @return  self
     */ 
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return  int|null
     */ 
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     * @param  int|null  $minSurface
     *
     * @return  self
     */ 
    public function setMinSurface(int $minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;

        return $this;
    }
}
