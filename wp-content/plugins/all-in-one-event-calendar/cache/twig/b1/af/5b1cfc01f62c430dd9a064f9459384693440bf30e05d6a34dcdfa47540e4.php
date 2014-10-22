<?php

/* agenda-widget.twig */
class __TwigTemplate_b1af5b1cfc01f62c430dd9a064f9459384693440bf30e05d6a34dcdfa47540e4 extends Twig_Template
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
        if (isset($context["before_widget"])) { $_before_widget_ = $context["before_widget"]; } else { $_before_widget_ = null; }
        echo $_before_widget_;
        echo "

";
        // line 3
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ((!twig_test_empty($_title_))) {
            // line 4
            echo "\t";
            if (isset($context["before_title"])) { $_before_title_ = $context["before_title"]; } else { $_before_title_ = null; }
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            if (isset($context["after_title"])) { $_after_title_ = $context["after_title"]; } else { $_after_title_ = null; }
            echo (($_before_title_ . $_title_) . $_after_title_);
            echo "
";
        }
        // line 6
        echo "
<div class=\"timely ai1ec-agenda-widget-view ai1ec-clearfix\">

\t";
        // line 9
        if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
        if (twig_test_empty($_dates_)) {
            // line 10
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 11
            if (isset($context["text_upcoming_events"])) { $_text_upcoming_events_ = $context["text_upcoming_events"]; } else { $_text_upcoming_events_ = null; }
            echo twig_escape_filter($this->env, $_text_upcoming_events_, "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 14
            echo "\t\t<div>
\t\t\t";
            // line 15
            if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_dates_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
                // line 16
                echo "\t\t\t\t<div class=\"ai1ec-date
\t\t\t\t\t";
                // line 17
                if (isset($context["date_info"])) { $_date_info_ = $context["date_info"]; } else { $_date_info_ = null; }
                if ((!twig_test_empty($this->getAttribute($_date_info_, "today")))) {
                    echo "ai1ec-today";
                }
                echo "\">
\t\t\t\t\t<a class=\"ai1ec-date-title ai1ec-load-view\"
\t\t\t\t\t\thref=\"";
                // line 19
                if (isset($context["date_info"])) { $_date_info_ = $context["date_info"]; } else { $_date_info_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_date_info_, "href"), "html_attr");
                echo "\">
\t\t\t\t\t\t<div class=\"ai1ec-month\">";
                // line 20
                if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month($_date_), "html", null, true);
                echo "</div>
\t\t\t\t\t\t<div class=\"ai1ec-day\">";
                // line 21
                if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day($_date_), "html", null, true);
                echo "</div>
