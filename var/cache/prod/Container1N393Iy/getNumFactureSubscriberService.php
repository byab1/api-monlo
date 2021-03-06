<?php

namespace Container1N393Iy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNumFactureSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Events\NumFactureSubscriber' shared autowired service.
     *
     * @return \App\Events\NumFactureSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Events\\NumFactureSubscriber'] = new \App\Events\NumFactureSubscriber(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->privates['App\\Repository\\FactureRepository'] ?? $container->load('getFactureRepositoryService')));
    }
}
