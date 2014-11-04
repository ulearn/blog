<?php

/* event-excerpt.twig */
class __TwigTemplate_8d6cdb965a32c1472dc4617fd7dab43db4fb756a26a265fde195f98b1e71b51d extends Twig_Template
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
        echo "<div class=\"timely ai1ec-excerpt\">
\t<div class=\"ai1ec-time\">
\t\t<strong>";
        // line 3
        if (isset($context["text_when"])) { $_text_when_ = $context["text_when"]; } else { $_text_when_ = null; }
        echo twig_escape_filter($this->env, $_text_when_, "html", null, true);
        echo "</strong>
\t\t";
        // line 4
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo $this->env->getExtension('ai1ec')->timespan($_event_);
        echo "
\t</div>
\t";
        // line 6
        if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
        if ((!twig_test_empty($_location_))) {
            // line 7
            echo "\t\t<div class=\"ai1ec-location\">
\t\t\t<strong>";
            // line 8
            if (isset($context["text_where"])) { $_text_where_ = $context["text_where"]; } else { $_text_where_ = null; }
            echo twig_escape_filter($this->env, $_text_where_, "html", null, true);
            echo "</strong>
\t\t\t";
            // line 9
            if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
            echo $_location_;
            echo "
\t\t</div>
\t";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "event-excerpt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  45 => 9,  40 => 8,  37 => 7,  34 => 6,  28 => 4,  23 => 3,  19 => 1,);
    }
}
