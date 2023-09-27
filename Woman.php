<?php
require_once ('Mensch.php');
require_once ('Men.php');
require_once ('Child.php');

class Woman extends Mensch
{
    protected string $sex = 'w';
    public function give_birth():Child
    {
        return new Child();
    }

    public function say_hallo():string
    {
        return 'Hallo ich bin die Frau ...';
    }


}

$woman = new Woman();
$woman->height = 180;
$men = new Men();
$child = new Child();
var_dump(($woman->say_hallo()));
echo '<br>';
var_dump(($men->say_hallo()));
echo '<br>';
var_dump(($child->say_hallo()));