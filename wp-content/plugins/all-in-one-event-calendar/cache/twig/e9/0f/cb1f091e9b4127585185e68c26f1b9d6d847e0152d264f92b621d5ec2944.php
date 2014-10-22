<?php

/* posterboard.twig */
class __TwigTemplate_e90fcb1f091e9b4127585185e68c26f1b9d6d847e0152d264f92b621d5ec2944 extends Twig_Template
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

<div class=\"ai1ec-posterboard-view\"
\tdata-ai1ec-tile-min-width=\"";
        // line 4
        if (isset($context["tile_min_width"])) { $_tile_min_width_ = $context["tile_min_width"]; } else { $_tile_min_width_ = null; }
        echo twig_escape_filter($this->env, $_tile_min_width_, "html", null, true);
        echo "\">
\t";
        // line 5
        if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
        if (twig_test_empty($_dates_)) {
            // line 6
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("There are no upcoming events to display at this time."), "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 10
            echo "\t\t";
            if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_dates_);
            foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
                // line 11
                echo "\t\t\t";
                if (isset($context["date_info"])) { $_date_info_ = $context["date_info"]; } else { $_date_info_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_date_info_, "events"));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 12
                    echo "\t\t\t\t";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_category_);
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 13
                        echo "\t\t\t\t\t<div class=\"ai1ec-event
