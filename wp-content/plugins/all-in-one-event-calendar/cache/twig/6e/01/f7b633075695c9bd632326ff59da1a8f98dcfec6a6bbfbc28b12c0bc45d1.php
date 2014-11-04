<?php

/* setting/calendar-page-selector.twig */
class __TwigTemplate_6e01f7b633075695c9bd632326ff59da1a8f98dcfec6a6bbfbc28b12c0bc45d1 extends Twig_Template
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
        echo "<p><a target=\"_blank\" href=\"";
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        echo twig_escape_filter($this->env, $_link_, "html", null, true);
        echo "\">
  ";
        // line 2
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo twig_escape_filter($this->env, $_view_, "html", null, true);
        echo " \"";
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo $_title_;
        echo "\"
  <i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
</a></p>
";
    }

    public function getTemplateName()
    {
        return "setting/calendar-page-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  45 => 6,  32 => 3,  19 => 1,  50 => 12,  46 => 9,  38 => 5,  33 => 5,  27 => 2,  23 => 2,  20 => 1,  58 => 13,  54 => 8,  47 => 7,  44 => 8,  41 => 6,  39 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
