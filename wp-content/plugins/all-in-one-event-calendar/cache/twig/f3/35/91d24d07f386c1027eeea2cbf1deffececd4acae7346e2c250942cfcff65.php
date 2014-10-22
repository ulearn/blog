<?php

/* form-elements/input.twig */
class __TwigTemplate_f33591d24d07f386c1027eeea2cbf1deffececd4acae7346e2c250942cfcff65 extends Twig_Template
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
        // line 19
        echo "
";
    }

    // line 1
    public function getinput($_id = null, $_name = "", $_value = "", $_type = "text", $_attributes = array())
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "name" => $_name,
            "value" => $_value,
            "type" => $_type,
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
            echo "\t<input
\t\ttype=\"";
            // line 6
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\"
\t\tname=\"";
            // line 7
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
\t\tvalue=\"";
            // line 8
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"
\t\tid=\"";
            // line 9
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"
\t\tclass=\"";
            // line 10
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (!twig_in_filter($_type_, array(0 => "radio", 1 => "checkbox"))) {
                echo "ai1ec-form-control";
            }
            // line 11
            echo "\t\t\t";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_attributes_, "class"), "html", null, true);
            echo "\"
\t\t";
            // line 12
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 13
                echo "\t\t\t";
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                if (($_attribute_ != "class")) {
                    // line 14
                    echo "\t\t\t\t";
                    if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                    echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                    echo "=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\"
\t\t\t";
                }
                // line 16
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getbutton($_id = null, $_name = "", $_value = "", $_type = "text", $_attributes = array())
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "name" => $_name,
            "value" => $_value,
            "type" => $_type,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (($_name_ == "")) {
                // line 22
                echo "\t\t";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["id"] = $_name_;
                // line 23
                echo "\t";
            }
            // line 24
            echo "\t<button
\t\ttype=\"";
            // line 25
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\"
\t\tname=\"";
            // line 26
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
\t\tid=\"";
            // line 27
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"
\t\t";
            // line 28
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 29
                echo "\t\t\t";
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                echo "=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\"
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t>";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo $_value_;
            echo "</button>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "form-elements/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 31,  170 => 29,  150 => 25,  147 => 24,  144 => 23,  140 => 22,  136 => 21,  121 => 20,  109 => 17,  103 => 16,  93 => 14,  84 => 12,  78 => 11,  68 => 9,  63 => 8,  58 => 7,  53 => 6,  50 => 5,  47 => 4,  24 => 1,  191 => 36,  185 => 35,  178 => 33,  165 => 28,  160 => 27,  155 => 26,  152 => 28,  148 => 26,  138 => 24,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 15,  89 => 13,  83 => 13,  73 => 10,  69 => 10,  64 => 9,  59 => 8,  54 => 7,  49 => 6,  46 => 5,  43 => 3,  39 => 2,  21 => 2,  37 => 7,  35 => 2,  32 => 5,  25 => 3,  22 => 2,  19 => 19,);
    }
}
