<?php

namespace Admingenerator\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AdmingeneratorUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
