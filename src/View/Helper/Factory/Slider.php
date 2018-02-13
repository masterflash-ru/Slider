<?php
namespace Mf\Slider\View\Helper\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * универсальная фабрика для меню
 * 
 */
class Slider implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
	   $cache = $container->get('DefaultSystemCache');
	   $connection=$container->get('ADO\Connection');
        return new $requestedName($connection,$cache,$container);
    }
}

