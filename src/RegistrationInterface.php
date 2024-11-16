<?php

namespace Barnacle;

use Bone\Contracts\Container\ContainerInterface;
use Bone\Contracts\Container\RegistrationInterface as Registration;

/** @deprecated use boneframework/contracts interface instead */
interface RegistrationInterface extends Registration
{
    public function addToContainer(ContainerInterface $c): void;
}
