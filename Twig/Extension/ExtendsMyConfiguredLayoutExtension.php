<?php

namespace  Admingenerator\UserBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

use Admingenerator\UserBundle\Twig\TokenParser\ExtendsMyConfiguredLayoutTokenParser;

class ExtendsMyConfiguredLayoutExtension extends \Twig_Extension
{
    protected $loader;

    protected $container;

    public function __construct(\Twig_Loader_Filesystem $loader)
    {
        $this->loader = $loader;
    }

    public function setContainer(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getTokenParsers()
    {
        return array(
            //{% extends_my_configured_layout 'admingenerator.user_login_template' %}
            new ExtendsMyConfiguredLayoutTokenParser($this->container),
        );
    }

    public function getName()
    {
        return 'extends_my_configured_layout';
    }
}
