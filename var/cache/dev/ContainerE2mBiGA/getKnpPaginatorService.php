<?php

namespace ContainerE2mBiGA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpPaginatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['knp_paginator'] = $container->createProxy('PaginatorProxyF4d76bf', fn () => \PaginatorProxyF4d76bf::createLazyProxy(fn () => self::do($container, false)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

        $instance = new \Knp\Component\Pager\Paginator(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));

        $instance->setDefaultPaginatorOptions(['pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true, 'pageOutOfRange' => 'ignore', 'defaultLimit' => 10]);

        return $instance;
    }
}
