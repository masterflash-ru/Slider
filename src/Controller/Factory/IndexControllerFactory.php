<?php
namespace Mf\Slider\Controller\Factory;

use Psr\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;



/**
 */
class IndexControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $connection=$container->get('DefaultSystemDb');
		
		$cache = $container->get('DefaultSystemCache');
        $config = $container->get('Config');
		
		return new $requestedName( $connection,$cache,$config["slider"]);
    }
}

