<?php

/* event-popup.twig */
class __TwigTemplate_943e432a0dcbd7fe60a569412aaad985e131799f5363073300d0a6cd788b4d71 extends Twig_Template
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
        echo "<div class=\"ai1ec-popover ai1ec-popup ";
        if (isset($context["popup_classes"])) { $_popup_classes_ = $context["popup_classes"]; } else { $_popup_classes_ = null; }
        echo twig_escape_filter($this->env, $_popup_classes_, "html", null, true);
        echo "\">

\t";
        // line 3
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        $context["category_colors"] = $this->getAttribute($_event_, "get_runtime", array(0 => "category_colors"), "method");
        // line 4
        echo "\t";
        if (isset($context["category_colors"])) { $_category_colors_ = $context["category_colors"]; } else { $_category_colors_ = null; }
        if ((!twig_test_empty($_category_colors_))) {
            // line 5
            echo "\t\t<div class=\"ai1ec-color-swatches\">";
            if (isset($context["category_colors"])) { $_category_colors_ = $context["category_colors"]; } else { $_category_colors_ = null; }
            echo $_category_colors_;
            echo "</div>
\t";
        }
        // line 7
        echo "
\t<span class=\"ai1ec-popup-title\">
\t\t<a href=\"";
        // line 9
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
        echo "\"
\t\t\t>";
        // line 10
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo $this->env->getExtension('ai1ec')->truncate($this->getAttribute($_event_, "get_runtime", array(0 => "filtered_title"), "method"));
        echo "</a>
\t\t";
        // line 11
        if (isset($context["show_location_in_title"])) { $_show_location_in_title_ = $context["show_location_in_title"]; } else { $_show_location_in_title_ = null; }
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if (($_show_location_in_title_ && (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "venue"), "method"))))) {
            // line 12
            echo "\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t>";
            // line 13
            if (isset($context["text_venue_separator"])) { $_text_venue_separator_ = $context["text_venue_separator"]; } else { $_text_venue_separator_ = null; }
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo twig_escape_filter($this->env, sprintf($_text_venue_separator_, $this->getAttribute($_event_, "get", array(0 => "venue"), "method")), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 15
        echo "\t\t";
        if (isset($context["is_ticket_button_enabled"])) { $_is_ticket_button_enabled_ = $context["is_ticket_button_enabled"]; } else { $_is_ticket_button_enabled_ = null; }
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if (($_is_ticket_button_enabled_ && (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method"))))) {
            // line 16
            echo "\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\thref=\"";
            // line 18
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method"), "html_attr");
            echo "\"
\t\t\t\t>";
            // line 19
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "ticket_url_label"), "method"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 21
        echo "\t</span>

\t";
        // line 23
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        $context["edit_post_link"] = $this->getAttribute($_event_, "get_runtime", array(0 => "edit_post_link"), "method");
        // line 24
        echo "\t";
        if (isset($context["edit_post_link"])) { $_edit_post_link_ = $context["edit_post_link"]; } else { $_edit_post_link_ = null; }
        if ((!twig_test_empty($_edit_post_link_))) {
            // line 25
            echo "\t\t<a class=\"post-edit-link\" href=\"";
            if (isset($context["edit_post_link"])) { $_edit_post_link_ = $context["edit_post_link"]; } else { $_edit_post_link_ = null; }
            echo $_edit_post_link_;
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
            // line 26
            if (isset($context["text_edit"])) { $_text_edit_ = $context["text_edit"]; } else { $_text_edit_ = null; }
            echo twig_escape_filter($this->env, $_text_edit_, "html", null, true);
            echo "
\t\t</a>
\t";
        }
        // line 29
        echo "
\t<div class=\"ai1ec-event-time\">
\t\t";
        // line 31
        if (isset($context["popup_timespan"])) { $_popup_timespan_ = $context["popup_timespan"]; } else { $_popup_timespan_ = null; }
        if (twig_test_empty($_popup_timespan_)) {
            // line 32
            echo "\t\t\t";
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo $this->env->getExtension('ai1ec')->timespan($_event_, "short");
            echo "
\t\t";
        } else {
            // line 34
            echo "\t\t\t";
            if (isset($context["popup_timespan"])) { $_popup_timespan_ = $context["popup_timespan"]; } else { $_popup_timespan_ = null; }
            echo $_popup_timespan_;
            echo "
\t\t";
        }
        // line 36
        echo "\t</div>

\t";
        // line 38
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo $this->env->getExtension('ai1ec')->avatar($_event_, array(0 => "post_thumbnail", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar"));
        // line 43
        echo "

\t";
        // line 45
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        $context["post_excerpt"] = trim($this->getAttribute($_event_, "get_runtime", array(0 => "post_excerpt"), "method"));
        // line 46
        echo "\t";
        if (isset($context["post_excerpt"])) { $_post_excerpt_ = $context["post_excerpt"]; } else { $_post_excerpt_ = null; }
        if ((!twig_test_empty($_post_excerpt_))) {
            // line 47
            echo "\t\t<div class=\"ai1ec-popup-excerpt\">";
            if (isset($context["post_excerpt"])) { $_post_excerpt_ = $context["post_excerpt"]; } else { $_post_excerpt_ = null; }
            echo $_post_excerpt_;
            echo "</div>
\t";
        }
        // line 49
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 49,  151 => 47,  147 => 46,  144 => 45,  140 => 43,  137 => 38,  133 => 36,  126 => 34,  119 => 32,  116 => 31,  112 => 29,  105 => 26,  99 => 25,  95 => 24,  92 => 23,  88 => 21,  82 => 19,  77 => 18,  68 => 15,  61 => 13,  58 => 12,  54 => 11,  49 => 10,  44 => 9,  33 => 5,  29 => 4,  324 => 78,  322 => 77,  307 => 76,  305 => 75,  290 => 74,  288 => 73,  284 => 72,  282 => 71,  277 => 69,  262 => 67,  259 => 64,  254 => 61,  247 => 58,  244 => 57,  241 => 56,  235 => 54,  229 => 52,  218 => 48,  213 => 47,  208 => 46,  203 => 45,  195 => 42,  189 => 40,  184 => 39,  178 => 38,  175 => 37,  170 => 36,  164 => 35,  146 => 34,  139 => 31,  134 => 30,  129 => 29,  123 => 25,  120 => 24,  118 => 23,  115 => 22,  111 => 21,  103 => 19,  100 => 18,  97 => 17,  79 => 16,  76 => 15,  73 => 16,  55 => 13,  50 => 10,  40 => 7,  35 => 7,  26 => 3,  19 => 1,);
    }
}
