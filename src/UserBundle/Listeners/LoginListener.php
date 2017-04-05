<?php

namespace UserBundle\Listeners;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

/**
 * Created by PhpStorm.
 * User: hui
 * Date: 03.04.2017
 * Time: 19:08
 */
class LoginListener implements AuthenticationSuccessHandlerInterface
{
    private $container;
    private $security;
    private $router;

    /**
     * LoginListener constructor.
     * @param Container $container
     * @param Router $router
     * @internal param ContainerInterface $container
     */
    function __construct(Container $container, Router $router)
    {
        $this->container = $container;
        $this->security = $this->container->get('security.authorization_checker');
        $this->router = $router;
    }


    /**
     * This is called when an interactive authentication attempt succeeds. This
     * is called by authentication listeners inheriting from
     * AbstractAuthenticationListener.
     *
     * @param Request $request
     * @param TokenInterface $token
     *
     * @return Response never null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        if ($this->security->isGranted("ROLE_ADMIN") || $this->security->isGranted("ROLE_ADMIN")) {
            return new RedirectResponse($this->router->generate('admin_homepage'));
        }
        return new RedirectResponse($this->router->generate('homepage'));
    }
}