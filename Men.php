<?php
require_once ('Mensch.php');
class Men extends Mensch
{
    protected string $sex = 'm';

    public function im_stehen_pinkeln():string
    {
        return 'Peeeee';
    }


}