<?php

/* recurrence.twig */
class __TwigTemplate_dc78b950182efb8f436b144938fb0dc48cf395d7daabe20293234dbcf2b26545 extends Twig_Template
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
        if (isset($context["recurrence"])) { $_recurrence_ = $context["recurrence"]; } else { $_recurrence_ = null; }
        if ((!twig_test_empty($_recurrence_))) {
            // line 2
            echo "\t<div class=\"ai1ec-recurrence ai1ec-btn-group\">
\t\t<button class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs
\t\t\tai1ec-tooltip-trigger ai1ec-disabled ai1ec-text-muted\"
\t\t\tdata-html=\"true\"
\t\t\ttitle=\"";
            // line 6
            ob_start();
            // line 7
            echo "\t\t\t\t";
            if (isset($context["recurrence"])) { $_recurrence_ = $context["recurrence"]; } else { $_recurrence_ = null; }
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $_recurrence_), "html_attr");
            echo "
\t\t\t\t";
            // line 8
            if (isset($context["exclude"])) { $_exclude_ = $context["exclude"]; } else { $_exclude_ = null; }
            if ((!twig_test_empty($_exclude_))) {
                // line 9
                echo "\t\t\t\t\t";
                if (isset($context["exclude"])) { $_exclude_ = $context["exclude"]; } else { $_exclude_ = null; }
                echo twig_escape_filter($this->env, ((("<div class=\"ai1ec-recurrence-exclude\">" . Ai1ec_I18n::__("Excludes: ")) . $_exclude_) . "</div>"), "html_attr");
                echo "
\t\t\t\t";
            }
            // line 11
            echo "\t\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-repeat\"></i>
\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Repeats"), "html", null, true);
            echo "
\t\t</button>

\t\t";
            // line 16
            if (isset($context["edit_instance_url"])) { $_edit_instance_url_ = $context["edit_instance_url"]; } else { $_edit_instance_url_ = null; }
            if ((!twig_test_empty($_edit_instance_url_))) {
                // line 17
                echo "\t\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-tooltip-trigger
\t\t\t\tai1ec-text-muted\"
\t\t\t\ttitle=\"";
                // line 19
                if (isset($context["edit_instance_text"])) { $_edit_instance_text_ = $context["edit_instance_text"]; } else { $_edit_instance_text_ = null; }
                echo twig_escape_filter($this->env, $_edit_instance_text_, "html_attr");
                echo "\"
\t\t\t\thref=\"";
                // line 20
                if (isset($context["edit_instance_url"])) { $_edit_instance_url_ = $context["edit_instance_url"]; } else { $_edit_instance_url_ = null; }
                echo twig_escape_filter($this->env, $_edit_instance_url_, "html", null, true);
                echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i>
\t\t\t</a>
\t\t";
            }
            // line 24
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "recurrence.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  61 => 17,  58 => 16,  52 => 13,  46 => 11,  39 => 9,  36 => 8,  30 => 7,  376 => 132,  371 => 129,  367 => 125,  363 => 124,  360 => 123,  357 => 122,  354 => 120,  352 => 119,  349 => 117,  346 => 116,  343 => 115,  335 => 111,  330 => 110,  324 => 108,  318 => 106,  315 => 105,  312 => 104,  309 => 103,  301 => 99,  296 => 98,  290 => 96,  284 => 94,  281 => 93,  278 => 92,  275 => 91,  265 => 88,  257 => 87,  254 => 86,  251 => 85,  248 => 84,  239 => 80,  234 => 79,  226 => 78,  223 => 77,  220 => 76,  217 => 75,  209 => 71,  204 => 70,  196 => 69,  193 => 68,  190 => 67,  183 => 64,  178 => 63,  175 => 62,  173 => 61,  168 => 60,  163 => 59,  155 => 58,  151 => 56,  143 => 52,  139 => 50,  136 => 49,  133 => 48,  129 => 46,  126 => 45,  123 => 44,  120 => 43,  117 => 42,  113 => 40,  106 => 38,  103 => 37,  100 => 36,  97 => 35,  90 => 28,  86 => 27,  78 => 24,  70 => 20,  62 => 16,  59 => 15,  47 => 9,  43 => 8,  56 => 15,  51 => 11,  44 => 11,  27 => 3,  57 => 20,  53 => 18,  45 => 14,  38 => 12,  35 => 9,  32 => 4,  28 => 6,  25 => 3,  22 => 2,  19 => 1,);
    }
}
