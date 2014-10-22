<?php

/* event-single.twig */
class __TwigTemplate_d0fd53d3e74d5ca87482d078ffb8d74c0fecfd7106a9092d9a28cce902c86fed extends Twig_Template
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
        echo "<div class=\"timely ai1ec-single-event
\tai1ec-event-id-";
        // line 2
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "post_id"), "method"), "html", null, true);
        echo "
\t";
        // line 3
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if ($this->getAttribute($_event_, "is_multiday")) {
            echo "ai1ec-multiday";
        }
        // line 4
        echo "\t";
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if ($this->getAttribute($_event_, "is_allday")) {
            echo "ai1ec-allday";
        }
        echo "\">

<a id=\"ai1ec-event\"></a>

";
        // line 8
        if (isset($context["show_subscribe_buttons"])) { $_show_subscribe_buttons_ = $context["show_subscribe_buttons"]; } else { $_show_subscribe_buttons_ = null; }
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if (($_show_subscribe_buttons_ || (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method"))))) {
            // line 9
            echo "\t<div class=\"ai1ec-actions\">
\t\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t\t";
            // line 11
            if (isset($context["back_to_calendar"])) { $_back_to_calendar_ = $context["back_to_calendar"]; } else { $_back_to_calendar_ = null; }
            echo $_back_to_calendar_;
            echo "
\t\t</div>

\t\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t\t";
            // line 15
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            if ((!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method")))) {
                // line 16
                echo "\t\t\t\t<a href=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method"), "html_attr");
                echo "\" target=\"_blank\"
\t\t\t\t\tclass=\"ai1ec-tickets ai1ec-btn ai1ec-btn-sm ai1ec-btn-primary
\t\t\t\t\t\tai1ec-tooltip-trigger\"
\t\t\t\t\t\ttitle=\"";
                // line 19
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "tickets_url_label"), "method"), "html_attr");
                echo "\"
\t\t\t\t\t\tdata-placement=\"left\">
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket ai1ec-fa-fw\"></i>
\t\t\t\t\t<span class=\"ai1ec-hidden-xs\">
\t\t\t\t\t\t";
                // line 23
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "tickets_url_label"), "method"), "html", null, true);
                echo "
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            if (isset($context["show_subscribe_buttons"])) { $_show_subscribe_buttons_ = $context["show_subscribe_buttons"]; } else { $_show_subscribe_buttons_ = null; }
            if ($_show_subscribe_buttons_) {
                // line 28
                echo "\t\t\t\t";
                if (isset($context["subscribe_url"])) { $_subscribe_url_ = $context["subscribe_url"]; } else { $_subscribe_url_ = null; }
                if (isset($context["subscribe_url_no_html"])) { $_subscribe_url_no_html_ = $context["subscribe_url_no_html"]; } else { $_subscribe_url_no_html_ = null; }
                if (isset($context["text_add_calendar"])) { $_text_add_calendar_ = $context["text_add_calendar"]; } else { $_text_add_calendar_ = null; }
                if (isset($context["subscribe_buttons_text"])) { $_subscribe_buttons_text_ = $context["subscribe_buttons_text"]; } else { $_subscribe_buttons_text_ = null; }
                $this->env->loadTemplate("subscribe-buttons.twig")->display(array_merge($context, array("button_classes" => "ai1ec-btn-dropdown", "export_url" => $_subscribe_url_, "export_url_no_html" => $_subscribe_url_no_html_, "subscribe_label" => $_text_add_calendar_, "text" => $_subscribe_buttons_text_)));
                // line 35
                echo "\t\t\t";
            }
            // line 36
            echo "\t\t</div>
\t\t\t";
            // line 37
            if (isset($context["extra_buttons"])) { $_extra_buttons_ = $context["extra_buttons"]; } else { $_extra_buttons_ = null; }
            if ($_extra_buttons_) {
                // line 38
                echo "\t\t\t\t";
                if (isset($context["extra_buttons"])) { $_extra_buttons_ = $context["extra_buttons"]; } else { $_extra_buttons_ = null; }
                echo $_extra_buttons_;
                echo "
\t\t\t";
            }
            // line 40
            echo "\t</div>
