<?php
namespace AppBundle\Service;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Calculator
{
    private $container; // <- Add this
    public function __construct(ContainerInterface $container) // <- Add this
    {
        $this->container = $container;
    }
    public function Calculate($price)
    {
        $tva = $this->container->getParameter('tva');
        return array($price, $price + $price*$tva);
    }
}