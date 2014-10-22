<?php

/* stream.twig */
class __TwigTemplate_26624a4f92c0d3894cd5eb735508b4c009471e957872345c3b56f7b41ef3ea7e extends Twig_Template
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

<div class=\"ai1ec-stream-view\">
\t";
        // line 4
        if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
        if (twig_test_empty($_dates_)) {
            // line 5
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("There are no upcoming events to display at this time."), "html", null, true);
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
                echo "\t\t\t<div class=\"ai1ec-date ";
                if (isset($context["date_info"])) { $_date_info_ = $context["date_info"]; } else { $_date_info_ = null; }
                if ($this->getAttribute($_date_info_, "today")) {
                    echo "ai1ec-today";
                }
                echo "\">
\t\t\t\t<div class=\"ai1ec-date-title\">
\t\t\t\t\t<a class=\"ai1ec-load-view\" href=\"";
                // line 12
                if (isset($context["date_info"])) { $_date_info_ = $context["date_info"]; } else { $_date_info_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_date_info_, "href"), "html_attr");
                echo "\"
\t\t\t\t\t\t";
                // line 13
                if (isset($context["data_type"])) { $_data_type_ = $context["data_type"]; } else { $_data_type_ = null; }
                echo $_data_type_;
                echo ">
\t\t\t\t\t\t";
                // line 14
                if (isset($context["show_year_in_agenda_dates"])) { $_show_year_in_agenda_dates_ = $context["show_year_in_agenda_dates"]; } else { $_show_year_in_agenda_dates_ = null; }
                if ($_show_year_in_agenda_dates_) {
                    // line 15
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n($_date_, "F j, Y (l)"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n($_date_, "F j (l)"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t</a>
\t\t\t\t</div>

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
                        echo "\t\t\t\t\t\t\t<div class=\"ai1ec-clearfix ai1ec-event
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
                        echo "\">

\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-inner ai1ec-clearfix\">

\t\t\t\t\t\t\t\t\t";
                        // line 32
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        $context["edit_post_link"] = $this->getAttribute($_event_, "get_runtime", array(0 => "edit_post_link"), "method");
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (isset($context["edit_post_link"])) { $_edit_post_link_ = $context["edit_post_link"]; } else { $_edit_post_link_ = null; }
                        if ((!twig_test_empty($_edit_post_link_))) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\" href=\"";
                            if (isset($context["edit_post_link"])) { $_edit_post_link_ = $context["edit_post_link"]; } else { $_edit_post_link_ = null; }
                            echo $_edit_post_link_;
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 35
                            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Edit"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 41
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t  ";
                        // line 42
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->getAttribute($_event_, "get_runtime", array(0 => "category_text_color"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t  ";
                        // line 43
                        if (isset($context["data_type_events"])) { $_data_type_events_ = $context["data_type_events"]; } else { $_data_type_events_ = null; }
                        echo $_data_type_events_;
                        echo "
\t\t\t\t\t\t\t\t\t\t  title=\"";
                        // line 44
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->getAttribute($_event_, "get_runtime", array(0 => "filtered_title"), "method");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 45
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->getAttribute($_event_, "get_runtime", array(0 => "filtered_title"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-avatar-wrap ai1ec-pull-left\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 50
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->env->getExtension('ai1ec')->avatar($_event_, array(0 => "post_thumbnail", 1 => "content_img", 2 => "category_avatar", 3 => "default_avatar"));
                        // line 55
                        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-meta\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 61
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->env->getExtension('ai1ec')->timespan($_event_, "short");
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        // line 63
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if ((!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "venue"), "method")))) {
                            // line 64
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags ai1ec-meta-divide\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 67
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "venue"), "method"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 70
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 72
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->getAttribute($_event_, "get_runtime", array(0 => "post_excerpt"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo " ";
                    // line 77
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 78
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo " ";
            // line 81
            echo "\t";
        }
        echo " ";
        // line 82
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 84
        if (isset($context["pagination_links"])) { $_pagination_links_ = $context["pagination_links"]; } else { $_pagination_links_ = null; }
        echo $_pagination_links_;
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "stream.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 84,  244 => 82,  240 => 81,  238 => 80,  230 => 78,  223 => 77,  221 => 76,  209 => 72,  205 => 70,  198 => 67,  193 => 64,  190 => 63,  176 => 55,  173 => 50,  164 => 45,  159 => 44,  154 => 43,  149 => 42,  144 => 41,  139 => 38,  133 => 35,  123 => 33,  120 => 32,  110 => 28,  97 => 25,  91 => 24,  86 => 23,  73 => 17,  66 => 15,  58 => 13,  26 => 4,  38 => 9,  33 => 5,  28 => 4,  61 => 11,  54 => 8,  44 => 10,  31 => 4,  48 => 8,  29 => 5,  24 => 4,  184 => 61,  178 => 66,  172 => 65,  168 => 63,  165 => 62,  157 => 58,  151 => 56,  145 => 55,  134 => 48,  128 => 46,  122 => 45,  111 => 38,  105 => 27,  100 => 26,  89 => 28,  78 => 25,  71 => 20,  67 => 19,  63 => 14,  60 => 12,  53 => 12,  46 => 12,  35 => 9,  25 => 5,  127 => 34,  115 => 31,  108 => 29,  104 => 27,  101 => 26,  96 => 25,  83 => 26,  80 => 19,  76 => 19,  72 => 18,  68 => 13,  62 => 16,  57 => 15,  49 => 7,  42 => 7,  37 => 5,  116 => 30,  103 => 25,  95 => 22,  90 => 24,  84 => 20,  79 => 19,  74 => 14,  69 => 17,  64 => 16,  55 => 11,  50 => 14,  40 => 9,  32 => 6,  27 => 3,  22 => 2,  19 => 1,);
    }
}
