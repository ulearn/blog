<?php

/* setting/embedding.twig */
class __TwigTemplate_94e338b1a3d5ab95d107882593741558f9a845846750edd3d58a9fc2a65b4c5f extends Twig_Template
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
        // line 2
        echo "<div class=\"ai1ec-col-sm-12\">
<div id=\"ai1ec-embedding\">
\t<div class=\"ai1ec-well ai1ec-prose\">
\t\t<p>";
        // line 5
        if (isset($context["text_insert_shortcode"])) { $_text_insert_shortcode_ = $context["text_insert_shortcode"]; } else { $_text_insert_shortcode_ = null; }
        echo $_text_insert_shortcode_;
        echo "</p>
\t\t<ul>
\t\t\t<li>";
        // line 7
        if (isset($context["text_month_view"])) { $_text_month_view_ = $context["text_month_view"]; } else { $_text_month_view_ = null; }
        echo $_text_month_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"monthly\"]</code></li>
\t\t\t<li>";
        // line 8
        if (isset($context["text_week_view"])) { $_text_week_view_ = $context["text_week_view"]; } else { $_text_week_view_ = null; }
        echo $_text_week_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"weekly\"]</code></li>
\t\t\t<li>";
        // line 9
        if (isset($context["text_day_view"])) { $_text_day_view_ = $context["text_day_view"]; } else { $_text_day_view_ = null; }
        echo $_text_day_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"oneday\"]</code></li>
\t\t\t<li>";
        // line 10
        if (isset($context["text_agenda_view"])) { $_text_agenda_view_ = $context["text_agenda_view"]; } else { $_text_agenda_view_ = null; }
        echo $_text_agenda_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"agenda\"]</code></li>

\t\t\t";
        // line 12
        if (isset($context["viewing_events_shortcodes"])) { $_viewing_events_shortcodes_ = $context["viewing_events_shortcodes"]; } else { $_viewing_events_shortcodes_ = null; }
        echo $_viewing_events_shortcodes_;
        echo "

\t\t\t<li><em>";
        // line 14
        if (isset($context["text_general_form"])) { $_text_general_form_ = $context["text_general_form"]; } else { $_text_general_form_ = null; }
        echo $_text_general_form_;
        echo "</em> ";
        if (isset($context["text_other_view"])) { $_text_other_view_ = $context["text_other_view"]; } else { $_text_other_view_ = null; }
        echo $_text_other_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"someother\"]</code></li>
\t\t\t<li>";
        // line 15
        if (isset($context["text_default_view"])) { $_text_default_view_ = $context["text_default_view"]; } else { $_text_default_view_ = null; }
        echo $_text_default_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec]</code></li>
\t\t</ul>
\t\t<p>
\t\t\t<span class=\"ai1ec-text-muted\">";
        // line 18
        if (isset($context["text_optional"])) { $_text_optional_ = $context["text_optional"]; } else { $_text_optional_ = null; }
        echo $_text_optional_;
        echo "</span>
\t\t\t";
        // line 19
        if (isset($context["text_filter_label"])) { $_text_filter_label_ = $context["text_filter_label"]; } else { $_text_filter_label_ = null; }
        echo $_text_filter_label_;
        echo "
\t\t</p>
\t\t<ul>
\t\t\t<li>";
        // line 22
        if (isset($context["text_filter_category"])) { $_text_filter_category_ = $context["text_filter_category"]; } else { $_text_filter_category_ = null; }
        echo $_text_filter_category_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_name=\"";
        if (isset($context["text_filter_category_1"])) { $_text_filter_category_1_ = $context["text_filter_category_1"]; } else { $_text_filter_category_1_ = null; }
        echo $_text_filter_category_1_;
        echo "\"]</code></li>
\t\t\t<li>";
        // line 23
        if (isset($context["text_filter_category_comma"])) { $_text_filter_category_comma_ = $context["text_filter_category_comma"]; } else { $_text_filter_category_comma_ = null; }
        echo $_text_filter_category_comma_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_name=\"";
        if (isset($context["text_filter_category_2"])) { $_text_filter_category_2_ = $context["text_filter_category_2"]; } else { $_text_filter_category_2_ = null; }
        echo $_text_filter_category_2_;
        echo ",";
        if (isset($context["text_filter_category_3"])) { $_text_filter_category_3_ = $context["text_filter_category_3"]; } else { $_text_filter_category_3_ = null; }
        echo $_text_filter_category_3_;
        echo "\"]</code></li>
\t\t\t<li>";
        // line 24
        if (isset($context["text_filter_category_id"])) { $_text_filter_category_id_ = $context["text_filter_category_id"]; } else { $_text_filter_category_id_ = null; }
        echo $_text_filter_category_id_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 25
        if (isset($context["text_filter_category_id_comma"])) { $_text_filter_category_id_comma_ = $context["text_filter_category_id_comma"]; } else { $_text_filter_category_id_comma_ = null; }
        echo $_text_filter_category_id_comma_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_id=\"1,2\"]</code></li>

