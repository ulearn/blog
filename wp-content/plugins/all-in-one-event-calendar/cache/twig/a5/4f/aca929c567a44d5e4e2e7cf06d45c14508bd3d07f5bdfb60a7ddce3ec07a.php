<?php

/* month.twig */
class __TwigTemplate_a54faca929c567a44d5e4e2e7cf06d45c14508bd3d07f5bdfb60a7ddce3ec07a extends Twig_Template
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

<table class=\"ai1ec-month-view ai1ec-popover-boundary
\t";
        // line 4
        if (isset($context["month_word_wrap"])) { $_month_word_wrap_ = $context["month_word_wrap"]; } else { $_month_word_wrap_ = null; }
        if ($_month_word_wrap_) {
            echo "ai1ec-word-wrap";
        }
        echo "\">
\t<thead>
\t\t<tr>
\t\t\t";
        // line 7
        if (isset($context["weekdays"])) { $_weekdays_ = $context["weekdays"]; } else { $_weekdays_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_weekdays_);
        foreach ($context['_seq'] as $context["_key"] => $context["weekday"]) {
            // line 8
            echo "\t\t\t\t<th scope=\"col\" class=\"ai1ec-weekday\">";
            if (isset($context["weekday"])) { $_weekday_ = $context["weekday"]; } else { $_weekday_ = null; }
            echo twig_escape_filter($this->env, $_weekday_, "html", null, true);
            echo "</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weekday'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 13
        if (isset($context["cell_array"])) { $_cell_array_ = $context["cell_array"]; } else { $_cell_array_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_cell_array_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["week"]) {
            // line 14
            echo "\t\t\t";
            $context["added_stretcher"] = false;
            // line 15
            echo "\t\t\t<tr class=\"ai1ec-week\">
\t\t\t\t";
            // line 16
            if (isset($context["week"])) { $_week_ = $context["week"]; } else { $_week_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_week_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 17
                echo "
\t\t\t\t\t";
                // line 18
                if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
                if ((!twig_test_empty($this->getAttribute($_day_, "date")))) {
                    // line 19
                    echo "\t\t\t\t\t\t<td ";
                    if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
                    if ((!twig_test_empty($this->getAttribute($_day_, "today")))) {
                        echo "class=\"ai1ec-today\"";
                    }
                    echo ">
\t\t\t\t\t\t\t";
                    // line 21
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["added_stretcher"])) { $_added_stretcher_ = $context["added_stretcher"]; } else { $_added_stretcher_ = null; }
                    if ((!$_added_stretcher_)) {
                        // line 22
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-day-stretcher\"></div>
\t\t\t\t\t\t\t\t";
                        // line 23
                        $context["added_stretcher"] = true;
                        // line 24
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 25
                    echo "
\t\t\t\t\t\t\t<div class=\"ai1ec-day\">
\t\t\t\t\t\t\t\t<div class=\"ai1ec-date\">
\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-view\"
\t\t\t\t\t\t\t\t\t\t";
                    // line 29
                    if (isset($context["data_type"])) { $_data_type_ = $context["data_type"]; } else { $_data_type_ = null; }
                    echo $_data_type_;
                    echo "
\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 30
                    if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_day_, "date_link"), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t>";
                    // line 31
                    if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_day_, "date"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                    // line 34
                    if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_day_, "events"));
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
                        // line 35
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t";
                        // line 36
                        if (isset($context["data_type_events"])) { $_data_type_events_ = $context["data_type_events"]; } else { $_data_type_events_ = null; }
                        echo $_data_type_events_;
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 37
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if ($this->getAttribute($_event_, "is_multiday")) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t\tdata-end-day=\"";
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "multiday_end_day"), "method"), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-start-truncated=\"";
                            // line 39
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo (($this->getAttribute($_event_, "get", array(0 => "start_truncated"), "method")) ? ("true") : ("false"));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-end-truncated=\"";
                            // line 40
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo (($this->getAttribute($_event_, "get", array(0 => "end_truncated"), "method")) ? ("true") : ("false"));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t\tdata-instance-id=\"";
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event
\t\t\t\t\t\t\t\t\t\t\tai1ec-popup-trigger
\t\t\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 45
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "post_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 46
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 47
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if ($this->getAttribute($_event_, "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        // line 48
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if ($this->getAttribute($_event_, "is_multiday")) {
                            echo "ai1ec-multiday";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event\"
\t\t\t\t\t\t\t\t\t\t\t style=\"";
                        // line 52
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "color_style"), "method"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 54
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        echo $this->getAttribute($_event_, "get_runtime", array(0 => "filtered_title"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 56
                        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                        if ((!$this->getAttribute($_event_, "is_allday"))) {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 58
                            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "short_start_time"), "method"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 61
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
                        // line 64
                        if (isset($context["text_venue_separator"])) { $_text_venue_separator_ = $context["text_venue_separator"]; } else { $_text_venue_separator_ = null; }
                        $this->env->loadTemplate("event-popup.twig")->display(array_merge($context, array("text_venue_separator" => $_text_venue_separator_)));
                        // line 67
                        echo "
\t\t\t\t\t\t\t\t";
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
                    // line 69
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                } else {
                    // line 71
                    echo " ";
                    // line 72
                    echo "\t\t\t\t\t\t<td class=\"ai1ec-empty\"></td>
\t\t\t\t\t";
                }
                // line 73
                echo " ";
                // line 74
                echo "
\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo " ";
            // line 76
            echo "\t\t\t</tr>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo " ";
        // line 78
        echo "\t</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "month.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 78,  322 => 77,  307 => 76,  305 => 75,  290 => 74,  288 => 73,  284 => 72,  282 => 71,  277 => 69,  262 => 67,  259 => 64,  254 => 61,  247 => 58,  244 => 57,  241 => 56,  235 => 54,  229 => 52,  218 => 48,  213 => 47,  208 => 46,  203 => 45,  195 => 42,  189 => 40,  184 => 39,  178 => 38,  175 => 37,  170 => 36,  164 => 35,  146 => 34,  139 => 31,  134 => 30,  129 => 29,  123 => 25,  120 => 24,  118 => 23,  115 => 22,  111 => 21,  103 => 19,  100 => 18,  97 => 17,  79 => 16,  76 => 15,  73 => 14,  55 => 13,  50 => 10,  40 => 8,  35 => 7,  26 => 4,  19 => 1,);
    }
}
