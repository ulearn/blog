<?php

/* setting/enabled-views.twig */
class __TwigTemplate_e0be9029cc923fc647cc9fe9735ba608a9ba80e9e5a13e2eeaf05ccd663cb0ec extends Twig_Template
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
        echo "<div class=\"ai1ec-admin-view-settings ai1ec-form-group\">
\t<label class=\"ai1ec-control-label ai1ec-col-lg-5\">";
        // line 2
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo twig_escape_filter($this->env, $_label_, "html", null, true);
        echo "</label>
\t<div class=\"ai1ec-col-lg-7\">
\t\t<table class=\"ai1ec-table ai1ec-table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\"></th>
\t\t\t\t\t<th scope=\"col\" colspan=\"2\" class=\"ai1ec-text-center\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-desktop ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t\t\t";
        // line 10
        if (isset($context["text_desktop"])) { $_text_desktop_ = $context["text_desktop"]; } else { $_text_desktop_ = null; }
        echo twig_escape_filter($this->env, $_text_desktop_, "html", null, true);
        echo "
\t\t\t\t\t</th>
\t\t\t\t\t<th scope=\"col\" colspan=\"2\" class=\"ai1ec-text-center\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-mobile ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t\t\t";
        // line 14
        if (isset($context["text_mobile"])) { $_text_mobile_ = $context["text_mobile"]; } else { $_text_mobile_ = null; }
        echo twig_escape_filter($this->env, $_text_mobile_, "html", null, true);
        echo "
\t\t\t\t\t</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\"></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 19
        if (isset($context["text_enabled"])) { $_text_enabled_ = $context["text_enabled"]; } else { $_text_enabled_ = null; }
        echo twig_escape_filter($this->env, $_text_enabled_, "html", null, true);
        echo "</small></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 20
        if (isset($context["text_default"])) { $_text_default_ = $context["text_default"]; } else { $_text_default_ = null; }
        echo twig_escape_filter($this->env, $_text_default_, "html", null, true);
        echo "</small></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 21
        if (isset($context["text_enabled"])) { $_text_enabled_ = $context["text_enabled"]; } else { $_text_enabled_ = null; }
        echo twig_escape_filter($this->env, $_text_enabled_, "html", null, true);
        echo "</small></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 22
        if (isset($context["text_default"])) { $_text_default_ = $context["text_default"]; } else { $_text_default_ = null; }
        echo twig_escape_filter($this->env, $_text_default_, "html", null, true);
        echo "</small></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 26
        if (isset($context["views"])) { $_views_ = $context["views"]; } else { $_views_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_views_);
        foreach ($context['_seq'] as $context["view"] => $context["args"]) {
            // line 27
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 29
            if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_args_, "longname"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-view\" type=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"view_";
            // line 33
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            echo twig_escape_filter($this->env, $_view_, "html", null, true);
            echo "_enabled\" value=\"1\"
\t\t\t\t\t\t\t\t";
            // line 34
            if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_args_, "enabled"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-default-view\" type=\"radio\"
\t\t\t\t\t\t\t\tname=\"default_calendar_view\" value=\"";
            // line 38
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            echo twig_escape_filter($this->env, $_view_, "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 39
            if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_args_, "default"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-view\" type=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"view_";
            // line 43
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            echo twig_escape_filter($this->env, $_view_, "html", null, true);
            echo "_enabled_mobile\" value=\"1\"
\t\t\t\t\t\t\t\t";
            // line 44
            if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_args_, "enabled_mobile"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-default-view\" type=\"radio\"
\t\t\t\t\t\t\t\tname=\"default_calendar_view_mobile\" value=\"";
            // line 48
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            echo twig_escape_filter($this->env, $_view_, "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 49
            if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_args_, "default_mobile"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['view'], $context['args'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/enabled-views.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 53,  135 => 49,  130 => 48,  122 => 44,  117 => 43,  109 => 39,  104 => 38,  96 => 34,  91 => 33,  83 => 29,  79 => 27,  74 => 26,  66 => 22,  61 => 21,  56 => 20,  51 => 19,  42 => 14,  22 => 2,  25 => 2,  45 => 6,  32 => 3,  19 => 1,  50 => 12,  46 => 9,  38 => 5,  33 => 5,  27 => 2,  23 => 2,  20 => 1,  58 => 13,  54 => 8,  47 => 7,  44 => 8,  41 => 6,  39 => 5,  34 => 10,  31 => 3,  28 => 2,);
    }
}
