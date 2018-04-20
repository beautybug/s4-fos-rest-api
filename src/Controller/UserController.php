<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations;

class UserController extends BaseController
{
    /**
     * @Annotations\Get(path="/user")
     */
    public function getAction()
    {
        return new JsonResponse(
            'User'
        );
    }
}
