<?php
namespace Mf\Slider\Service\Admin\JqGrid\Plugin;

use Interop\Container\ContainerInterface;
use Mf\Storage\Service\ImagesLib;
/*

*/

class FactoryImages
{

public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
{
    $connection=$container->get('DefaultSystemDb');
	$ImagesLib=$container->get(ImagesLib::class);
    return new $requestedName($ImagesLib,$connection);
}
}

