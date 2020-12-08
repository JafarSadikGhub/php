<?php
class WildCat
{
    public $fur;
    function __construct() 
    {
        this->fur = "TRUE";
    }
}
class Tiger extends WildCat
{
    public $stripes;
    
    function __construct() 
    {
        parent::__construct();
        this->stripes = "TRUE";
    }
}
$ob = new Tiger();
echo "Tigers have...<br>";
echo "Fur: " . $ob->fur . "<br>";
echo "Stripes: " . $ob->stripes . "<br>";
?>