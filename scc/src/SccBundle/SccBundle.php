<?php

namespace SccBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SccBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
