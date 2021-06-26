<?php

namespace Container1N393Iy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_RegistrationService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.firewall.map.context.registration' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.firewall.map.context.registration'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.authentication.listener.anonymous.registration'] ?? $container->load('getSecurity_Authentication_Listener_Anonymous_RegistrationService'));
            yield 2 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 3), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), 'registration', NULL, NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('registration', 'security.user_checker', '.security.request_matcher.1dWARN2', true, true, 'security.user.provider.concrete.app_user_provider', NULL, NULL, NULL, NULL, [0 => 'anonymous'], NULL));
    }
}
