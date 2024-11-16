<?php

namespace Barnacle;

use Bone\Contracts\Container\EntityRegistrationInterface as EntityRegistration;

/** @deprecated use boneframework/contracts interface instead */
interface EntityRegistrationInterface extends EntityRegistration
{
    public function getEntityPath(): string;
}