\t\t\t<li>";
        // line 27
        if (isset($context["text_filter_tag"])) { $_text_filter_tag_ = $context["text_filter_tag"]; } else { $_text_filter_tag_ = null; }
        echo $_text_filter_tag_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_name=\"";
        if (isset($context["text_filter_tag_1"])) { $_text_filter_tag_1_ = $context["text_filter_tag_1"]; } else { $_text_filter_tag_1_ = null; }
        echo $_text_filter_tag_1_;
        echo "\"]</code></li>
\t\t\t<li>";
        // line 28
        if (isset($context["text_filter_tag_comma"])) { $_text_filter_tag_comma_ = $context["text_filter_tag_comma"]; } else { $_text_filter_tag_comma_ = null; }
        echo $_text_filter_tag_comma_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_name=\"";
        if (isset($context["text_filter_tag_2"])) { $_text_filter_tag_2_ = $context["text_filter_tag_2"]; } else { $_text_filter_tag_2_ = null; }
        echo $_text_filter_tag_2_;
        echo ",";
        if (isset($context["text_filter_tag_3"])) { $_text_filter_tag_3_ = $context["text_filter_tag_3"]; } else { $_text_filter_tag_3_ = null; }
        echo $_text_filter_tag_3_;
        echo "\"]</code></li>
\t\t\t<li>";
        // line 29
        if (isset($context["text_filter_tag_id"])) { $_text_filter_tag_id_ = $context["text_filter_tag_id"]; } else { $_text_filter_tag_id_ = null; }
        echo $_text_filter_tag_id_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 30
        if (isset($context["text_filter_tag_id_comma"])) { $_text_filter_tag_id_comma_ = $context["text_filter_tag_id_comma"]; } else { $_text_filter_tag_id_comma_ = null; }
        echo $_text_filter_tag_id_comma_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_id=\"1,2\"]</code></li>

\t\t\t<li>";
        // line 32
        if (isset($context["text_filter_post_id"])) { $_text_filter_post_id_ = $context["text_filter_post_id"]; } else { $_text_filter_post_id_ = null; }
        echo $_text_filter_post_id_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec post_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 33
        if (isset($context["text_filter_post_id_comma"])) { $_text_filter_post_id_comma_ = $context["text_filter_post_id_comma"]; } else { $_text_filter_post_id_comma_ = null; }
        echo $_text_filter_post_id_comma_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec post_id=\"1,2\"]</code></li>
\t\t\t<li>";
        // line 34
        if (isset($context["text_events_limit"])) { $_text_events_limit_ = $context["text_events_limit"]; } else { $_text_events_limit_ = null; }
        echo $_text_events_limit_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec events_limit=\"5\"]</code></li>
\t\t</ul>
\t\t<div class=\"ai1ec-alert ai1ec-alert-warning\">
\t\t\t<strong>";
        // line 37
        if (isset($context["text_warning"])) { $_text_warning_ = $context["text_warning"]; } else { $_text_warning_ = null; }
        echo $_text_warning_;
        echo "</strong>
\t\t\t";
        // line 38
        if (isset($context["text_single_calendar"])) { $_text_single_calendar_ = $context["text_single_calendar"]; } else { $_text_single_calendar_ = null; }
        echo $_text_single_calendar_;
        echo "
\t\t</div>
\t</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/embedding.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 38,  161 => 37,  154 => 34,  149 => 33,  144 => 32,  138 => 30,  133 => 29,  114 => 27,  108 => 25,  103 => 24,  92 => 23,  84 => 22,  77 => 19,  72 => 18,  57 => 14,  35 => 8,  24 => 5,  30 => 7,  106 => 36,  100 => 33,  97 => 32,  90 => 27,  86 => 26,  82 => 24,  75 => 21,  67 => 18,  65 => 15,  49 => 12,  37 => 6,  63 => 20,  53 => 16,  43 => 12,  40 => 9,  29 => 5,  146 => 53,  135 => 49,  130 => 48,  122 => 28,  117 => 43,  109 => 39,  104 => 35,  96 => 34,  91 => 33,  83 => 29,  79 => 23,  74 => 26,  66 => 22,  61 => 21,  56 => 14,  51 => 12,  42 => 9,  22 => 2,  25 => 2,  45 => 10,  32 => 3,  19 => 2,  50 => 15,  46 => 11,  38 => 7,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 13,  54 => 14,  47 => 7,  44 => 8,  41 => 6,  39 => 5,  34 => 10,  31 => 4,  28 => 4,);
    }
}
