<?php
class mydetail
{
    public $name;
    public $age;
    public $email;

}

$myObj=new mydetail();

$myObj->name="lakshmikanth";
$myObj->age=20;
$myObj->email="lakshmikanth@gmail.com";

$myJSON = json_encode($myObj);

echo $myJSON;
?>