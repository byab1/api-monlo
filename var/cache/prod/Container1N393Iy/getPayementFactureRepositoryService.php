<?php

namespace Container1N393Iy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayementFactureRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PayementFactureRepository' shared autowired service.
     *
     * @return \App\Repository\PayementFactureRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PayementFactureRepository'] = new \App\Repository\PayementFactureRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
