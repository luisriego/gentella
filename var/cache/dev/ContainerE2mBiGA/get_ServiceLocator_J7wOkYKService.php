<?php

namespace ContainerE2mBiGA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J7wOkYKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j7wOkYK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j7wOkYK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie' => ['privates', '.errored..service_locator.j7wOkYK.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.j7wOkYK": it needs an instance of "App\\Entity\\Categorie" but this type has been excluded in "config/services.yaml".'],
        ], [
            'categorie' => 'App\\Entity\\Categorie',
        ]);
    }
}
