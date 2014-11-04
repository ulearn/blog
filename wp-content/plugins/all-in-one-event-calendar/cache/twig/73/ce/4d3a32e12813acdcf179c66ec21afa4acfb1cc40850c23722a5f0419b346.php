<?php

/* setting/input.twig */
class __TwigTemplate_73ce4d3a32e12813acdcf179c66ec21afa4acfb1cc40850c23722a5f0419b346 extends Twig_Template
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
        echo "<label class=\"ai1ec-control-label ai1ec-col-sm-5\" for=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
\t";
        // line 2
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo $_label_;
        echo "
</label>
";
        // line 4
        if ((array_key_exists("append", $context) || array_key_exists("licence_valid", $context))) {
            // line 5
            echo "\t<div class=\"";
            if (isset($context["group_class"])) { $_group_class_ = $context["group_class"]; } else { $_group_class_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? ($_group_class_) : ("ai1ec-col-lg-3 ai1ec-col-md-4 ai1ec-col-sm-5")), "html", null, true);
            // line 6
            echo "\">
\t\t<div class=\"ai1ec-input-group\">
";
        } else {
            // line 9
            echo "\t<div class=\"ai1ec-col-sm-7\">
";
        }
        // line 11
        echo "
\t";
        // line 12
        $context["__internal_79b3228e6f7cd12702ee53feaa7d496dfb7b7d0b6b3009a1d0fafec6a66a7f1a"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 13
        echo "\t";
        ob_start();
        // line 14
        echo "\t";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if (isset($context["input_type"])) { $_input_type_ = $context["input_type"]; } else { $_input_type_ = null; }
        if (isset($context["input_args"])) { $_input_args_ = $context["input_args"]; } else { $_input_args_ = null; }
        echo $context["__internal_79b3228e6f7cd12702ee53feaa7d496dfb7b7d0b6b3009a1d0fafec6a66a7f1a"]->getinput($_id_, $_id_, $_value_, $_input_type_, $_input_args_);
        echo "


\t";
        // line 17
        if (array_key_exists("append", $context)) {
            // line 18
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">";
            if (isset($context["append"])) { $_append_ = $context["append"]; } else { $_append_ = null; }
            echo twig_escape_filter($this->env, $_append_, "html", null, true);
            echo "</span>
\t\t</div>
\t";
        } elseif (array_key_exists("licence_valid", $context)) {
            // line 21
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">
\t\t\t\t<i class=\"ai1ec-fa
\t\t\t\t\t";
            // line 23
            if (isset($context["licence_valid"])) { $_licence_valid_ = $context["licence_valid"]; } else { $_licence_valid_ = null; }
            if ($_licence_valid_) {
                // line 24
                echo "\t\t\t\t\t\tai1ec-fa-check ai1ec-text-success
\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\tai1ec-fa-times ai1ec-text-danger
\t\t\t\t\t";
            }
            // line 27
            echo "\">
\t\t\t\t</i>
\t\t\t</span>
\t\t</div>
\t";
        }
        // line 32
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 33
        echo "</div>

";
        // line 35
        if (array_key_exists("help", $context)) {
            // line 36
            echo "\t<div class=\"ai1ec-col-sm-12 ai1ec-help-block\">";
            if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
            echo $_help_;
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  100 => 33,  97 => 32,  90 => 27,  86 => 26,  82 => 24,  75 => 21,  67 => 18,  65 => 17,  49 => 12,  37 => 6,  63 => 20,  53 => 16,  43 => 12,  40 => 11,  29 => 5,  146 => 53,  135 => 49,  130 => 48,  122 => 44,  117 => 43,  109 => 39,  104 => 35,  96 => 34,  91 => 33,  83 => 29,  79 => 23,  74 => 26,  66 => 22,  61 => 21,  56 => 17,  51 => 13,  42 => 9,  22 => 2,  25 => 2,  45 => 6,  32 => 3,  19 => 1,  50 => 15,  46 => 11,  38 => 10,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 13,  54 => 14,  47 => 7,  44 => 8,  41 => 6,  39 => 5,  34 => 10,  31 => 4,  28 => 2,);
    }
}
