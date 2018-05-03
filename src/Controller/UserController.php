<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations;
use Psr\Log\LoggerInterface;
use App\Service\MessageGenerator;

class UserController extends BaseController
{
    /**
     * @Annotations\Get(path="/user")
     */
    public function getAction(MessageGenerator $messageGenerator)
    {
        $message = $messageGenerator->getHappyMessage();
        $user = $this->container->get('user.userService')->getUser();
        return new JsonResponse(
            $user
        );
    }
}
