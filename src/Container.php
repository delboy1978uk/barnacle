<?php

declare(strict_types=1);

namespace Barnacle;

use Barnacle\Exception\ContainerException;
use Barnacle\Exception\NotFoundException;
use Bone\Contracts\Container\ContainerInterface;
use Exception;
use Pimple\Container as Pimple;
use Pimple\Exception\UnknownIdentifierException;

class Container extends Pimple implements ContainerInterface
{
    /**
     * @throws ContainerException
     * @throws NotFoundException
     */
    public function get(string $id): mixed
    {
        try {
            return $this->offsetGet($id);
        } catch (UnknownIdentifierException $e) {
            throw new NotFoundException("Key $id not found.");
        } catch (Exception $e) {
            throw new ContainerException("Problem fetching key $id.\n" . $e->getMessage(), $e->getCode());
        }
    }

    public function has(string $id): bool
    {
        return $this->offsetExists($id);
    }
}
