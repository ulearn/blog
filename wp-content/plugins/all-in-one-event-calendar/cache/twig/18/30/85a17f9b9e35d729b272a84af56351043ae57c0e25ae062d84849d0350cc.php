<?php

/* viewing-events-shortcodes.twig */
class __TwigTemplate_183085a17f9b9e35d729b272a84af56351043ae57c0e25ae062d84849d0350cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li>";
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Posterboard view:"), "html", null, true);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"posterboard\"]</code></li>
<li>";
        // line 2
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Stream view:"), "html", null, true);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"stream\"]</code></li>";
    }

    public function getTemplateName()
    {
        return "viewing-events-shortcodes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
