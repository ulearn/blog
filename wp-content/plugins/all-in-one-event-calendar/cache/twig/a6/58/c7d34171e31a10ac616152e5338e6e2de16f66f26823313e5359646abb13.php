<?php

/* event-single-full.twig */
class __TwigTemplate_a658c7d34171e31a10ac616152e5338e6e2de16f66f26823313e5359646abb13 extends Twig_Template
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
        echo "\t<article>
\t\t<header>
\t\t\t<h1>
\t\t\t\t";
        // line 4
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo $_title_;
        echo "
\t\t\t</h1>
\t\t</header>
\t\t<div class=\"entry-content\">
\t\t\t";
        // line 8
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
\t\t</div>
\t</article>";
    }

    public function getTemplateName()
    {
        return "event-single-full.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  24 => 4,  19 => 1,);
    }
}
