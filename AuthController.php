<?php

namespace Aecf\Esmile\Gui\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/api/auth")
 */
class AuthController extends Controller
{
    /**
     * @return Response
     *
     * @Route("/user", name="auth_user", methods="GET")
     */
    public function userAction()
    {
        return new Response(
            $this->get('serializer')->serialize($this->getUser(), 'json'),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }
}
