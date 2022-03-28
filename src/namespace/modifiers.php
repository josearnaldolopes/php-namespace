<?php
namespace jose\sobre\namespace;
class modifiers
{
    protected $protegido;
    protected function modifiers($valor)
    {
        return 'De um protegido: '.$this->protegido = $valor;
    }
    public function getModifiers($valor)
    {
        return $this->modifiers($valor);
    }
}