<?php
namespace Mf\Slider\View\Helper\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

/**
 * универсальная фабрика для меню
 * 
 */
class Slider implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $cache = $container->get('DefaultSystemCache');
        $config = $container->get('config');
        $connection=$container->get('DefaultSystemDb');
        $MvcEvent=$container->get('Application')->getMvcEvent();
        return new $requestedName($connection,$cache,$config["slider"],$MvcEvent);
    }
}

