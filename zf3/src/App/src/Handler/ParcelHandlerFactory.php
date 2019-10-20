<?php

declare(strict_types=1);

namespace App\Handler;

use Doctrine\ORM\EntityManager;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ParcelHandlerFactory
{

    public function __invoke(ContainerInterface $container) : RequestHandlerInterface
    {

        /** @var EntityManager $entityManager */
        $entityManager = $container->get('doctrine.entity_manager.orm_default');


        /** @var $entityManager $entityManager */
        return new ParcelHandler($entityManager);
    }
}
