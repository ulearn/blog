<?php

/* setting/checkbox.twig */
class __TwigTemplate_282745a08a32adc67392b55ee4ca55b6d618501e2c61c94eaf0b8b2925984cee extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
\t<div class=\"checkbox\">
\t\t<label for=\"";
        // line 3
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
\t\t\t";
        // line 4
        $context["__internal_4eadac68184dbe27eae3685d799b0d447b82f6b1f2c9aca132d12c5c189953d5"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 5
        echo "\t\t\t";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
        echo $context["__internal_4eadac68184dbe27eae3685d799b0d447b82f6b1f2c9aca132d12c5c189953d5"]->getinput($_id_, $_id_, 1, "checkbox", $_attributes_);
        echo "

\t\t\t";
        // line 7
        if (isset($context["renderer"])) { $_renderer_ = $context["renderer"]; } else { $_renderer_ = null; }
        echo $this->getAttribute($_renderer_, "label");
        echo "

\t\t</label>
\t</div>
\t";
        // line 11
        if (isset($context["renderer"])) { $_renderer_ = $context["renderer"]; } else { $_renderer_ = null; }
        if ($this->getAttribute($_renderer_, "help", array(), "any", true, true)) {
            // line 12
            echo "\t\t<div class=\"ai1ec-help-block\">";
            if (isset($context["renderer"])) { $_renderer_ = $context["renderer"]; } else { $_renderer_ = null; }
            echo $this->getAttribute($_renderer_, "help");
            echo "</div>
\t";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "setting/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  106 => 36,  100 => 33,  97 => 32,  90 => 27,  86 => 26,  82 => 24,  75 => 21,  67 => 18,  65 => 17,  49 => 12,  37 => 6,  63 => 20,  53 => 16,  43 => 12,  40 => 11,  29 => 5,  146 => 53,  135 => 49,  130 => 48,  122 => 44,  117 => 43,  109 => 39,  104 => 35,  96 => 34,  91 => 33,  83 => 29,  79 => 23,  74 => 26,  66 => 22,  61 => 21,  56 => 14,  51 => 13,  42 => 9,  22 => 2,  25 => 2,  45 => 6,  32 => 3,  19 => 1,  50 => 15,  46 => 11,  38 => 7,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 13,  54 => 14,  47 => 7,  44 => 8,  41 => 6,  39 => 5,  34 => 10,  31 => 4,  28 => 4,);
    }
}
