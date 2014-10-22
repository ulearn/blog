<?php

/* select2_input.twig */
class __TwigTemplate_8738aa294570b2a85a442a17cdfa79373b77254570956b003b0309707c0a3aa4 extends Twig_Template
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
        $context["__internal_6769d4ffa9f5dd0c27b63fd05f081ea5ac26508d9347c71540bf9f8907ce6542"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 2
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if (isset($context["select2_args"])) { $_select2_args_ = $context["select2_args"]; } else { $_select2_args_ = null; }
        echo $context["__internal_6769d4ffa9f5dd0c27b63fd05f081ea5ac26508d9347c71540bf9f8907ce6542"]->getinput($_id_, $_name_, "", "text", $_select2_args_);
    }

    public function getTemplateName()
    {
        return "select2_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 36,  185 => 35,  178 => 33,  165 => 31,  160 => 30,  155 => 29,  152 => 28,  148 => 26,  138 => 24,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 15,  89 => 14,  83 => 13,  73 => 11,  69 => 10,  64 => 9,  59 => 8,  54 => 7,  49 => 6,  46 => 5,  43 => 4,  39 => 3,  21 => 2,  37 => 7,  35 => 2,  32 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
