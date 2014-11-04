<?php

/* setting/bootstrap_tabs.twig */
class __TwigTemplate_08e7a5bd54ab9b43437fff4031a8e8c3224eb244e422102529eb80b45d19a1dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("bootstrap_tabs.twig");

        $this->blocks = array(
            'extra_html' => array($this, 'block_extra_html'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_extra_html($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $context["__internal_6ea5001bed8a853ec72a47114fbde36fbd1af235bb1eff80b0b767f77c203776"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 4
        echo "  <div class=\"ai1ec-text-right\">
    ";
        // line 5
        if (isset($context["submit"])) { $_submit_ = $context["submit"]; } else { $_submit_ = null; }
        echo $context["__internal_6ea5001bed8a853ec72a47114fbde36fbd1af235bb1eff80b0b767f77c203776"]->getbutton($this->getAttribute($_submit_, "id"), $this->getAttribute($_submit_, "id"), $this->getAttribute($_submit_, "value"), "submit", $this->getAttribute($_submit_, "args"));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "setting/bootstrap_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  120 => 40,  115 => 38,  110 => 36,  101 => 33,  88 => 29,  71 => 24,  89 => 14,  73 => 11,  69 => 10,  64 => 9,  59 => 21,  21 => 1,  68 => 18,  55 => 13,  166 => 38,  161 => 37,  154 => 34,  149 => 33,  144 => 32,  138 => 30,  133 => 47,  114 => 27,  108 => 25,  103 => 24,  92 => 30,  84 => 22,  77 => 19,  72 => 20,  57 => 13,  35 => 2,  24 => 5,  30 => 8,  106 => 35,  100 => 33,  97 => 32,  90 => 27,  86 => 26,  82 => 24,  75 => 25,  67 => 23,  65 => 17,  49 => 17,  37 => 5,  63 => 22,  53 => 18,  43 => 4,  40 => 9,  29 => 5,  146 => 53,  135 => 49,  130 => 48,  122 => 28,  117 => 43,  109 => 39,  104 => 35,  96 => 34,  91 => 33,  83 => 27,  79 => 26,  74 => 21,  66 => 22,  61 => 21,  56 => 14,  51 => 11,  42 => 9,  22 => 2,  25 => 2,  45 => 9,  32 => 5,  19 => 2,  50 => 15,  46 => 5,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 13,  54 => 7,  47 => 7,  44 => 8,  41 => 12,  39 => 3,  34 => 4,  31 => 3,  28 => 2,);
    }
}
