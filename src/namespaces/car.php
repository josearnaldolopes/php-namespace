<?php
namespace jose\sobre\namespaces;
class car extends abstrato
{
    public function intro() : string
    {
        return "Choose German! $this->name!";
    }
}