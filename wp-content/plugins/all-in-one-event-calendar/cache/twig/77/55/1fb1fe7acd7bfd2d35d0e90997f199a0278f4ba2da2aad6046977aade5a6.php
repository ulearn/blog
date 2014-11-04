<?php

/* setting/twig_cache.twig */
class __TwigTemplate_77551fb1fe7acd7bfd2d35d0e90997f199a0278f4ba2da2aad6046977aade5a6 extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
\t<ul class=\"ai1ec-fa-ul\">
\t\t<li id=\"ai1ec-cache-scan-success\" class=\"ai1ec-text-success";
        // line 3
        if (isset($context["cache_available"])) { $_cache_available_ = $context["cache_available"]; } else { $_cache_available_ = null; }
        if (($_cache_available_ == false)) {
            echo " ai1ec-hide";
        }
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-check-circle\"></i>
\t\t\t";
        // line 5
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo $this->getAttribute($_text_, "okcache");
        echo "
\t\t</li>
\t\t<li id=\"ai1ec-cache-scan-danger\" class=\"ai1ec-text-danger";
        // line 7
        if (isset($context["cache_available"])) { $_cache_available_ = $context["cache_available"]; } else { $_cache_available_ = null; }
        if (($_cache_available_ == true)) {
            echo " ai1ec-hide";
        }
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-times-circle\"></i>
\t\t\t";
        // line 9
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo $this->getAttribute($_text_, "nocache");
        echo "
\t\t\t<button class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs\" id=\"ai1ec-button-refresh\"
\t\t\t\tdata-loading-text=\"&lt;i class=&quot;ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh ai1ec-fa-spin&quot;&gt;&lt;/i&gt; ";
        // line 11
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_text_, "rescan"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh\"></i>
\t\t\t\t";
        // line 13
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo $this->getAttribute($_text_, "refresh");
        echo "
\t\t\t</button>
\t\t</li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/twig_cache.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  73 => 11,  69 => 10,  64 => 9,  59 => 8,  21 => 1,  68 => 18,  55 => 13,  166 => 38,  161 => 37,  154 => 34,  149 => 33,  144 => 32,  138 => 30,  133 => 29,  114 => 27,  108 => 25,  103 => 24,  92 => 23,  84 => 22,  77 => 19,  72 => 20,  57 => 13,  35 => 2,  24 => 5,  30 => 7,  106 => 36,  100 => 33,  97 => 32,  90 => 27,  86 => 26,  82 => 24,  75 => 21,  67 => 18,  65 => 17,  49 => 6,  37 => 7,  63 => 20,  53 => 16,  43 => 4,  40 => 9,  29 => 5,  146 => 53,  135 => 49,  130 => 48,  122 => 28,  117 => 43,  109 => 39,  104 => 35,  96 => 34,  91 => 33,  83 => 13,  79 => 23,  74 => 21,  66 => 22,  61 => 21,  56 => 14,  51 => 11,  42 => 9,  22 => 2,  25 => 2,  45 => 9,  32 => 5,  19 => 1,  50 => 15,  46 => 5,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 13,  54 => 7,  47 => 7,  44 => 8,  41 => 9,  39 => 3,  34 => 6,  31 => 5,  28 => 4,);
    }
}
