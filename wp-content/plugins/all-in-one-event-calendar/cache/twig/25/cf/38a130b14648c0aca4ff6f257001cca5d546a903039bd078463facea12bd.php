<?php

/* week.twig */
class __TwigTemplate_25cf38a130b14648c0aca4ff6f257001cca5d546a903039bd078463facea12bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("weekday.base.twig");

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'indent_multiplier' => array($this, 'block_indent_multiplier'),
            'indent_offset' => array($this, 'block_indent_offset'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "weekday.base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_name($context, array $blocks = array())
    {
        echo "week";
    }

    // line 5
    public function block_indent_multiplier($context, array $blocks = array())
    {
        echo 8;
    }

    // line 7
    public function block_indent_offset($context, array $blocks = array())
    {
        echo 0;
    }

    public function getTemplateName()
    {
        return "week.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  36 => 5,  30 => 3,);
    }
}