\t\t\t\t\t\t<div class=\"ai1ec-weekday\">";
                // line 22
                if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday($_date_), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
                // line 23
                if (isset($context["show_year_in_agenda_dates"])) { $_show_year_in_agenda_dates_ = $context["show_year_in_agenda_dates"]; } else { $_show_year_in_agenda_dates_ = null; }
                if ($_show_year_in_agenda_dates_) {
                    // line 24
                    echo "\t\t\t\t\t\t\t<div class=\"ai1ec-year\">";
                    if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->year($_date_), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"ai1ec-date-events\">
\t\t\t\t\t\t";
                // line 28
                if (isset($context["date_info"])) { $_date_info_ = $context["date_info"]; } else { $_date_info_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_date_info_, "events"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 29
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_category_);
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 30
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-event
\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 31
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "post_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 32
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 33
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if ($this->getAttribute($_event_, "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        echo "\">

\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 35
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-popup-trigger\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 37
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if ($this->getAttribute($_event_, "is_allday")) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-allday-badge\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 39
                            if (isset($context["text_all_day"])) { $_text_all_day_ = $context["text_all_day"]; } else { $_text_all_day_ = null; }
                            echo twig_escape_filter($this->env, $_text_all_day_, "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 42
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 43
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "short_start_time"), "method"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 46
                        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 48
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->env->getExtension('ai1ec')->truncate($this->getAttribute($_event_, "get_runtime", array(0 => "filtered_title"), "method"));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 49
                        if (isset($context["show_location_in_title"])) { $_show_location_in_title_ = $context["show_location_in_title"]; } else { $_show_location_in_title_ = null; }
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if (($_show_location_in_title_ && (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "venue"), "method"))))) {
                            // line 50
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 51
                            if (isset($context["text_venue_separator"])) { $_text_venue_separator_ = $context["text_venue_separator"]; } else { $_text_venue_separator_ = null; }
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo twig_escape_filter($this->env, sprintf($_text_venue_separator_, $this->getAttribute($_event_, "get", array(0 => "venue"), "method")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 53
                        echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
                        // line 56
                        if (isset($context["text_venue_separator"])) { $_text_venue_separator_ = $context["text_venue_separator"]; } else { $_text_venue_separator_ = null; }
                        $this->env->loadTemplate("event-popup.twig")->display(array_merge($context, array("text_venue_separator" => $_text_venue_separator_)));
                        // line 59
                        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo " ";
                    // line 62
                    echo "\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 63
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo " ";
            // line 66
            echo "\t\t</div>
\t";
        }
        // line 67
        echo " ";
        // line 68
        echo "
\t";
        // line 69
        if (isset($context["show_calendar_button"])) { $_show_calendar_button_ = $context["show_calendar_button"]; } else { $_show_calendar_button_ = null; }
        if (isset($context["show_subscribe_buttons"])) { $_show_subscribe_buttons_ = $context["show_subscribe_buttons"]; } else { $_show_subscribe_buttons_ = null; }
        if (($_show_calendar_button_ || $_show_subscribe_buttons_)) {
            // line 70
            echo "\t\t<p>
\t\t\t";
            // line 71
            if (isset($context["show_calendar_button"])) { $_show_calendar_button_ = $context["show_calendar_button"]; } else { $_show_calendar_button_ = null; }
            if ($_show_calendar_button_) {
                // line 72
                echo "\t\t\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-pull-right
\t\t\t\t\tai1ec-calendar-link\"
\t\t\t\t\thref=\"";
                // line 74
                if (isset($context["calendar_url"])) { $_calendar_url_ = $context["calendar_url"]; } else { $_calendar_url_ = null; }
                echo twig_escape_filter($this->env, $_calendar_url_, "html_attr");
                echo "\">
\t\t\t\t\t";
                // line 75
                if (isset($context["text_view_calendar"])) { $_text_view_calendar_ = $context["text_view_calendar"]; } else { $_text_view_calendar_ = null; }
                echo twig_escape_filter($this->env, $_text_view_calendar_, "html", null, true);
                echo "
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
\t\t\t\t</a>
\t\t\t";
            }
            // line 79
            echo "
\t\t\t";
            // line 80
            if (isset($context["show_subscribe_buttons"])) { $_show_subscribe_buttons_ = $context["show_subscribe_buttons"]; } else { $_show_subscribe_buttons_ = null; }
            if ($_show_subscribe_buttons_) {
                // line 81
                echo "\t\t\t\t";
                if (isset($context["subscribe_url"])) { $_subscribe_url_ = $context["subscribe_url"]; } else { $_subscribe_url_ = null; }
                if (isset($context["subscribe_url_no_html"])) { $_subscribe_url_no_html_ = $context["subscribe_url_no_html"]; } else { $_subscribe_url_no_html_ = null; }
                if (isset($context["text_subscribe_label"])) { $_text_subscribe_label_ = $context["text_subscribe_label"]; } else { $_text_subscribe_label_ = null; }
                if (isset($context["subscribe_buttons_text"])) { $_subscribe_buttons_text_ = $context["subscribe_buttons_text"]; } else { $_subscribe_buttons_text_ = null; }
                $this->env->loadTemplate("subscribe-buttons.twig")->display(array_merge($context, array("button_classes" => "ai1ec-btn-xs", "export_url" => $_subscribe_url_, "export_url_no_html" => $_subscribe_url_no_html_, "subscribe_label" => $_text_subscribe_label_, "text" => $_subscribe_buttons_text_)));
                // line 88
                echo "\t\t\t";
            }
            // line 89
            echo "\t\t</p>
\t";
        }
        // line 90
        echo " ";
        // line 91
        echo "
</div>

";
        // line 94
        if (isset($context["after_widget"])) { $_after_widget_ = $context["after_widget"]; } else { $_after_widget_ = null; }
        echo $_after_widget_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "agenda-widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 94,  348 => 91,  346 => 90,  342 => 89,  339 => 88,  332 => 81,  329 => 80,  326 => 79,  318 => 75,  313 => 74,  309 => 72,  306 => 71,  303 => 70,  299 => 69,  296 => 68,  294 => 67,  290 => 66,  288 => 65,  272 => 63,  257 => 62,  255 => 61,  239 => 59,  236 => 56,  231 => 53,  224 => 51,  221 => 50,  217 => 49,  212 => 48,  208 => 46,  201 => 43,  198 => 42,  191 => 39,  188 => 38,  185 => 37,  179 => 35,  171 => 33,  166 => 32,  161 => 31,  158 => 30,  139 => 29,  121 => 28,  117 => 26,  110 => 24,  107 => 23,  102 => 22,  97 => 21,  92 => 20,  87 => 19,  79 => 17,  76 => 16,  58 => 15,  55 => 14,  48 => 11,  45 => 10,  42 => 9,  37 => 6,  28 => 4,  25 => 3,  19 => 1,);
    }
}
