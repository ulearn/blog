<?php

/* calendar.twig */
class __TwigTemplate_fe5fa372e0eb51f713beb664be0cf0c9c8c78572b1851c15eac685f6cd98c181 extends Twig_Template
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
        // line 2
        echo "<!-- START All-in-One Event Calendar Plugin - Version ";
        if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
        echo $_version_;
        echo " -->
<div id=\"ai1ec-container\" class=\"ai1ec-main-container\">
\t<!-- AI1EC_PAGE_CONTENT_PLACEHOLDER -->
\t<div id=\"ai1ec-calendar\" class=\"timely ai1ec-calendar\">
\t\t";
        // line 6
        if (isset($context["filter_menu"])) { $_filter_menu_ = $context["filter_menu"]; } else { $_filter_menu_ = null; }
        echo $this->getAttribute($_filter_menu_, "get_content", array(), "method");
        echo "
\t\t<div id=\"ai1ec-calendar-view-container\" class=\"ai1ec-calendar-view-container\">
\t\t\t<div id=\"ai1ec-calendar-view-loading\" class=\"ai1ec-loading ai1ec-calendar-view-loading\"></div>
\t\t\t<div id=\"ai1ec-calendar-view\" class=\"ai1ec-calendar-view\">
\t\t\t\t";
        // line 10
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo $_view_;
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"ai1ec-pull-right\">";
        // line 14
        if (isset($context["subscribe_buttons"])) { $_subscribe_buttons_ = $context["subscribe_buttons"]; } else { $_subscribe_buttons_ = null; }
        echo $_subscribe_buttons_;
        echo "</div>
\t</div><!-- /.timely -->
</div>
<!-- END All-in-One Event Calendar Plugin -->
";
    }

    public function getTemplateName()
    {
        return "calendar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  23 => 3,  248 => 84,  244 => 82,  240 => 81,  238 => 80,  230 => 78,  223 => 77,  221 => 76,  209 => 72,  205 => 70,  198 => 67,  193 => 64,  190 => 63,  176 => 55,  173 => 50,  164 => 45,  159 => 44,  154 => 43,  149 => 42,  144 => 41,  139 => 38,  133 => 35,  123 => 33,  120 => 32,  110 => 28,  97 => 25,  91 => 24,  86 => 23,  73 => 17,  66 => 15,  58 => 13,  26 => 4,  38 => 9,  33 => 5,  28 => 6,  61 => 11,  54 => 8,  44 => 14,  31 => 4,  48 => 8,  29 => 5,  24 => 4,  184 => 61,  178 => 66,  172 => 65,  168 => 63,  165 => 62,  157 => 58,  151 => 56,  145 => 55,  134 => 48,  128 => 46,  122 => 45,  111 => 38,  105 => 27,  100 => 26,  89 => 28,  78 => 25,  71 => 20,  67 => 19,  63 => 14,  60 => 12,  53 => 12,  46 => 12,  35 => 7,  25 => 5,  127 => 34,  115 => 31,  108 => 29,  104 => 27,  101 => 26,  96 => 25,  83 => 26,  80 => 19,  76 => 19,  72 => 18,  68 => 13,  62 => 16,  57 => 15,  49 => 7,  42 => 7,  37 => 5,  116 => 30,  103 => 25,  95 => 22,  90 => 24,  84 => 20,  79 => 19,  74 => 14,  69 => 17,  64 => 16,  55 => 11,  50 => 14,  40 => 9,  32 => 6,  27 => 3,  22 => 2,  19 => 2,);
    }
}
