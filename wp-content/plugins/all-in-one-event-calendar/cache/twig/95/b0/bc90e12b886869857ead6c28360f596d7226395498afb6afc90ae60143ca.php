<?php

/* oneday.twig */
class __TwigTemplate_95b0bc90e12b886869857ead6c28360f596d7226395498afb6afc90ae60143ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("weekday.base.twig");

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'weekday_html' => array($this, 'block_weekday_html'),
            'event_popup' => array($this, 'block_event_popup'),
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
        echo "oneday";
    }

    // line 5
    public function block_weekday_html($context, array $blocks = array())
    {
        // line 6
        echo "\t<span class=\"ai1ec-weekday-date\">";
        if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day($_date_), "html", null, true);
        echo "</span>
\t<span class=\"ai1ec-weekday-day\">";
        // line 7
        if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday($_date_), "html", null, true);
        echo "</span>
";
    }

    // line 10
    public function block_event_popup($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        $this->env->loadTemplate("event-popup.twig")->display(array_merge($context, array("popup_classes" => "ai1ec-popup-in-oneday-view", "popup_timespan" => $this->env->getExtension('ai1ec')->timespan($this->getAttribute($_event_, "get", array(0 => "_orig"), "method"), "short"))));
    }

    // line 17
    public function block_indent_multiplier($context, array $blocks = array())
    {
        echo 16;
    }

    // line 19
    public function block_indent_offset($context, array $blocks = array())
    {
        echo 54;
    }

    public function getTemplateName()
    {
        return "oneday.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  63 => 17,  57 => 11,  54 => 10,  47 => 7,  41 => 6,  38 => 5,  32 => 3,);
    }
}
