<?php

/* datepicker_link.twig */
class __TwigTemplate_4932ea4178e92f66ddbdb1feb9ec1496773dcb031265fc870a3e981abc68ca2a extends Twig_Template
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
        echo "<a
\tclass=\"ai1ec-minical-trigger ai1ec-btn ai1ec-btn-sm ai1ec-btn-default
    ai1ec-tooltip-trigger\"
\t";
        // line 4
        if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attributes_);
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 5
            echo "\t\t";
            if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
            echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
            echo "=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t";
        if (isset($context["data_type"])) { $_data_type_ = $context["data_type"]; } else { $_data_type_ = null; }
        echo $_data_type_;
        echo "
\ttitle=\"";
        // line 8
        if (isset($context["text_date"])) { $_text_date_ = $context["text_date"]; } else { $_text_date_ = null; }
        echo twig_escape_filter($this->env, $_text_date_, "html", null, true);
        echo "\"
\t>
\t<i class=\"ai1ec-fa ai1ec-fa-calendar-o ai1ec-fa-fw ai1ec-fa-lg\"></i>
  <span class=\"ai1ec-calendar-title\">";
        // line 11
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</span>
  <span class=\"ai1ec-calendar-title-short\">";
        // line 12
        if (isset($context["title_short"])) { $_title_short_ = $context["title_short"]; } else { $_title_short_ = null; }
        echo twig_escape_filter($this->env, $_title_short_, "html", null, true);
        echo "</span>
</a>
";
    }

    public function getTemplateName()
    {
        return "datepicker_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  29 => 5,  24 => 4,  184 => 68,  178 => 66,  172 => 65,  168 => 63,  165 => 62,  157 => 58,  151 => 56,  145 => 55,  134 => 48,  128 => 46,  122 => 45,  111 => 38,  105 => 36,  100 => 35,  89 => 28,  78 => 25,  71 => 20,  67 => 19,  63 => 17,  60 => 12,  53 => 14,  46 => 12,  35 => 9,  25 => 5,  127 => 35,  115 => 31,  108 => 29,  104 => 27,  101 => 26,  96 => 25,  83 => 26,  80 => 21,  76 => 19,  72 => 18,  68 => 17,  62 => 16,  57 => 15,  49 => 11,  42 => 7,  37 => 7,  116 => 30,  103 => 25,  95 => 22,  90 => 24,  84 => 20,  79 => 19,  74 => 18,  69 => 17,  64 => 16,  55 => 11,  50 => 14,  40 => 9,  32 => 8,  27 => 5,  22 => 2,  19 => 1,);
    }
}
