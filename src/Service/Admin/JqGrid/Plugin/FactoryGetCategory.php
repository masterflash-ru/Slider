<?php
namespace Mf\Slider\Service\Admin\JqGrid\Plugin;

use Psr\Container\ContainerInterface;

/*

*/

class FactoryGetCategory
{

public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
{
	$config=$container->get("config");
    return new $requestedName($config);
}
}
