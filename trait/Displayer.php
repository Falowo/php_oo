<?php


trait Displayer
{
    public function asParagraph(string $string, string $color = 'black')
    {
        echo '<p style="color: ' . $color . '">' . $string . '</p>';
    }

    public function asCapital(string $string)
    {
        return strtoupper($string);
    }
}
