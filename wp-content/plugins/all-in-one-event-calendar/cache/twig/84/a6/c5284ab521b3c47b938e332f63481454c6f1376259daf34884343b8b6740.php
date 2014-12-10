<?php

/* setting/page.twig */
class __TwigTemplate_84a6c5284ab521b3c47b938e332f63481454c6f1376259daf34884343b8b6740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_page.twig");

        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_layout($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"post-box-container column-1-ai1ec left-side timely\">
\t";
        // line 4
        if (isset($context["metabox"])) { $_metabox_ = $context["metabox"]; } else { $_metabox_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute($_metabox_, "screen"), $this->getAttribute($_metabox_, "action"), $this->getAttribute($_metabox_, "object")), "html", null, true);
        echo "
\t";
        // line 5
        if (array_key_exists("submit", $context)) {
            // line 6
            echo "\t\t";
            $context["__internal_44915d9c866b6bc45a0eae272391d22fcf3845df486e41c96f8cc0b2ed3c2257"] = $this->env->loadTemplate("form-elements/input.twig");
            // line 7
            echo "\t\t<div class=\"ai1ec-pull-right\">
\t\t\t";
            // line 8
            if (isset($context["submit"])) { $_submit_ = $context["submit"]; } else { $_submit_ = null; }
            echo $context["__internal_44915d9c866b6bc45a0eae272391d22fcf3845df486e41c96f8cc0b2ed3c2257"]->getbutton($this->getAttribute($_submit_, "id"), $this->getAttribute($_submit_, "id"), $this->getAttribute($_submit_, "value"), "submit", $this->getAttribute($_submit_, "args"));
            echo "
\t\t</div>
\t";
        }
        // line 11
        echo "</div>
<div class=\"post-box-container column-2-ai1ec right-side timely\">
\t\t";
        // line 13
        if (isset($context["support"])) { $_support_ = $context["support"]; } else { $_support_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute($_support_, "screen"), $this->getAttribute($_support_, "action"), $this->getAttribute($_support_, "object")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  54 => 11,  47 => 8,  44 => 7,  41 => 6,  39 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
