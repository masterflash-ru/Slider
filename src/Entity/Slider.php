<?php
namespace Mf\Slider\Entity;


class Slider
{

    protected $id = null;

    protected $category = null;

    protected $name = null;

    protected $locale = null;

    protected $alt = null;

    protected $poz = null;

    protected $url = null;

    protected $link = null;

    protected $caption1 = null;

    protected $caption2 = null;

    protected $caption3 = null;

    protected $title = null;

    protected $keywords = null;

    protected $description = null;

    protected $info = null;

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

    public function setName($name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        return $this->name;
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

    public function setLink($link)
    {
        $this->link=$link;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setCaption1($caption1)
    {
        $this->caption1=$caption1;
    }

    public function getCaption1()
    {
        return $this->caption1;
    }

    public function setCaption2($caption2)
    {
        $this->caption2=$caption2;
    }

    public function getCaption2()
    {
        return $this->caption2;
    }

    public function setCaption3($caption3)
    {
        $this->caption3=$caption3;
    }

    public function getCaption3()
    {
        return $this->caption3;
    }

    public function setTitle($title)
    {
        $this->title=$title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setKeywords($keywords)
    {
        $this->keywords=$keywords;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    public function setDescription($description)
    {
        $this->description=$description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setInfo($info)
    {
        $this->info=$info;
    }

    public function getInfo()
    {
        return $this->info;
    }


}



