<?php
namespace Mf\Slider\Entity;


class Slider
{

    protected $id = null;

    protected $category = null;

    protected $locale = null;

    protected $alt = null;

    protected $poz = null;

    protected $url = null;

    public function setId($id)
    {
        $this->id=$id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCategory($category)
    {
        $this->category=$category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setLocale($locale)
    {
        $this->locale=$locale;
    }

    public function getLocale()
    {
        return $this->locale;
    }

    public function setAlt($alt)
    {
        $this->alt=$alt;
    }

    public function getAlt()
    {
        return $this->alt;
    }

    public function setPoz($poz)
    {
        $this->poz=$poz;
    }

    public function getPoz()
    {
        return $this->poz;
    }

    public function setUrl($url)
    {
        $this->url=$url;
    }

    public function getUrl()
    {
        return $this->url;
    }


}



