<?php

declare(strict_types=1);

namespace App\Handler;

use App\Entity\Schedule;
use Doctrine\ORM\EntityManager;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class ScheduleHandler implements RequestHandlerInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    /**
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\TransactionRequiredException
     */
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {

        $method = $request->getMethod();

         switch (strtolower($method)) {
            case 'get':
                $parameters = $request->getQueryParams();
//                var_dump($parameters);
//exit();
                /** @var Schedule $val */
                $parcel = $this->entityManager->find('\App\Entity\Schedule', 1);
                return new JsonResponse(['parcel1' => $parcel->getDate()]);
                break;
            case 'post':
                $parameters = $request->getParsedBody();

                break;
//            case 'put':
//
//                break;
//            case 'delete':

                break;
            default:
                /** @var Schedule $val */
                $parcel = $this->entityManager->find('\App\Entity\Schedule', 1);


                return new JsonResponse(['parcel1' => $parcel->getName()]);
        }

    }
}
