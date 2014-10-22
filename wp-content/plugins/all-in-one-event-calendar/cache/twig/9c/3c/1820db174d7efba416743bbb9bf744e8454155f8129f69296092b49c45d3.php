<?php

/* event-map.twig */
class __TwigTemplate_9c3c1820db174d7efba416743bbb9bf744e8454155f8129f69296092b49c45d3 extends Twig_Template
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
        if (isset($context["hide_maps_until_clicked"])) { $_hide_maps_until_clicked_ = $context["hide_maps_until_clicked"]; } else { $_hide_maps_until_clicked_ = null; }
        if ($_hide_maps_until_clicked_) {
            // line 2
            echo "\t<div class=\"ai1ec-gmap-placeholder\">
\t\t<strong>
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-map-marker\"></i>
\t\t\t";
            // line 5
            if (isset($context["text_view_map"])) { $_text_view_map_ = $context["text_view_map"]; } else { $_text_view_map_ = null; }
            echo twig_escape_filter($this->env, $_text_view_map_, "html", null, true);
            echo "
\t\t</strong>
\t</div>
";
        }
        // line 9
        echo "<div class=\"ai1ec-gmap-container ";
        if (isset($context["hide_maps_until_clicked"])) { $_hide_maps_until_clicked_ = $context["hide_maps_until_clicked"]; } else { $_hide_maps_until_clicked_ = null; }
        if ($_hide_maps_until_clicked_) {
            echo "ai1ec-gmap-container-hidden";
        }
        echo "\">
\t<div id=\"ai1ec-gmap-canvas\"></div>
\t<input type=\"hidden\" id=\"ai1ec-gmap-address\" value=\"";
        // line 11
        if (isset($context["address"])) { $_address_ = $context["address"]; } else { $_address_ = null; }
        echo twig_escape_filter($this->env, $_address_, "html_attr");
        echo "\" />

\t<a class=\"ai1ec-gmap-link ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs ai1ec-tooltip-trigger\"
\t\thref=\"";
        // line 14
        if (isset($context["gmap_url_link"])) { $_gmap_url_link_ = $context["gmap_url_link"]; } else { $_gmap_url_link_ = null; }
        echo twig_escape_filter($this->env, $_gmap_url_link_, "html_attr");
        echo "\" target=\"_blank\"
\t\ttitle=\"";
        // line 15
        if (isset($context["text_full_map"])) { $_text_full_map_ = $context["text_full_map"]; } else { $_text_full_map_ = null; }
        echo twig_escape_filter($this->env, $_text_full_map_, "html", null, true);
        echo "\"
\t\tdata-placement=\"bottom\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-search-plus ai1ec-fa-lg\"></i>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "event-map.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  51 => 14,  44 => 11,  27 => 5,  57 => 20,  53 => 18,  45 => 14,  38 => 12,  35 => 9,  32 => 10,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
