<?php

namespace Container1N393Iy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPackageRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PackageRepository' shared autowired service.
     *
     * @return \App\Repository\PackageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PackageRepository'] = new \App\Repository\PackageRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
