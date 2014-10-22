<?php

/* agenda-buttons.twig */
class __TwigTemplate_e2c54407992fc7f64fc763c8fa820f4d1ef92de870acc466bbd2209e5965d014 extends Twig_Template
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
        echo "<div class=\"ai1ec-agenda-buttons ai1ec-btn-toolbar ai1ec-pull-right\">
\t<div class=\"ai1ec-btn-group ai1ec-btn-group-xs\">
\t\t<a id=\"ai1ec-print-button\" href=\"#\" class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-print\"></i>
\t\t</a>
\t</div>
\t<div class=\"ai1ec-btn-group ai1ec-btn-group-xs\">
\t\t<a id=\"ai1ec-agenda-collapse-all\" class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-minus-circle\"></i> ";
        // line 9
        if (isset($context["text_collapse_all"])) { $_text_collapse_all_ = $context["text_collapse_all"]; } else { $_text_collapse_all_ = null; }
        echo twig_escape_filter($this->env, $_text_collapse_all_, "html", null, true);
        echo "
\t\t</a>
\t\t<a id=\"ai1ec-agenda-expand-all\" class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-plus-circle\"></i> ";
        // line 12
        if (isset($context["text_expand_all"])) { $_text_expand_all_ = $context["text_expand_all"]; } else { $_text_expand_all_ = null; }
        echo twig_escape_filter($this->env, $_text_expand_all_, "html", null, true);
        echo "
\t\t</a>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "agenda-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  29 => 9,  19 => 1,);
    }
}
