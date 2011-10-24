<?php

namespace Admingenerator\UserBundle\Twig\TokenParser;

use Symfony\Component\DependencyInjection\ContainerInterface;

class ExtendsMyConfiguredLayoutTokenParser extends \Twig_TokenParser
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Parses a token and returns a node.
     *
     * @param \Twig_Token $token A \Twig_Token instance
     *
     * @return \Twig_NodeInterface A \Twig_NodeInterface instance
     */
    public function parse(\Twig_Token $token)
    {
        if (null !== $this->parser->getParent()) {
            throw new \Twig_Error_Syntax('Multiple extends tags are forbidden', $token->getLine());
        }

        $tpl = $this->container->getParameter($this->parser->getCurrentToken()->getValue());

        $this->parser->getExpressionParser()->parseExpression();

        $this->parser->setParent(new \Twig_Node_Expression_Constant($tpl,$token->getLine()));
        $this->parser->getStream()->expect(\Twig_Token::BLOCK_END_TYPE);

        return null;
    }

    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag()
    {
        return 'extends_my_configured_layout';
    }
}
