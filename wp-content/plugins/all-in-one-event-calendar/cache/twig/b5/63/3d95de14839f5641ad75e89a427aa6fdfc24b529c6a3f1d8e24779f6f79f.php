<?php

/* categories.twig */
class __TwigTemplate_b5633d95de14839f5641ad75e89a427aa6fdfc24b529c6a3f1d8e24779f6f79f extends Twig_Template
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
        echo "<li class=\"ai1ec-dropdown ai1ec-category-filter
\t";
        // line 2
        if (isset($context["selected_cat_ids"])) { $_selected_cat_ids_ = $context["selected_cat_ids"]; } else { $_selected_cat_ids_ = null; }
        if ((!twig_test_empty($_selected_cat_ids_))) {
            echo "ai1ec-active";
        }
        echo "\">
\t<a class=\"ai1ec-dropdown-toggle\" data-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open\"></i>
\t\t<span class=\"ai1ec-clear-filter ai1ec-tooltip-trigger\"
\t\t\tdata-href=\"";
        // line 6
        if (isset($context["clear_filter"])) { $_clear_filter_ = $context["clear_filter"]; } else { $_clear_filter_ = null; }
        echo twig_escape_filter($this->env, $_clear_filter_, "html", null, true);
        echo "\"
\t\t\t";
        // line 7
        if (isset($context["data_type"])) { $_data_type_ = $context["data_type"]; } else { $_data_type_ = null; }
        echo $_data_type_;
        echo "
\t\t\ttitle=\"";
        // line 8
        if (isset($context["text_clear_category_filter"])) { $_text_clear_category_filter_ = $context["text_clear_category_filter"]; } else { $_text_clear_category_filter_ = null; }
        echo twig_escape_filter($this->env, $_text_clear_category_filter_, "html", null, true);
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times-circle\"></i>
\t\t</span>
\t\t";
        // line 11
        if (isset($context["text_categories"])) { $_text_categories_ = $context["text_categories"]; } else { $_text_categories_ = null; }
        echo twig_escape_filter($this->env, $_text_categories_, "html", null, true);
        echo "
\t\t<span class=\"ai1ec-caret\"></span>
\t</a>
\t<div class=\"ai1ec-dropdown-menu\">
\t\t";
        // line 15
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 16
            echo "\t\t\t<div data-term=\"";
            if (isset($context["term"])) { $_term_ = $context["term"]; } else { $_term_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_term_, "term_id"), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 17
            if (isset($context["term"])) { $_term_ = $context["term"]; } else { $_term_ = null; }
            if (isset($context["selected_cat_ids"])) { $_selected_cat_ids_ = $context["selected_cat_ids"]; } else { $_selected_cat_ids_ = null; }
            if (twig_in_filter($this->getAttribute($_term_, "term_id"), $_selected_cat_ids_)) {
                // line 18
                echo "\t\t\t\t\tclass=\"ai1ec-active\"
\t\t\t\t";
            }
            // line 19
            echo ">
\t\t\t\t<a class=\"ai1ec-load-view ai1ec-category\"
\t\t\t\t\t";
            // line 21
            if (isset($context["term"])) { $_term_ = $context["term"]; } else { $_term_ = null; }
            if ((!twig_test_empty($this->getAttribute($_term_, "description")))) {
                // line 22
                echo "\t\t\t\t\t\ttitle=\"";
                if (isset($context["term"])) { $_term_ = $context["term"]; } else { $_term_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_term_, "description"), "html_attr");
                echo "\"
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t";
            if (isset($context["data_type"])) { $_data_type_ = $context["data_type"]; } else { $_data_type_ = null; }
            echo $_data_type_;
            echo "
\t\t\t\t\thref=\"";
            // line 25
            if (isset($context["term"])) { $_term_ = $context["term"]; } else { $_term_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_term_, "href"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 26
            if (isset($context["term"])) { $_term_ = $context["term"]; } else { $_term_ = null; }
            if (twig_test_empty($this->getAttribute($_term_, "color"))) {
                // line 27
                echo "\t\t\t\t\t\t<span class=\"ai1ec-color-swatch-empty\"></span>
\t\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t\t";
                if (isset($context["term"])) { $_term_ = $context["term"]; } else { $_term_ = null; }
                echo $this->getAttribute($_term_, "color");
                echo "
\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t";
            if (isset($context["term"])) { $_term_ = $context["term"]; } else { $_term_ = null; }
            echo $this->getAttribute($_term_, "name");
            echo "
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t</div>
</li>

";
    }

    public function getTemplateName()
    {
        return "categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 35,  115 => 31,  108 => 29,  104 => 27,  101 => 26,  96 => 25,  83 => 22,  80 => 21,  76 => 19,  72 => 18,  68 => 17,  62 => 16,  57 => 15,  49 => 11,  42 => 8,  37 => 7,  116 => 30,  103 => 25,  95 => 22,  90 => 24,  84 => 20,  79 => 19,  74 => 18,  69 => 17,  64 => 16,  55 => 15,  50 => 14,  40 => 9,  32 => 6,  27 => 5,  22 => 2,  19 => 1,);
    }
}
