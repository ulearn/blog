<?php

/* views_dropdown.twig */
class __TwigTemplate_c1804f545c5b33b8114cc21fe6cb5c59952fa8c7d680d237c3ca4d3f63b96c1c extends Twig_Template
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
        if (isset($context["available_views"])) { $_available_views_ = $context["available_views"]; } else { $_available_views_ = null; }
        if ((twig_length_filter($this->env, $_available_views_) > 1)) {
            // line 2
            echo "\t<div class=\"ai1ec-views-dropdown ai1ec-btn-group ai1ec-pull-right\">
\t\t<a class=\"ai1ec-btn ai1ec-btn-sm ai1ec-btn-default ai1ec-dropdown-toggle\"
\t\t\tdata-toggle=\"ai1ec-dropdown\">
\t\t\t<i class=\"ai1ec-icon-";
            // line 5
            if (isset($context["current_view"])) { $_current_view_ = $context["current_view"]; } else { $_current_view_ = null; }
            echo twig_escape_filter($this->env, $_current_view_, "html", null, true);
            echo " ai1ec-view-icon ai1ec-tooltip-trigger\"
\t\t\t\ttitle=\"";
            // line 6
            if (isset($context["view_names"])) { $_view_names_ = $context["view_names"]; } else { $_view_names_ = null; }
            if (isset($context["current_view"])) { $_current_view_ = $context["current_view"]; } else { $_current_view_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_view_names_, $_current_view_, array(), "array"), "html_attr");
            echo "\"
\t\t\t\tdata-placement=\"left\"></i>
\t\t\t<span class=\"ai1ec-hidden-xs ai1ec-hidden-sm\">
\t\t\t\t";
            // line 9
            if (isset($context["view_names"])) { $_view_names_ = $context["view_names"]; } else { $_view_names_ = null; }
            if (isset($context["current_view"])) { $_current_view_ = $context["current_view"]; } else { $_current_view_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_view_names_, $_current_view_, array(), "array"), "html", null, true);
            echo "
\t\t\t</span>
\t\t\t<span class=\"ai1ec-caret\"></span>
\t\t</a>
\t\t<div class=\"ai1ec-dropdown-menu\">
\t\t\t";
            // line 14
            if (isset($context["available_views"])) { $_available_views_ = $context["available_views"]; } else { $_available_views_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_available_views_);
            foreach ($context['_seq'] as $context["key"] => $context["args"]) {
                // line 15
                echo "\t\t\t\t<div class=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if (isset($context["current_view"])) { $_current_view_ = $context["current_view"]; } else { $_current_view_ = null; }
                if (($_key_ == $_current_view_)) {
                    echo "ai1ec-active";
                }
                echo "\"
\t\t\t\t\tdata-action=\"";
                // line 16
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">
\t\t\t\t\t<a id=\"ai1ec-view-";
                // line 17
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\"
\t\t\t\t\t\t";
                // line 18
                if (isset($context["data_type"])) { $_data_type_ = $context["data_type"]; } else { $_data_type_ = null; }
                echo $_data_type_;
                echo "
\t\t\t\t\t\tclass=\"ai1ec-load-view ";
                // line 19
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\"
\t\t\t\t\t\thref=\"";
                // line 20
                if (isset($context["available_views"])) { $_available_views_ = $context["available_views"]; } else { $_available_views_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_available_views_, $_key_, array(), "array"), "href"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"ai1ec-icon-";
                // line 21
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo " ai1ec-view-icon ai1ec-tooltip-trigger\"
\t\t\t\t\t\t\ttitle=\"";
                // line 22
                if (isset($context["view_names"])) { $_view_names_ = $context["view_names"]; } else { $_view_names_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_view_names_, $_key_, array(), "array"), "html_attr");
                echo "\"
\t\t\t\t\t\t\tdata-placement=\"left\"></i>
\t\t\t\t\t\t<span class=\"ai1ec-hidden-xs ai1ec-hidden-sm\">
\t\t\t\t\t\t\t";
                // line 25
                if (isset($context["available_views"])) { $_available_views_ = $context["available_views"]; } else { $_available_views_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_available_views_, $_key_, array(), "array"), "desc"), "html", null, true);
                echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['args'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "views_dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  103 => 25,  95 => 22,  90 => 21,  84 => 20,  79 => 19,  74 => 18,  69 => 17,  64 => 16,  55 => 15,  50 => 14,  40 => 9,  32 => 6,  27 => 5,  22 => 2,  19 => 1,);
    }
}
