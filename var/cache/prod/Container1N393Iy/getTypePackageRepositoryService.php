<?php

namespace Container1N393Iy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypePackageRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TypePackageRepository' shared autowired service.
     *
     * @return \App\Repository\TypePackageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TypePackageRepository'] = new \App\Repository\TypePackageRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
