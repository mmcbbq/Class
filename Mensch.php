<?php

abstract class Mensch
{
    public int $height;
    private string $haircolor;

    protected string $eyecolor;
    public bool $alive;
    public array $clothing;
    protected string $sex;

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }
    public function get_undressed(string $clothes): array
    {
        return $this->clothing;
    }

    public function change_hair_color(string $color): void
    {

    }
    public function say_hallo(): string
    {
        return 'Hallo meine name ist';
    }
}