";
        }
        // line 42
        echo "
";
        // line 43
        if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
        if (twig_test_empty($_map_)) {
            // line 44
            echo "\t";
            $context["col1"] = "ai1ec-col-sm-3";
            // line 45
            echo "\t";
            $context["col2"] = "ai1ec-col-sm-9";
            // line 46
            echo "\t<div class=\"ai1ec-event-details ai1ec-clearfix\">
";
        } else {
            // line 48
            echo "\t";
            $context["col1"] = "ai1ec-col-sm-4 ai1ec-col-md-5";
            // line 49
            echo "\t";
            $context["col2"] = "ai1ec-col-sm-8 ai1ec-col-md-7";
            // line 50
            echo "\t<div class=\"ai1ec-event-details ai1ec-row\">
\t\t<div class=\"ai1ec-map ai1ec-col-sm-5 ai1ec-col-sm-push-7\">
\t\t\t";
            // line 52
            if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
            echo $_map_;
            echo "
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-7 ai1ec-col-sm-pull-5\">
";
        }
        // line 56
        echo "
\t<div class=\"ai1ec-time ai1ec-row\">
\t\t<div class=\"ai1ec-field-label ";
        // line 58
        if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
        echo twig_escape_filter($this->env, $_col1_, "html", null, true);
        echo "\">";
        if (isset($context["text_when"])) { $_text_when_ = $context["text_when"]; } else { $_text_when_ = null; }
        echo twig_escape_filter($this->env, $_text_when_, "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-field-value ";
        // line 59
        if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
        echo twig_escape_filter($this->env, $_col2_, "html", null, true);
        echo "\">
\t\t\t";
        // line 60
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo $this->env->getExtension('ai1ec')->timespan($_event_);
        echo "
\t\t\t";
        // line 61
        $this->env->loadTemplate("recurrence.twig")->display($context);
        // line 62
        echo "\t\t</div>
\t\t<div class=\"ai1ec-hidden\" class=\"dtstart\">";
        // line 63
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "start"), "method"), "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-hidden\" class=\"dtend\">";
        // line 64
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "end"), "method"), "html", null, true);
        echo "</div>
\t</div>

\t";
        // line 67
        if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
        if ((!twig_test_empty($_location_))) {
            // line 68
            echo "\t\t<div class=\"ai1ec-location ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 69
            if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
            echo twig_escape_filter($this->env, $_col1_, "html", null, true);
            echo "\">";
            if (isset($context["text_where"])) { $_text_where_ = $context["text_where"]; } else { $_text_where_ = null; }
            echo twig_escape_filter($this->env, $_text_where_, "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 70
            if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
            echo twig_escape_filter($this->env, $_col2_, "html", null, true);
            echo " location\">
\t\t\t\t";
            // line 71
            if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
            echo $_location_;
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 75
        echo "
\t";
        // line 76
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if (((!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "cost"), "method"))) || $this->getAttribute($_event_, "is_free"))) {
            // line 77
            echo "\t\t<div class=\"ai1ec-cost ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 78
            if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
            echo twig_escape_filter($this->env, $_col1_, "html", null, true);
            echo "\">";
            if (isset($context["text_cost"])) { $_text_cost_ = $context["text_cost"]; } else { $_text_cost_ = null; }
            echo twig_escape_filter($this->env, $_text_cost_, "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 79
            if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
            echo twig_escape_filter($this->env, $_col2_, "html", null, true);
            echo "\">
\t\t\t\t";
            // line 80
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            if (isset($context["text_free"])) { $_text_free_ = $context["text_free"]; } else { $_text_free_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_event_, "is_free")) ? ($_text_free_) : ($this->getAttribute($_event_, "get", array(0 => "cost"), "method"))), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 84
        echo "
