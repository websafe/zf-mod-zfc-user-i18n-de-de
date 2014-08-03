<?php

namespace WebsafeZfModZfcUserI18nDeDe;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * German de_DE translation / language pack module for ZF-Commons/ZfcUser.
 *
 * @see \Zend\ModuleManager\ModuleManager
 */
class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{
    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     * @see \Zend\ModuleManager\Feature\AutoloaderProviderInterface
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    /**
     * Returns configuration to merge with application configuration.
     *
     * @return array|\Traversable
     * @see \Zend\ModuleManager\Feature\ConfigProviderInterface
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
