<?php

namespace Remmy\MainBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RemmyMainBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
