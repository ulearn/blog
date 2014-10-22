<?php

/* agenda.twig */
class __TwigTemplate_5ca1499a9c32090a9a368a28b4c13261022bf5d11f22b5211fb873b104fc70e4 extends Twig_Template
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
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        echo $_navigation_;
        echo "

<div class=\"ai1ec-agenda-view\">
\t";
        // line 4
        if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
        if (twig_test_empty($_dates_)) {
            // line 5
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 6
            if (isset($context["text_upcoming_events"])) { $_text_upcoming_events_ = $context["text_upcoming_events"]; } else { $_text_upcoming_events_ = null; }
            echo twig_escape_filter($this->env, $_text_upcoming_events_, "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 9
            echo "\t\t";
            if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_dates_);
            foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
                // line 10
                echo "\t\t\t<div class=\"ai1ec-date
\t\t\t\t";
                // line 11
                if (isset($context["date_info"])) { $_date_info_ = $context["date_info"]; } else { $_date_info_ = null; }
                if ((!twig_test_empty($this->getAttribute($_date_info_, "today")))) {
                    echo "ai1ec-today";
                }
                echo "\">
\t\t\t\t<a class=\"ai1ec-date-title ai1ec-load-view\"
\t\t\t\t\thref=\"";
                // line 13
                if (isset($context["date_info"])) { $_date_info_ = $context["date_info"]; } else { $_date_info_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_date_info_, "href"), "html_attr");
                echo "\"
\t\t\t\t\t";
                // line 14
                if (isset($context["data_type"])) { $_data_type_ = $context["data_type"]; } else { $_data_type_ = null; }
                echo $_data_type_;
                echo ">
\t\t\t\t\t<div class=\"ai1ec-month\">";
                // line 15
                if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month($_date_), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"ai1ec-day\">";
                // line 16
                if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day($_date_), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"ai1ec-weekday\">";
                // line 17
                if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday($_date_), "html", null, true);
                echo "</div>
\t\t\t\t\t";
                // line 18
                if (isset($context["show_year_in_agenda_dates"])) { $_show_year_in_agenda_dates_ = $context["show_year_in_agenda_dates"]; } else { $_show_year_in_agenda_dates_ = null; }
                if ($_show_year_in_agenda_dates_) {
                    // line 19
                    echo "\t\t\t\t\t\t<div class=\"ai1ec-year\">";
                    if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->year($_date_), "html", null, true);
                    echo "</div>
\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t</a>
\t\t\t\t<div class=\"ai1ec-date-events\">
\t\t\t\t\t";
                // line 23
                if (isset($context["date_info"])) { $_date_info_ = $context["date_info"]; } else { $_date_info_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_date_info_, "events"));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 24
                    echo "\t\t\t\t\t\t";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_category_);
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 25
                        echo "\t\t\t\t\t\t\t<div class=\"ai1ec-event
