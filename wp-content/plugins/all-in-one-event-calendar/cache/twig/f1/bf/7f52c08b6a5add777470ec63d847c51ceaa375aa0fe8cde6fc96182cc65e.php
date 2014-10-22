<?php

/* weekday.base.twig */
class __TwigTemplate_f1bf7f52c08b6a5add777470ec63d847c51ceaa375aa0fe8cde6fc96182cc65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'weekday_html' => array($this, 'block_weekday_html'),
            'event_popup' => array($this, 'block_event_popup'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        echo $_navigation_;
        echo "

<table class=\"ai1ec-";
        // line 5
        $this->displayBlock('name', $context, $blocks);
        echo "-view-original\">
\t<thead>
\t\t<tr>
\t\t\t";
        // line 8
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
        foreach ($context['_seq'] as $context["date"] => $context["day"]) {
            // line 9
            echo "\t\t\t\t<th scope=\"col\" class=\"ai1ec-weekday
\t\t\t\t\t";
            // line 10
            if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
            if ((!twig_test_empty($this->getAttribute($_day_, "today")))) {
                echo "ai1ec-today";
            }
            echo "\">

\t\t\t\t\t";
            // line 13
            echo "\t\t\t\t\t";
            if (isset($context["show_reveal_button"])) { $_show_reveal_button_ = $context["show_reveal_button"]; } else { $_show_reveal_button_ = null; }
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($_show_reveal_button_ && $this->getAttribute($_loop_, "last"))) {
                // line 14
                echo "\t\t\t\t\t\t<div class=\"ai1ec-reveal-full-day\">
\t\t\t\t\t\t\t<button class=\"ai1ec-btn ai1ec-btn-info ai1ec-btn-xs
\t\t\t\t\t\t\t\t\tai1ec-tooltip-trigger\"
\t\t\t\t\t\t\t\tdata-placement=\"left\"
\t\t\t\t\t\t\t\ttitle=\"";
                // line 18
                if (isset($context["text_full_day"])) { $_text_full_day_ = $context["text_full_day"]; } else { $_text_full_day_ = null; }
                echo twig_escape_filter($this->env, $_text_full_day_, "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-expand\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 23
            echo "
\t\t\t\t\t";
            // line 24
            $this->displayBlock('weekday_html', $context, $blocks);
            // line 31
            echo "
\t\t\t\t</th>
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
        unset($context['_seq'], $context['_iterated'], $context['date'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t</tr>
\t\t<tr>
\t\t\t";
        // line 36
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
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 37
            echo "\t\t\t\t<td class=\"ai1ec-allday-events
\t\t\t\t\t";
            // line 38
            if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
            if ((!twig_test_empty($this->getAttribute($_day_, "today")))) {
                echo "ai1ec-today";
            }
            echo "\">

\t\t\t\t\t";
            // line 40
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                // line 41
                echo "\t\t\t\t\t\t<div class=\"ai1ec-allday-label\">";
                if (isset($context["text_all_day"])) { $_text_all_day_ = $context["text_all_day"]; } else { $_text_all_day_ = null; }
                echo twig_escape_filter($this->env, $_text_all_day_, "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 43
            echo "
\t\t\t\t\t";
            // line 44
            if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_day_, "allday"));
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
                // line 45
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t";
                // line 46
                if (isset($context["data_type_events"])) { $_data_type_events_ = $context["data_type_events"]; } else { $_data_type_events_ = null; }
                echo $_data_type_events_;
                echo "
\t\t\t\t\t\t\tdata-instance-id=\"";
                // line 47
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "instance_id"), "method"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 49
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "post_id"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 50
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "instance_id"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\tai1ec-allday
\t\t\t\t\t\t\t\t";
                // line 52
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                if ($this->getAttribute($_event_, "is_multiday")) {
                    echo "ai1ec-multiday";
                }
                echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t<div class=\"ai1ec-event\"
\t\t\t\t\t\t\t\tstyle=\"";
                // line 55
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "color_style"), "method"), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t";
                // line 57
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo $this->getAttribute($_event_, "get_runtime", array(0 => "filtered_title"), "method");
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 58
                if (isset($context["show_location_in_title"])) { $_show_location_in_title_ = $context["show_location_in_title"]; } else { $_show_location_in_title_ = null; }
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                if (($_show_location_in_title_ && (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "venue"), "method"))))) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 60
                    if (isset($context["text_venue_separator"])) { $_text_venue_separator_ = $context["text_venue_separator"]; } else { $_text_venue_separator_ = null; }
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf($_text_venue_separator_, $this->getAttribute($_event_, "get", array(0 => "venue"), "method")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t";
                // line 66
                $this->displayBlock('event_popup', $context, $blocks);
                // line 72
                echo "
\t\t\t\t\t";
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
            // line 73
            echo " ";
            // line 74
            echo "
\t\t\t\t</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo " ";
        // line 77
        echo "\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr class=\"ai1ec-";
        // line 80
        $this->displayBlock("name", $context, $blocks);
        echo "\">
\t\t\t";
        // line 81
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
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 82
            echo "\t\t\t\t<td ";
            if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
            if ((!twig_test_empty($this->getAttribute($_day_, "today")))) {
                echo "class=\"ai1ec-today\"";
            }
            echo ">

\t\t\t\t\t";
            // line 84
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                // line 85
                echo "\t\t\t\t\t\t<div class=\"ai1ec-grid-container\">
\t\t\t\t\t\t\t";
                // line 86
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-hour-marker
\t\t\t\t\t\t\t\t\t";
                    // line 88
                    if (isset($context["hour"])) { $_hour_ = $context["hour"]; } else { $_hour_ = null; }
                    if ((($_hour_ >= 8) && ($_hour_ < 18))) {
                        echo "ai1ec-business-hour";
                    }
                    echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"top: ";
                    // line 89
                    if (isset($context["hour"])) { $_hour_ = $context["hour"]; } else { $_hour_ = null; }
                    echo twig_escape_filter($this->env, ($_hour_ * 60), "html", null, true);
                    echo "px;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 91
                    if (isset($context["hour"])) { $_hour_ = $context["hour"]; } else { $_hour_ = null; }
                    if (isset($context["time_format"])) { $_time_format_ = $context["time_format"]; } else { $_time_format_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n($this->env->getExtension('ai1ec')->hour_to_datetime($_hour_), $_time_format_), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    // line 94
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["quarter"]) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-quarter-marker\"
\t\t\t\t\t\t\t\t\t\tstyle=\"top: ";
                        // line 96
                        if (isset($context["hour"])) { $_hour_ = $context["hour"]; } else { $_hour_ = null; }
                        if (isset($context["quarter"])) { $_quarter_ = $context["quarter"]; } else { $_quarter_ = null; }
                        echo twig_escape_filter($this->env, (($_hour_ * 60) + ($_quarter_ * 15)), "html", null, true);
                        echo "px;\"></div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quarter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "\t\t\t\t\t\t\t";
                if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
                if ((!twig_test_empty($this->getAttribute($_day_, "today")))) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-now-marker\" style=\"top: ";
                    if (isset($context["now_top"])) { $_now_top_ = $context["now_top"]; } else { $_now_top_ = null; }
                    echo twig_escape_filter($this->env, $_now_top_, "html", null, true);
                    echo "px;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    if (isset($context["text_now_label"])) { $_text_now_label_ = $context["text_now_label"]; } else { $_text_now_label_ = null; }
                    echo twig_escape_filter($this->env, $_text_now_label_, "html", null, true);
                    echo " ";
                    if (isset($context["now_text"])) { $_now_text_ = $context["now_text"]; } else { $_now_text_ = null; }
                    echo twig_escape_filter($this->env, $_now_text_, "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 106
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 108
            echo "
\t\t\t\t\t<div class=\"ai1ec-day\">

\t\t\t\t\t\t";
            // line 111
            if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_day_, "notallday"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["day_array"]) {
                // line 112
                echo "\t\t\t\t\t\t\t";
                if (isset($context["day_array"])) { $_day_array_ = $context["day_array"]; } else { $_day_array_ = null; }
                $context["event"] = $this->getAttribute($_day_array_, "event");
                // line 113
                echo "\t\t\t\t\t\t\t<a href=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 114
                if (isset($context["data_type_events"])) { $_data_type_events_ = $context["data_type_events"]; } else { $_data_type_events_ = null; }
                echo $_data_type_events_;
                echo "
\t\t\t\t\t\t\t\tdata-instance-id=\"";
                // line 115
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "instance_id"), "method"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 117
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "post_id"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 118
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "instance_id"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 119
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                if ($this->getAttribute($_event_, "get", array(0 => "start_truncated"), "method")) {
                    echo "ai1ec-start-truncated";
                }
                // line 120
                echo "\t\t\t\t\t\t\t\t\t";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                if ($this->getAttribute($_event_, "get", array(0 => "end_truncated"), "method")) {
                    echo "ai1ec-end-truncated";
                }
                // line 121
                echo "\t\t\t\t\t\t\t\t\t";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                if ($this->getAttribute($this->getAttribute($_event_, "get", array(0 => "_orig"), "method"), "is_multiday")) {
                    echo "ai1ec-multiday";
                }
                echo "\"
\t\t\t\t\t\t\t\tstyle=\"top: ";
                // line 122
                if (isset($context["day_array"])) { $_day_array_ = $context["day_array"]; } else { $_day_array_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_day_array_, "top"), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\theight: ";
                // line 123
                if (isset($context["day_array"])) { $_day_array_ = $context["day_array"]; } else { $_day_array_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_day_array_, "height"), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\tleft: ";
                // line 124
                if (isset($context["day_array"])) { $_day_array_ = $context["day_array"]; } else { $_day_array_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_day_array_, "indent") * $this->renderBlock("indent_multiplier", $context, $blocks)) + $this->renderBlock("indent_offset", $context, $blocks)), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\t";
                // line 125
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "color_style"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 126
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                $context["faded_color"] = $this->getAttribute($_event_, "get_runtime", array(0 => "faded_color"), "method");
                // line 127
                echo "\t\t\t\t\t\t\t\t\t";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                $context["rgba_color"] = $this->getAttribute($_event_, "get_runtime", array(0 => "rgba_color"), "method");
                // line 128
                echo "\t\t\t\t\t\t\t\t\t";
                if (isset($context["faded_color"])) { $_faded_color_ = $context["faded_color"]; } else { $_faded_color_ = null; }
                if ((!twig_test_empty($_faded_color_))) {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (isset($context["rgba_color"])) { $_rgba_color_ = $context["rgba_color"]; } else { $_rgba_color_ = null; }
                    $context["rgba1"] = sprintf($_rgba_color_, "0.05");
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (isset($context["rgba_color"])) { $_rgba_color_ = $context["rgba_color"]; } else { $_rgba_color_ = null; }
                    $context["rgba3"] = sprintf($_rgba_color_, "0.3");
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t\tborder: 1px solid ";
                    if (isset($context["faded_color"])) { $_faded_color_ = $context["faded_color"]; } else { $_faded_color_ = null; }
                    echo twig_escape_filter($this->env, $_faded_color_, "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tborder-color: ";
                    // line 132
                    if (isset($context["rgba_color"])) { $_rgba_color_ = $context["rgba_color"]; } else { $_rgba_color_ = null; }
                    echo twig_escape_filter($this->env, sprintf($_rgba_color_, "0.5"), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tbackground-image: -webkit-linear-gradient( top, ";
                    // line 133
                    if (isset($context["rgba1"])) { $_rgba1_ = $context["rgba1"]; } else { $_rgba1_ = null; }
                    echo twig_escape_filter($this->env, $_rgba1_, "html", null, true);
                    echo ", ";
                    if (isset($context["rgba3"])) { $_rgba3_ = $context["rgba3"]; } else { $_rgba3_ = null; }
                    echo twig_escape_filter($this->env, $_rgba3_, "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -moz-linear-gradient( top, ";
                    // line 134
                    if (isset($context["rgba1"])) { $_rgba1_ = $context["rgba1"]; } else { $_rgba1_ = null; }
                    echo twig_escape_filter($this->env, $_rgba1_, "html", null, true);
                    echo ", ";
                    if (isset($context["rgba3"])) { $_rgba3_ = $context["rgba3"]; } else { $_rgba3_ = null; }
                    echo twig_escape_filter($this->env, $_rgba3_, "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -ms-linear-gradient( top, ";
                    // line 135
                    if (isset($context["rgba1"])) { $_rgba1_ = $context["rgba1"]; } else { $_rgba1_ = null; }
                    echo twig_escape_filter($this->env, $_rgba1_, "html", null, true);
                    echo ", ";
                    if (isset($context["rgba3"])) { $_rgba3_ = $context["rgba3"]; } else { $_rgba3_ = null; }
                    echo twig_escape_filter($this->env, $_rgba3_, "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -o-linear-gradient( top, ";
                    // line 136
                    if (isset($context["rgba1"])) { $_rgba1_ = $context["rgba1"]; } else { $_rgba1_ = null; }
                    echo twig_escape_filter($this->env, $_rgba1_, "html", null, true);
                    echo ", ";
                    if (isset($context["rgba3"])) { $_rgba3_ = $context["rgba3"]; } else { $_rgba3_ = null; }
                    echo twig_escape_filter($this->env, $_rgba3_, "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: linear-gradient( top, ";
                    // line 137
                    if (isset($context["rgba1"])) { $_rgba1_ = $context["rgba1"]; } else { $_rgba1_ = null; }
                    echo twig_escape_filter($this->env, $_rgba1_, "html", null, true);
                    echo ", ";
                    if (isset($context["rgba3"])) { $_rgba3_ = $context["rgba3"]; } else { $_rgba3_ = null; }
                    echo twig_escape_filter($this->env, $_rgba3_, "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t";
                }
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\">

\t\t\t\t\t\t\t\t";
                // line 141
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                if ($this->getAttribute($_event_, "get", array(0 => "start_truncated"), "method")) {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-start-truncator\">◤</div>
\t\t\t\t\t\t\t\t";
                }
                // line 144
                echo "\t\t\t\t\t\t\t\t";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                if ($this->getAttribute($_event_, "get", array(0 => "end_truncated"), "method")) {
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-end-truncator\">◢</div>
\t\t\t\t\t\t\t\t";
                }
                // line 147
                echo "
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event\">
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t";
                // line 150
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "short_start_time"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t";
                // line 153
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo $this->getAttribute($_event_, "get_runtime", array(0 => "filtered_title"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 154
                if (isset($context["show_location_in_title"])) { $_show_location_in_title_ = $context["show_location_in_title"]; } else { $_show_location_in_title_ = null; }
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                if (($_show_location_in_title_ && (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "venue"), "method"))))) {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 156
                    if (isset($context["text_venue_separator"])) { $_text_venue_separator_ = $context["text_venue_separator"]; } else { $_text_venue_separator_ = null; }
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf($_text_venue_separator_, $this->getAttribute($_event_, "get", array(0 => "venue"), "method")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 158
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
                // line 163
                $this->displayBlock("event_popup", $context, $blocks);
                echo "

\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day_array'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo " ";
            // line 166
            echo "\t\t\t\t\t</div>
\t\t\t\t</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo " ";
        // line 169
        echo "\t\t</tr>
\t</tbody>
</table>

<div class=\"ai1ec-pull-left\">";
        // line 173
        if (isset($context["pagination_links"])) { $_pagination_links_ = $context["pagination_links"]; } else { $_pagination_links_ = null; }
        echo $_pagination_links_;
        echo "</div>
";
    }

    // line 5
    public function block_name($context, array $blocks = array())
    {
    }

    // line 24
    public function block_weekday_html($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t\t\t\t<a class=\"ai1ec-load-view\" href=\"";
        if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_day_, "href"), "html_attr");
        echo "\"
\t\t\t\t\t\t\t";
        // line 26
        if (isset($context["data_type"])) { $_data_type_ = $context["data_type"]; } else { $_data_type_ = null; }
        echo $_data_type_;
        echo ">
\t\t\t\t\t\t\t<span class=\"ai1ec-weekday-date\">";
        // line 27
        if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day($_date_), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<span class=\"ai1ec-weekday-day\">";
        // line 28
        if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday($_date_), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
    }

    // line 66
    public function block_event_popup($context, array $blocks = array())
    {
        // line 67
        echo "\t\t\t\t\t\t\t";
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if (isset($context["text_venue_separator"])) { $_text_venue_separator_ = $context["text_venue_separator"]; } else { $_text_venue_separator_ = null; }
        $this->env->loadTemplate("event-popup.twig")->display(array_merge($context, array("popup_timespan" => $this->env->getExtension('ai1ec')->timespan($this->getAttribute($_event_, "get", array(0 => "_orig"), "method"), "short"), "text_venue_separator" => $_text_venue_separator_)));
        // line 71
        echo "\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "weekday.base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 71,  701 => 67,  698 => 66,  690 => 28,  685 => 27,  680 => 26,  674 => 25,  671 => 24,  666 => 5,  659 => 173,  653 => 169,  651 => 168,  635 => 166,  633 => 165,  616 => 163,  609 => 158,  602 => 156,  599 => 155,  595 => 154,  590 => 153,  583 => 150,  578 => 147,  574 => 145,  570 => 144,  566 => 142,  563 => 141,  559 => 139,  550 => 137,  542 => 136,  534 => 135,  526 => 134,  518 => 133,  513 => 132,  507 => 131,  503 => 130,  499 => 129,  495 => 128,  491 => 127,  488 => 126,  483 => 125,  478 => 124,  473 => 123,  468 => 122,  460 => 121,  454 => 120,  449 => 119,  444 => 118,  439 => 117,  433 => 115,  428 => 114,  422 => 113,  418 => 112,  400 => 111,  395 => 108,  391 => 106,  380 => 102,  373 => 100,  369 => 99,  363 => 98,  353 => 96,  350 => 95,  346 => 94,  338 => 91,  332 => 89,  325 => 88,  322 => 87,  318 => 86,  315 => 85,  312 => 84,  303 => 82,  285 => 81,  281 => 80,  276 => 77,  274 => 76,  258 => 74,  256 => 73,  241 => 72,  239 => 66,  233 => 62,  226 => 60,  223 => 59,  219 => 58,  214 => 57,  208 => 55,  199 => 52,  193 => 50,  188 => 49,  182 => 47,  177 => 46,  171 => 45,  153 => 44,  150 => 43,  143 => 41,  140 => 40,  132 => 38,  129 => 37,  111 => 36,  107 => 34,  91 => 31,  89 => 24,  86 => 23,  77 => 18,  71 => 14,  66 => 13,  58 => 10,  55 => 9,  37 => 8,  31 => 5,  25 => 3,  22 => 2,  42 => 7,  36 => 5,  30 => 3,);
    }
}