\t";
        // line 85
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        if ((!twig_test_empty($_contact_))) {
            // line 86
            echo "\t\t<div class=\"ai1ec-contact ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 87
            if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
            echo twig_escape_filter($this->env, $_col1_, "html", null, true);
            echo "\">";
            if (isset($context["text_contact"])) { $_text_contact_ = $context["text_contact"]; } else { $_text_contact_ = null; }
            echo twig_escape_filter($this->env, $_text_contact_, "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 88
            if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
            echo twig_escape_filter($this->env, $_col2_, "html", null, true);
            echo " contact\">";
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            echo $_contact_;
            echo "</div>
\t\t</div>
\t";
        }
        // line 91
        echo "
\t";
        // line 92
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        if ((!twig_test_empty($_categories_))) {
            // line 93
            echo "\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 94
            if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
            echo twig_escape_filter($this->env, $_col1_, "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 96
            if (isset($context["text_categories"])) { $_text_categories_ = $context["text_categories"]; } else { $_text_categories_ = null; }
            echo twig_escape_filter($this->env, $_text_categories_, "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 98
            if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
            echo twig_escape_filter($this->env, $_col2_, "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t";
            // line 99
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            echo $_categories_;
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 103
        echo "
\t";
        // line 104
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        if ((!twig_test_empty($_tags_))) {
            // line 105
            echo "\t\t<div class=\"ai1ec-tags ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 106
            if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
            echo twig_escape_filter($this->env, $_col1_, "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 108
            if (isset($context["text_tags"])) { $_text_tags_ = $context["text_tags"]; } else { $_text_tags_ = null; }
            echo twig_escape_filter($this->env, $_text_tags_, "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 110
            if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
            echo twig_escape_filter($this->env, $_col2_, "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t";
            // line 111
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            echo $_tags_;
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 115
        echo "
";
        // line 116
        if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
        if (twig_test_empty($_map_)) {
            // line 117
            echo "\t</div>";
        } else {
            // line 119
            echo "\t\t</div>";
            // line 120
            echo "\t</div>";
        }
        // line 122
        echo "
";
        // line 123
        if (isset($context["hide_featured_image"])) { $_hide_featured_image_ = $context["hide_featured_image"]; } else { $_hide_featured_image_ = null; }
        if ((!$_hide_featured_image_)) {
            // line 124
            echo "\t";
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            if (twig_test_empty($this->getAttribute($_event_, "get_runtime", array(0 => "content_img_url"), "method"))) {
                // line 125
                echo "\t\t";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo $this->env->getExtension('ai1ec')->avatar($_event_, array(0 => "post_thumbnail", 1 => "location_avatar", 2 => "category_avatar"), "timely alignleft", false);
                // line 129
                echo "
\t";
            }
        }
        // line 132
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 132,  371 => 129,  367 => 125,  363 => 124,  360 => 123,  357 => 122,  354 => 120,  352 => 119,  349 => 117,  346 => 116,  343 => 115,  335 => 111,  330 => 110,  324 => 108,  318 => 106,  315 => 105,  312 => 104,  309 => 103,  301 => 99,  296 => 98,  290 => 96,  284 => 94,  281 => 93,  278 => 92,  275 => 91,  265 => 88,  257 => 87,  254 => 86,  251 => 85,  248 => 84,  239 => 80,  234 => 79,  226 => 78,  223 => 77,  220 => 76,  217 => 75,  209 => 71,  204 => 70,  196 => 69,  193 => 68,  190 => 67,  183 => 64,  178 => 63,  175 => 62,  173 => 61,  168 => 60,  163 => 59,  155 => 58,  151 => 56,  143 => 52,  139 => 50,  136 => 49,  133 => 48,  129 => 46,  126 => 45,  123 => 44,  120 => 43,  117 => 42,  113 => 40,  106 => 38,  103 => 37,  100 => 36,  97 => 35,  90 => 28,  86 => 27,  78 => 23,  70 => 19,  62 => 16,  59 => 15,  47 => 9,  43 => 8,  56 => 15,  51 => 11,  44 => 11,  27 => 3,  57 => 20,  53 => 18,  45 => 14,  38 => 12,  35 => 9,  32 => 4,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
