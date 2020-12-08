<?php
class Dad
{
    function test()
    {
        echo "Class:Dad || I am your father. <br>";
    }
}
class Son extends Dad
{
    function test()
    {
        echo "Class: Son || I am your son. <br>";
    }
    function test2()
    {
        echo parent::test();
    }
}
$obj = new Son();
$obj->test();
$obj->test2();
?>
