<?php
require_once ('Mensch.php');
require_once ('Men.php');
class Woman extends Mensch
{
    protected string $sex = 'w';
    public function give_birth():string
    {
        return 'Ich bekomme ein kind';
    }


}

$woman = new Woman();
$woman->height = 180;
$men = new Men();
var_dump($woman->say_hallo());
var_dump($woman->height);
var_dump(($woman->getSex()));
echo '<br>';

var_dump(($men->getSex()));