\t\t\t\t\t\tai1ec-event-id-";
                        // line 14
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "post_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 15
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t";
                        // line 16
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if ($this->getAttribute($_event_, "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        echo "\">
\t\t\t\t\t\t<div class=\"ai1ec-event-wrap ai1ec-clearfix\">
\t\t\t\t\t\t\t<div class=\"ai1ec-date-block-wrap\"
\t\t\t\t\t\t\t\t";
                        // line 19
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->getAttribute($_event_, "get_runtime", array(0 => "category_bg_color"), "method");
                        echo ">
\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-view\"
\t\t\t\t\t\t\t\t\thref=\"";
                        // line 21
                        if (isset($context["date_info"])) { $_date_info_ = $context["date_info"]; } else { $_date_info_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_date_info_, "href"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t";
                        // line 22
                        if (isset($context["data_type"])) { $_data_type_ = $context["data_type"]; } else { $_data_type_ = null; }
                        echo $_data_type_;
                        echo ">
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-month\">";
                        // line 23
                        if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month($_date_), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-day\">";
                        // line 24
                        if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day($_date_), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-weekday\">";
                        // line 25
                        if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday($_date_), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t";
                        // line 26
                        if (isset($context["show_year_in_agenda_dates"])) { $_show_year_in_agenda_dates_ = $context["show_year_in_agenda_dates"]; } else { $_show_year_in_agenda_dates_ = null; }
                        if ($_show_year_in_agenda_dates_) {
                            // line 27
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-year\">";
                            if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->year($_date_), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                        // line 32
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        $context["edit_post_link"] = $this->getAttribute($_event_, "get_runtime", array(0 => "edit_post_link"), "method");
                        // line 33
                        echo "\t\t\t\t\t\t\t";
                        if (isset($context["edit_post_link"])) { $_edit_post_link_ = $context["edit_post_link"]; } else { $_edit_post_link_ = null; }
                        if ((!twig_test_empty($_edit_post_link_))) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t<a class=\"post-edit-link\" href=\"";
                            if (isset($context["edit_post_link"])) { $_edit_post_link_ = $context["edit_post_link"]; } else { $_edit_post_link_ = null; }
                            echo $_edit_post_link_;
                            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 35
                            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Edit"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "
\t\t\t\t\t\t\t<div class=\"ai1ec-event-title-wrap\">
\t\t\t\t\t\t\t\t";
                        // line 40
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        $context["title"] = $this->getAttribute($_event_, "get_runtime", array(0 => "filtered_title"), "method");
                        // line 41
                        echo "\t\t\t\t\t\t\t\t";
                        if (isset($context["show_location_in_title"])) { $_show_location_in_title_ = $context["show_location_in_title"]; } else { $_show_location_in_title_ = null; }
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        $context["location"] = ((($_show_location_in_title_ && (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "venue"), "method"))))) ? ((" " . sprintf(Ai1ec_I18n::__("@ %s"), $this->getAttribute($_event_, "get", array(0 => "venue"), "method")))) : (""));
                        // line 46
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-title\"
\t\t\t\t\t\t\t\t\ttitle=\"";
                        // line 47
                        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                        if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
                        echo ($_title_ . $_location_);
                        echo "\"><div>
\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 49
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t  ";
                        // line 50
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->getAttribute($_event_, "get_runtime", array(0 => "category_text_color"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t  ";
                        // line 51
                        if (isset($context["data_type_events"])) { $_data_type_events_ = $context["data_type_events"]; } else { $_data_type_events_ = null; }
                        echo $_data_type_events_;
                        echo ">
\t\t\t\t\t\t\t\t\t\t";
                        // line 52
                        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                        echo $_title_;
                        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        // line 54
                        if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
                        if ((!twig_test_empty($_location_))) {
                            // line 55
                            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\">";
                            if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
                            echo twig_escape_filter($this->env, $_location_, "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 57
                        echo "\t\t\t\t\t\t\t\t</div></div>
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t";
                        // line 59
                        if (isset($context["is_ticket_button_enabled"])) { $_is_ticket_button_enabled_ = $context["is_ticket_button_enabled"]; } else { $_is_ticket_button_enabled_ = null; }
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if (($_is_ticket_button_enabled_ && (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method"))))) {
                            // line 60
                            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary
\t\t\t\t\t\t\t\t\t\t\t\tai1ec-btn-xs ai1ec-buy-tickets\"
\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\" href=\"";
                            // line 62
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method"), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 63
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "ticket_url_label"), "method"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->env->getExtension('ai1ec')->timespan($_event_);
                        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ai1ec-clearfix\">
\t\t\t\t\t\t\t\t";
                        // line 69
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->env->getExtension('ai1ec')->avatar($_event_, array(0 => "post_thumbnail", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar"));
                        // line 74
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 75
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        $context["post_excerpt"] = trim($this->getAttribute($_event_, "get_runtime", array(0 => "post_excerpt"), "method"));
                        // line 76
                        echo "\t\t\t\t\t\t\t\t";
                        if (isset($context["post_excerpt"])) { $_post_excerpt_ = $context["post_excerpt"]; } else { $_post_excerpt_ = null; }
                        if ((!twig_test_empty($_post_excerpt_))) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 78
                            if (isset($context["post_excerpt"])) { $_post_excerpt_ = $context["post_excerpt"]; } else { $_post_excerpt_ = null; }
                            echo $_post_excerpt_;
                            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 81
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        // line 82
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        $context["categories"] = $this->getAttribute($_event_, "get_runtime", array(0 => "categories_html"), "method");
                        // line 83
                        echo "\t\t\t\t\t\t\t";
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        $context["tags"] = $this->getAttribute($_event_, "get_runtime", array(0 => "tags_html"), "method");
                        // line 84
                        echo "\t\t\t\t\t\t\t";
                        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
                        if (((!twig_test_empty($_categories_)) || (!twig_test_empty($_tags_)))) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                            // line 87
                            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                            if ((!twig_test_empty($_categories_))) {
                                // line 88
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 89
                                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                                echo $_categories_;
                                echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 92
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
                            if ((!twig_test_empty($_tags_))) {
                                // line 93
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 94
                                if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
                                echo $_tags_;
                                echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t";
                        }
                        // line 100
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo " ";
                    // line 103
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 104
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            // line 105
            echo "\t";
        }
        echo " ";
        // line 106
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 108
        if (isset($context["pagination_links"])) { $_pagination_links_ = $context["pagination_links"]; } else { $_pagination_links_ = null; }
        echo $_pagination_links_;
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "posterboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 108,  335 => 106,  331 => 105,  324 => 104,  317 => 103,  315 => 102,  307 => 100,  302 => 97,  295 => 94,  292 => 93,  288 => 92,  281 => 89,  278 => 88,  275 => 87,  271 => 85,  266 => 84,  262 => 83,  259 => 82,  256 => 81,  249 => 78,  246 => 77,  242 => 76,  239 => 75,  236 => 74,  233 => 69,  224 => 65,  218 => 63,  213 => 62,  209 => 60,  205 => 59,  201 => 57,  194 => 55,  191 => 54,  185 => 52,  180 => 51,  175 => 50,  170 => 49,  163 => 47,  160 => 46,  155 => 41,  152 => 40,  148 => 38,  142 => 35,  136 => 34,  132 => 33,  129 => 32,  124 => 29,  117 => 27,  114 => 26,  109 => 25,  104 => 24,  99 => 23,  94 => 22,  89 => 21,  83 => 19,  74 => 16,  69 => 15,  64 => 14,  61 => 13,  55 => 12,  49 => 11,  43 => 10,  37 => 7,  34 => 6,  31 => 5,  26 => 4,  19 => 1,);
    }
}
