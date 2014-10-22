<?php

/* navigation.twig */
class __TwigTemplate_08e44d5fc50332367b2d7e81902230ac0e7ea950ee003ec7a490752fc6534c00 extends Twig_Template
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
        echo "<div class=\"ai1ec-clearfix\">
\t";
        // line 2
        if (isset($context["views_dropdown"])) { $_views_dropdown_ = $context["views_dropdown"]; } else { $_views_dropdown_ = null; }
        echo $_views_dropdown_;
        echo "
\t<div class=\"ai1ec-title-buttons ai1ec-btn-toolbar\">
\t\t";
        // line 4
        if (isset($context["before_pagination"])) { $_before_pagination_ = $context["before_pagination"]; } else { $_before_pagination_ = null; }
        echo $_before_pagination_;
        echo "
\t\t";
        // line 5
        if (isset($context["pagination_links"])) { $_pagination_links_ = $context["pagination_links"]; } else { $_pagination_links_ = null; }
        echo $_pagination_links_;
        echo "
\t\t";
        // line 6
        if (isset($context["after_pagination"])) { $_after_pagination_ = $context["after_pagination"]; } else { $_after_pagination_ = null; }
        echo $_after_pagination_;
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  33 => 5,  28 => 4,  61 => 11,  54 => 8,  44 => 6,  31 => 4,  48 => 8,  29 => 5,  24 => 4,  184 => 68,  178 => 66,  172 => 65,  168 => 63,  165 => 62,  157 => 58,  151 => 56,  145 => 55,  134 => 48,  128 => 46,  122 => 45,  111 => 38,  105 => 36,  100 => 35,  89 => 28,  78 => 25,  71 => 20,  67 => 19,  63 => 17,  60 => 12,  53 => 14,  46 => 12,  35 => 9,  25 => 5,  127 => 35,  115 => 31,  108 => 29,  104 => 27,  101 => 26,  96 => 25,  83 => 26,  80 => 21,  76 => 19,  72 => 18,  68 => 13,  62 => 16,  57 => 15,  49 => 7,  42 => 7,  37 => 5,  116 => 30,  103 => 25,  95 => 22,  90 => 24,  84 => 20,  79 => 19,  74 => 14,  69 => 17,  64 => 16,  55 => 11,  50 => 14,  40 => 9,  32 => 8,  27 => 3,  22 => 2,  19 => 1,);
    }
}