\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 26
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "post_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 27
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 28
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if ($this->getAttribute($_event_, "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t\t";
                        if (isset($context["expanded"])) { $_expanded_ = $context["expanded"]; } else { $_expanded_ = null; }
                        if ($_expanded_) {
                            echo "ai1ec-expanded";
                        }
                        echo "\">

\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-header\">
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-toggle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-minus-circle ai1ec-fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-plus-circle ai1ec-fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 37
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->getAttribute($_event_, "get_runtime", array(0 => "filtered_title"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 38
                        if (isset($context["show_location_in_title"])) { $_show_location_in_title_ = $context["show_location_in_title"]; } else { $_show_location_in_title_ = null; }
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if (($_show_location_in_title_ && (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "venue"), "method"))))) {
                            // line 39
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 40
                            if (isset($context["text_venue_separator"])) { $_text_venue_separator_ = $context["text_venue_separator"]; } else { $_text_venue_separator_ = null; }
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo twig_escape_filter($this->env, sprintf($_text_venue_separator_, $this->getAttribute($_event_, "get", array(0 => "venue"), "method")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t";
                        // line 44
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        $context["edit_post_link"] = $this->getAttribute($_event_, "get_runtime", array(0 => "edit_post_link"), "method");
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (isset($context["edit_post_link"])) { $_edit_post_link_ = $context["edit_post_link"]; } else { $_edit_post_link_ = null; }
                        if ((!twig_test_empty($_edit_post_link_))) {
                            // line 46
                            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\" href=\"";
                            if (isset($context["edit_post_link"])) { $_edit_post_link_ = $context["edit_post_link"]; } else { $_edit_post_link_ = null; }
                            echo $_edit_post_link_;
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 47
                            if (isset($context["text_edit"])) { $_text_edit_ = $context["text_edit"]; } else { $_text_edit_ = null; }
                            echo twig_escape_filter($this->env, $_text_edit_, "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 50
                        echo "
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 52
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->env->getExtension('ai1ec')->timespan($_event_, "short");
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                        // line 57
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-summary ";
                        if (isset($context["expanded"])) { $_expanded_ = $context["expanded"]; } else { $_expanded_ = null; }
                        if ($_expanded_) {
                            echo "ai1ec-expanded";
                        }
                        echo "\">

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 60
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if (twig_test_empty($this->getAttribute($_event_, "get_runtime", array(0 => "content_img_url"), "method"))) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo $this->env->getExtension('ai1ec')->avatar($_event_, array(0 => "post_thumbnail", 1 => "location_avatar", 2 => "category_avatar"), "alignleft");
                            // line 65
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 67
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->getAttribute($_event_, "get_runtime", array(0 => "filtered_content"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-summary-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-btn-group ai1ec-actions\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 72
                        if (isset($context["is_ticket_button_enabled"])) { $_is_ticket_button_enabled_ = $context["is_ticket_button_enabled"]; } else { $_is_ticket_button_enabled_ = null; }
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if (($_is_ticket_button_enabled_ && (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method"))))) {
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary
\t\t\t\t\t\t\t\t\t\t\t\t\t\tai1ec-btn-xs ai1ec-buy-tickets\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 76
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method"), "html_attr");
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 77
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "ticket_url_label"), "method"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 79
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a ";
                        if (isset($context["data_type_events"])) { $_data_type_events_ = $context["data_type_events"]; } else { $_data_type_events_ = null; }
                        echo $_data_type_events_;
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-read-more ai1ec-btn ai1ec-btn-default
\t\t\t\t\t\t\t\t\t\t\t\t\tai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 82
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 83
                        if (isset($context["text_read_more"])) { $_text_read_more_ = $context["text_read_more"]; } else { $_text_read_more_ = null; }
                        echo twig_escape_filter($this->env, $_text_read_more_, "html", null, true);
                        echo " <i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        // line 86
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        $context["categories"] = $this->getAttribute($_event_, "get_runtime", array(0 => "categories_html"), "method");
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        $context["tags"] = $this->getAttribute($_event_, "get_runtime", array(0 => "tags_html"), "method");
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                        if ((!twig_test_empty($_categories_))) {
                            // line 89
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-field-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 92
                            if (isset($context["text_categories"])) { $_text_categories_ = $context["text_categories"]; } else { $_text_categories_ = null; }
                            echo twig_escape_filter($this->env, $_text_categories_, "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 94
                            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                            echo $_categories_;
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 97
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
                        if ((!twig_test_empty($_tags_))) {
                            // line 98
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-field-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 101
                            if (isset($context["text_tags"])) { $_text_tags_ = $context["text_tags"]; } else { $_text_tags_ = null; }
                            echo twig_escape_filter($this->env, $_text_tags_, "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 103
                            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
                            echo $_tags_;
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo " ";
                    // line 111
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 112
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo " ";
            // line 115
            echo "\t";
        }
        echo " ";
        // line 116
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 118
        if (isset($context["pagination_links"])) { $_pagination_links_ = $context["pagination_links"]; } else { $_pagination_links_ = null; }
        echo $_pagination_links_;
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "agenda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 118,  349 => 116,  345 => 115,  343 => 114,  335 => 112,  328 => 111,  326 => 110,  316 => 106,  309 => 103,  303 => 101,  298 => 98,  294 => 97,  287 => 94,  281 => 92,  276 => 89,  272 => 88,  268 => 87,  265 => 86,  258 => 83,  253 => 82,  245 => 79,  239 => 77,  234 => 76,  229 => 73,  225 => 72,  215 => 67,  211 => 65,  207 => 61,  204 => 60,  194 => 57,  186 => 52,  182 => 50,  175 => 47,  169 => 46,  165 => 45,  162 => 44,  158 => 42,  151 => 40,  148 => 39,  144 => 38,  139 => 37,  124 => 29,  119 => 28,  114 => 27,  109 => 26,  106 => 25,  100 => 24,  95 => 23,  91 => 21,  84 => 19,  81 => 18,  76 => 17,  71 => 16,  66 => 15,  61 => 14,  56 => 13,  48 => 11,  45 => 10,  39 => 9,  32 => 6,  26 => 4,  36 => 12,  29 => 5,  19 => 1,);
    }
}
