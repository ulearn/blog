<?php

/* select2_multiselect.twig */
class __TwigTemplate_1fc7b71ee92dc515fa667ee7831c98ab6c28baf9d40bd7616eb6cebd71888ce5 extends Twig_Template
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
        echo "<div 
\t";
        // line 2
        if (isset($context["container_class"])) { $_container_class_ = $context["container_class"]; } else { $_container_class_ = null; }
        if (($_container_class_ != false)) {
            // line 3
            echo "\t\tclass=\"";
            if (isset($context["container_class"])) { $_container_class_ = $context["container_class"]; } else { $_container_class_ = null; }
            echo twig_escape_filter($this->env, $_container_class_, "html", null, true);
            echo "\"
\t";
        }
        // line 5
        echo "\t>
\t";
        // line 6
        $context["__internal_9506787f885fe4a24ce3dac023a07266db866fa25d2038ae00433497c5f74af1"] = $this->env->loadTemplate("form-elements/select.twig");
        // line 7
        echo "\t";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if (isset($context["select2_args"])) { $_select2_args_ = $context["select2_args"]; } else { $_select2_args_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        echo $context["__internal_9506787f885fe4a24ce3dac023a07266db866fa25d2038ae00433497c5f74af1"]->getselect($_id_, $_name_, $_select2_args_, $_options_);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "select2_multiselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  35 => 6,  32 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
