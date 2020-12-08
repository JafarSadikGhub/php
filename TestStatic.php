<?php
class Test
{
    var $va = 7;
    static $st_property = "I'm Static!!";
    function get_sp()
    {
        return self::$st_property;
    }
            
}
$temp = new Test;
echo Test::$st_property;
echo $temp->get_sp();s
//echo $this->$va;
?>



