<?php

/* form-elements/textarea.twig */
class __TwigTemplate_260aae99e9368e0c7a641812606fdf77dd0989798b89e95944eede8ae41eacea extends Twig_Template
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
    }

    // line 1
    public function gettextarea($_id = null, $_name = "", $_value = "", $_attributes = array())
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (($_name_ == "")) {
                // line 3
                echo "\t\t";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["id"] = $_name_;
                // line 4
                echo "\t";
            }
            // line 5
            echo "\t<textarea
\t\tname=\"";
            // line 6
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
\t\tid=\"";
            // line 7
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"
\t\tclass=\"ai1ec-form-control ";
            // line 8
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_attributes_, "class"), "html", null, true);
            echo "\"
\t\t";
            // line 9
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 10
                echo "\t\t\t";
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                if (($_attribute_ != "class")) {
                    // line 11
                    echo "\t\t\t\t";
                    if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                    echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                    echo "=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\"
\t\t\t";
                }
                // line 13
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t>";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "</textarea>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "form-elements/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  73 => 11,  69 => 10,  64 => 9,  59 => 8,  21 => 1,  68 => 18,  55 => 13,  166 => 38,  161 => 37,  154 => 34,  149 => 33,  144 => 32,  138 => 30,  133 => 29,  114 => 27,  108 => 25,  103 => 24,  92 => 23,  84 => 22,  77 => 19,  72 => 20,  57 => 14,  35 => 2,  24 => 5,  30 => 7,  106 => 36,  100 => 33,  97 => 32,  90 => 27,  86 => 26,  82 => 24,  75 => 21,  67 => 18,  65 => 17,  49 => 6,  37 => 6,  63 => 20,  53 => 16,  43 => 4,  40 => 9,  29 => 5,  146 => 53,  135 => 49,  130 => 48,  122 => 28,  117 => 43,  109 => 39,  104 => 35,  96 => 34,  91 => 33,  83 => 13,  79 => 23,  74 => 21,  66 => 22,  61 => 21,  56 => 14,  51 => 12,  42 => 9,  22 => 2,  25 => 2,  45 => 10,  32 => 5,  19 => 1,  50 => 15,  46 => 5,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 13,  54 => 7,  47 => 7,  44 => 8,  41 => 9,  39 => 3,  34 => 6,  31 => 4,  28 => 4,);
    }
}
