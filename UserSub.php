<?php
class User
{
    public $name, $password;
    function saveUser()
    {
        echo "Save user code goes here";
    }
    
}
class Subscriber extends User
{
    public $phone, $email;
    function display()
    {
        echo "Name: ". $this->name . "<br>";
        echo "Password: ". $this->password . "<br>";
        echo "Phone: ". $this->phone . "<br>";
        echo "Email: ". $this->email . "<br>";
    }
}
$obj = new Subscriber;
$obj->name = 'Jafar';
$obj->password = "qwerty";
$obj->phone = "01760379xx7";
$obj->email = "email@email.com";
$obj->display();
?>
