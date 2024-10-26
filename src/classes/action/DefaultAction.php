<?php

namespace iutnc\deefy\action;

use iutnc\deefy\repository as repo;
use iutnc\deefy\render as render;
use iutnc\deefy\audio\lists as lists;

class DefaultAction extends Action
{

    public function execute(): string
    {
        return "<div>Bonjour !</div>";
    }
}