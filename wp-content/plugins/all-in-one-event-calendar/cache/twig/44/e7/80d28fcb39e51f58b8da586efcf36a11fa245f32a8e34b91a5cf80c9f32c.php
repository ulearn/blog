<?php

/* setting/textarea.twig */
class __TwigTemplate_44e780d28fcb39e51f58b8da586efcf36a11fa245f32a8e34b91a5cf80c9f32c extends Twig_Template
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
        echo "<label class=\"ai1ec-col-sm-12\" for=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
\t";
        // line 2
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo $_label_;
        echo "
</label>
<div class=\"ai1ec-col-sm-12\">
\t";
        // line 5
        if (array_key_exists("append", $context)) {
            // line 6
            echo "\t\t<div class=\"ai1ec-input-group\">
\t";
        }
        // line 8
        echo "
\t";
        // line 9
        $context["__internal_f8310fe72bfef661af6c7f59a638ed78307580dc2c907aa9d1a5344b8864bd87"] = $this->env->loadTemplate("form-elements/textarea.twig");
        // line 10
        echo "\t";
        ob_start();
        // line 11
        echo "\t";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if (isset($context["input_args"])) { $_input_args_ = $context["input_args"]; } else { $_input_args_ = null; }
        echo $context["__internal_f8310fe72bfef661af6c7f59a638ed78307580dc2c907aa9d1a5344b8864bd87"]->gettextarea($_id_, $_id_, $_value_, $_input_args_);
        echo "

\t";
        // line 13
        if (array_key_exists("append", $context)) {
            // line 14
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">";
            if (isset($context["append"])) { $_append_ = $context["append"]; } else { $_append_ = null; }
            echo twig_escape_filter($this->env, $_append_, "html", null, true);
            echo "</span>
\t\t</div>
\t";
        }
        // line 17
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 18
        echo "</div>

";
        // line 20
        if (array_key_exists("help", $context)) {
            // line 21
            echo "\t<div class=\"ai1ec-col-sm-12 ai1ec-help-block\">";
            if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
            echo $_help_;
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  55 => 13,  166 => 38,  161 => 37,  154 => 34,  149 => 33,  144 => 32,  138 => 30,  133 => 29,  114 => 27,  108 => 25,  103 => 24,  92 => 23,  84 => 22,  77 => 19,  72 => 20,  57 => 14,  35 => 8,  24 => 5,  30 => 7,  106 => 36,  100 => 33,  97 => 32,  90 => 27,  86 => 26,  82 => 24,  75 => 21,  67 => 18,  65 => 17,  49 => 12,  37 => 6,  63 => 20,  53 => 16,  43 => 10,  40 => 9,  29 => 5,  146 => 53,  135 => 49,  130 => 48,  122 => 28,  117 => 43,  109 => 39,  104 => 35,  96 => 34,  91 => 33,  83 => 29,  79 => 23,  74 => 21,  66 => 22,  61 => 21,  56 => 14,  51 => 12,  42 => 9,  22 => 2,  25 => 2,  45 => 10,  32 => 5,  19 => 1,  50 => 15,  46 => 11,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 13,  54 => 14,  47 => 7,  44 => 8,  41 => 9,  39 => 5,  34 => 6,  31 => 4,  28 => 4,);
    }
}
