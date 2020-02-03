<?php


namespace App\Services;


class Helpers
{
    public function view(string $name):string {
        return sprintf('%s.html.twig', $name);
    }
}