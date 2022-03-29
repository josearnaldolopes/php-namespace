<?php
namespace jose\sobre\namespaces;
class iseven
{
    public function iseven(int $value)
    {
        $value = $value % 2 == 0;
        return $value ? true : false;
    }
}