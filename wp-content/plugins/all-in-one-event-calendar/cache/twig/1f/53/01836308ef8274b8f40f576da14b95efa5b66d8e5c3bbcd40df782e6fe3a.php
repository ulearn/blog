<?php

/* bootstrap_tabs.twig */
class __TwigTemplate_1f5301836308ef8274b8f40f576da14b95efa5b66d8e5c3bbcd40df782e6fe3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'extra_html' => array($this, 'block_extra_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["stacked"])) { $_stacked_ = $context["stacked"]; } else { $_stacked_ = null; }
        if ($_stacked_) {
            echo "<div class=\"ai1ec-row\"><div class=\"ai1ec-col-sm-3\">";
        }
        // line 2
        echo "
<ul class=\"ai1ec-nav
\t";
        // line 4
        if (isset($context["stacked"])) { $_stacked_ = $context["stacked"]; } else { $_stacked_ = null; }
        if ($_stacked_) {
            // line 5
            echo "\t\tai1ec-nav-pills ai1ec-nav-stacked
\t";
        } else {
            // line 7
            echo "\t\tai1ec-nav-tabs
\t";
        }
        // line 8
        echo "\">

\t";
        // line 10
        if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tabs_);
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "name", array(), "any", true, true)) {
                // line 11
                echo "\t\t";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if ($this->getAttribute($_data_, "items", array(), "any", true, true)) {
                    // line 12
                    echo "\t\t\t<li class=\"ai1ec-dropdown\">
\t\t\t\t<a href=\"#\" data-toggle=\"ai1ec-dropdown\">
\t\t\t\t\t";
                    // line 14
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_data_, "name"), "html", null, true);
                    echo " <i class=\"ai1ec-fa ai1ec-fa-caret-down\"></i>
\t\t\t\t</a>
\t\t\t\t<ul class=\"ai1ec-dropdown-menu\">
\t\t\t\t\t";
                    // line 17
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "items"));
                    foreach ($context['_seq'] as $context["drop_id"] => $context["drop_name"]) {
                        // line 18
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#ai1ec-";
                        // line 19
                        if (isset($context["drop_id"])) { $_drop_id_ = $context["drop_id"]; } else { $_drop_id_ = null; }
                        echo twig_escape_filter($this->env, $_drop_id_, "html", null, true);
                        echo "\" data-toggle=\"ai1ec-tab\">
\t\t\t\t\t\t\t\t";
                        // line 20
                        if (isset($context["drop_name"])) { $_drop_name_ = $context["drop_name"]; } else { $_drop_name_ = null; }
                        echo twig_escape_filter($this->env, $_drop_name_, "html", null, true);
                        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['drop_id'], $context['drop_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t";
                } else {
                    // line 27
                    echo "\t\t\t<li>
\t\t\t\t<a href=\"#ai1ec-";
                    // line 28
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "\" data-toggle=\"ai1ec-tab\">";
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_data_, "name"), "html", null, true);
                    echo "</a>
\t\t\t</li>
\t\t";
                }
                // line 31
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
</ul>

";
        // line 35
        if (isset($context["stacked"])) { $_stacked_ = $context["stacked"]; } else { $_stacked_ = null; }
        if ($_stacked_) {
            echo "</div><div class=\"ai1ec-col-sm-9\">";
        }
        // line 36
        echo "
<div class=\"ai1ec-tab-content ";
        // line 37
        if (isset($context["content_class"])) { $_content_class_ = $context["content_class"]; } else { $_content_class_ = null; }
        echo twig_escape_filter($this->env, $_content_class_, "html", null, true);
        echo "\">
\t";
        // line 38
        if (isset($context["pre_tabs_markup"])) { $_pre_tabs_markup_ = $context["pre_tabs_markup"]; } else { $_pre_tabs_markup_ = null; }
        echo $_pre_tabs_markup_;
        echo "
\t";
        // line 39
        if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tabs_);
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            // line 40
            echo "\t\t<div class=\"ai1ec-tab-pane\" id=\"ai1ec-";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\">
\t\t\t";
            // line 41
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "elements"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 42
                echo "\t\t\t\t";
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                echo $this->getAttribute($_element_, "html");
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>

";
        // line 48
        $this->displayBlock('extra_html', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        if (isset($context["stacked"])) { $_stacked_ = $context["stacked"]; } else { $_stacked_ = null; }
        if ($_stacked_) {
            echo "</div></div>";
        }
    }

    // line 48
    public function block_extra_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "bootstrap_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 48,  180 => 51,  177 => 50,  175 => 48,  171 => 46,  164 => 44,  143 => 40,  128 => 37,  98 => 28,  95 => 27,  36 => 7,  125 => 36,  120 => 35,  115 => 32,  110 => 36,  101 => 33,  88 => 29,  71 => 18,  89 => 14,  73 => 11,  69 => 10,  64 => 9,  59 => 14,  21 => 1,  68 => 18,  55 => 12,  166 => 38,  161 => 37,  154 => 42,  149 => 41,  144 => 32,  138 => 39,  133 => 38,  114 => 27,  108 => 31,  103 => 24,  92 => 30,  84 => 22,  77 => 19,  72 => 20,  57 => 13,  35 => 2,  24 => 5,  30 => 8,  106 => 35,  100 => 33,  97 => 32,  90 => 24,  86 => 26,  82 => 24,  75 => 25,  67 => 23,  65 => 17,  49 => 17,  37 => 5,  63 => 22,  53 => 18,  43 => 4,  40 => 8,  29 => 4,  146 => 53,  135 => 49,  130 => 48,  122 => 28,  117 => 43,  109 => 39,  104 => 35,  96 => 34,  91 => 33,  83 => 27,  79 => 20,  74 => 19,  66 => 17,  61 => 21,  56 => 14,  51 => 11,  42 => 9,  22 => 2,  25 => 2,  45 => 9,  32 => 5,  19 => 2,  50 => 15,  46 => 5,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 13,  54 => 7,  47 => 7,  44 => 10,  41 => 12,  39 => 3,  34 => 4,  31 => 3,  28 => 2,);
    }
}
