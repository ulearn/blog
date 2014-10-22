<?php

/* pagination.twig */
class __TwigTemplate_f927e9ebb965697e227fa8ba7991946a80bc34917fe8e437edbc0c4567956326 extends Twig_Template
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
        echo "<div class=\"ai1ec-pagination ai1ec-btn-group\">
\t";
        // line 2
        if (isset($context["links"])) { $_links_ = $context["links"]; } else { $_links_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_links_);
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "\t\t";
            if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
            if (twig_test_iterable($_link_)) {
                // line 4
                echo "\t\t\t<a class=\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_link_, "class"), "html", null, true);
                echo " ai1ec-load-view ai1ec-btn ai1ec-btn-sm
\t\t\t\tai1ec-btn-default ";
                // line 5
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ((!$this->getAttribute($_link_, "enabled"))) {
                    echo "ai1ec-disabled";
                }
                echo "\"
\t\t\t\t";
                // line 6
                if (isset($context["data_type"])) { $_data_type_ = $context["data_type"]; } else { $_data_type_ = null; }
                echo $_data_type_;
                echo "
\t\t\t\thref=\"";
                // line 7
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_link_, "href"), "html_attr");
                echo "\">
\t\t\t\t";
                // line 8
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo $this->getAttribute($_link_, "text");
                echo "
\t\t\t</a>
\t\t";
            } else {
                // line 11
                echo "\t\t\t";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo $_link_;
                echo "
\t\t";
            }
            // line 13
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  54 => 8,  44 => 6,  31 => 4,  48 => 8,  29 => 5,  24 => 4,  184 => 68,  178 => 66,  172 => 65,  168 => 63,  165 => 62,  157 => 58,  151 => 56,  145 => 55,  134 => 48,  128 => 46,  122 => 45,  111 => 38,  105 => 36,  100 => 35,  89 => 28,  78 => 25,  71 => 20,  67 => 19,  63 => 17,  60 => 12,  53 => 14,  46 => 12,  35 => 9,  25 => 5,  127 => 35,  115 => 31,  108 => 29,  104 => 27,  101 => 26,  96 => 25,  83 => 26,  80 => 21,  76 => 19,  72 => 18,  68 => 13,  62 => 16,  57 => 15,  49 => 7,  42 => 7,  37 => 5,  116 => 30,  103 => 25,  95 => 22,  90 => 24,  84 => 20,  79 => 19,  74 => 14,  69 => 17,  64 => 16,  55 => 11,  50 => 14,  40 => 9,  32 => 8,  27 => 3,  22 => 2,  19 => 1,);
    }
}
