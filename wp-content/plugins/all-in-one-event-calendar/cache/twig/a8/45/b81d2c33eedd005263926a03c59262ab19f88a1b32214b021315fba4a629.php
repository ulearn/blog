<?php

/* setting/tags-categories.twig */
class __TwigTemplate_a845b81d2c33eedd005263926a03c59262ab19f88a1b32214b021315fba4a629 extends Twig_Template
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
        echo "<div class=\"ai1ec-default-filters ai1ec-form-group\">
\t<label class=\"ai1ec-control-label ai1ec-col-sm-5\">
\t\t";
        // line 3
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo twig_escape_filter($this->env, $_label_, "html", null, true);
        echo "
\t\t<div class=\"ai1ec-help-block\">
\t\t";
        // line 5
        if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
        echo $_help_;
        echo "
\t\t</div>
\t</label>
\t<div class=\"ai1ec-col-sm-7\">
\t\t<div class=\"ai1ec-row\">
\t\t\t";
        // line 10
        if (array_key_exists("categories", $context)) {
            // line 11
            echo "\t\t\t\t<div class=\"ai1ec-col-md-6\">
\t\t\t\t\t";
            // line 12
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            echo $_categories_;
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        if (array_key_exists("tags", $context)) {
            // line 16
            echo "\t\t\t\t<div class=\"ai1ec-col-md-6\">
\t\t\t\t\t";
            // line 17
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            echo $_tags_;
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 20
        echo "\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/tags-categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  53 => 16,  43 => 12,  40 => 11,  29 => 5,  146 => 53,  135 => 49,  130 => 48,  122 => 44,  117 => 43,  109 => 39,  104 => 38,  96 => 34,  91 => 33,  83 => 29,  79 => 27,  74 => 26,  66 => 22,  61 => 21,  56 => 17,  51 => 19,  42 => 14,  22 => 2,  25 => 2,  45 => 6,  32 => 3,  19 => 1,  50 => 15,  46 => 9,  38 => 10,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 13,  54 => 8,  47 => 7,  44 => 8,  41 => 6,  39 => 5,  34 => 10,  31 => 3,  28 => 2,);
    }
}
