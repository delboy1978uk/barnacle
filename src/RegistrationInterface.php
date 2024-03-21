<?php

namespace Barnacle;

use Barnacle\Container;

interface RegistrationInterface
{
    public function addToContainer(Container $c): void;
}
