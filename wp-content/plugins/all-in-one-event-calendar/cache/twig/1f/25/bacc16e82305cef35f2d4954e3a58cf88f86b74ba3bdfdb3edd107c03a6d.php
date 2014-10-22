<?php

/* filter-menu.twig */
class __TwigTemplate_1f25bacc16e82305cef35f2d4954e3a58cf88f86b74ba3bdfdb3edd107c03a6d extends Twig_Template
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
        echo "<div class=\"timely ai1ec-calendar-toolbar ai1ec-clearfix\">
\t<ul class=\"ai1ec-nav ai1ec-nav-pills ai1ec-pull-left ai1ec-filters\">
\t\t";
        // line 3
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        echo $_categories_;
        echo "
\t\t";
        // line 4
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        echo $_tags_;
        echo "
\t</ul>
  <div class=\"ai1ec-pull-right\">
  \t";
        // line 7
        if (isset($context["contribution_buttons"])) { $_contribution_buttons_ = $context["contribution_buttons"]; } else { $_contribution_buttons_ = null; }
        echo $_contribution_buttons_;
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "filter-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  248 => 84,  244 => 82,  240 => 81,  238 => 80,  230 => 78,  223 => 77,  221 => 76,  209 => 72,  205 => 70,  198 => 67,  193 => 64,  190 => 63,  176 => 55,  173 => 50,  164 => 45,  159 => 44,  154 => 43,  149 => 42,  144 => 41,  139 => 38,  133 => 35,  123 => 33,  120 => 32,  110 => 28,  97 => 25,  91 => 24,  86 => 23,  73 => 17,  66 => 15,  58 => 13,  26 => 4,  38 => 9,  33 => 5,  28 => 4,  61 => 11,  54 => 8,  44 => 10,  31 => 4,  48 => 8,  29 => 5,  24 => 4,  184 => 61,  178 => 66,  172 => 65,  168 => 63,  165 => 62,  157 => 58,  151 => 56,  145 => 55,  134 => 48,  128 => 46,  122 => 45,  111 => 38,  105 => 27,  100 => 26,  89 => 28,  78 => 25,  71 => 20,  67 => 19,  63 => 14,  60 => 12,  53 => 12,  46 => 12,  35 => 7,  25 => 5,  127 => 34,  115 => 31,  108 => 29,  104 => 27,  101 => 26,  96 => 25,  83 => 26,  80 => 19,  76 => 19,  72 => 18,  68 => 13,  62 => 16,  57 => 15,  49 => 7,  42 => 7,  37 => 5,  116 => 30,  103 => 25,  95 => 22,  90 => 24,  84 => 20,  79 => 19,  74 => 14,  69 => 17,  64 => 16,  55 => 11,  50 => 14,  40 => 9,  32 => 6,  27 => 3,  22 => 2,  19 => 1,);
    }
}
