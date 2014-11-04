<?php

/* setting/superwidget.twig */
class __TwigTemplate_9e4ad8f6310f6c3ebefe1b412f9944ad3934e40b782acaa7481d633d194ed9af extends Twig_Template
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
        // line 2
        echo "<div class=\"ai1ec-col-sm-12\">
\t<div id=\"ai1ec-superwidget\" class=\"ai1ec-collapse ai1ec-in\">
\t\t<div class=\"ai1ec-well ai1ec-prose\">
\t\t\t<p>";
        // line 5
        echo Ai1ec_I18n::__("With the Super Widget, you can embed a calendar into a remote webpage (for example, a static HTML page hosted on a different server). Here's how:");
        echo "</p>
\t\t\t<ol>
\t\t\t\t<li>
\t\t\t\t\t<p>";
        // line 8
        echo Ai1ec_I18n::__("Add this line just before the closing <code>&lt;/head&gt;</code> tag:");
        echo "</p>
\t\t\t\t\t<pre class=\"ai1ec-autoselect\">&lt;script type=\"text/javascript\" src=\"";
        // line 9
        if (isset($context["siteurl"])) { $_siteurl_ = $context["siteurl"]; } else { $_siteurl_ = null; }
        echo twig_escape_filter($this->env, $_siteurl_);
        echo "\"&gt;&lt;/script&gt;</pre>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<p>";
        // line 12
        echo Ai1ec_I18n::__("Insert this markup where you would like to embed the Super Widget (using default options):");
        echo "</p>
\t\t\t\t\t<pre class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\"&gt;&lt;/div&gt;</pre>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"ai1ec-text-muted\">";
        // line 17
        echo Ai1ec_I18n::__("Optional.");
        echo "</span>
\t\t\t\t\t\t";
        // line 18
        echo Ai1ec_I18n::__("Add options to your Super Widget:");
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>";
        // line 21
        echo Ai1ec_I18n::__("Posterboard view:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-action=\"posterboard\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 22
        echo Ai1ec_I18n::__("Stream view:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-action=\"stream\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 23
        echo Ai1ec_I18n::__("Month view:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-action=\"month\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 24
        echo Ai1ec_I18n::__("Week view:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-action=\"week\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 25
        echo Ai1ec_I18n::__("Day view:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-action=\"oneday\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 26
        echo Ai1ec_I18n::__("Agenda view:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-action=\"agenda\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 27
        echo Ai1ec_I18n::__("Default view as per settings:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\"&gt;&lt;/div&gt;</code></li>
\t
\t\t\t\t\t\t<li>";
        // line 29
        echo Ai1ec_I18n::__("Filter by event category ID:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-cat_ids=\"1\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 30
        echo Ai1ec_I18n::__("Filter by event category IDs (separate IDs by comma):");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-cat_ids=\"1,2\"&gt;&lt;/div&gt;</code></li>
\t
\t\t\t\t\t\t<li>";
        // line 32
        echo Ai1ec_I18n::__("Filter by event tag ID:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-tag_ids=\"1\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 33
        echo Ai1ec_I18n::__("Filter by event tag IDs (separate IDs by comma):");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-tag_ids=\"1,2\"&gt;&lt;/div&gt;</code></li>
\t
\t\t\t\t\t\t<li>";
        // line 35
        echo Ai1ec_I18n::__("Filter by post ID:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-post_ids=\"1\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 36
        echo Ai1ec_I18n::__("Filter by post IDs (separate IDs by comma):");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-post_ids=\"1,2\"&gt;&lt;/div&gt;</code></li>

\t\t\t\t\t\t<li>";
        // line 38
        echo Ai1ec_I18n::__("Limit number of events per page:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-events_limit=\"5\"&gt;&lt;/div&gt;</code></li>
\t
\t\t\t\t\t\t<li>";
        // line 40
        echo Ai1ec_I18n::__("Hide title and navigation buttons:");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-no_navigation=\"true\"&gt;&lt;/div&gt;</code></li>
\t
\t\t\t\t\t\t<li>";
        // line 42
        echo Ai1ec_I18n::__("Set a default start date: *");
        echo " <code class=\"ai1ec-autoselect\">&lt;div class=\"timely-calendar\" data-exact_date=\"21-12-2012\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ol>
\t\t\t<div class=\"ai1ec-alert ai1ec-alert-warning\">
\t\t\t\t";
        // line 47
        echo Ai1ec_I18n::__("* Provide a date in the same format specified by the <strong>Input dates in this format</strong> setting on the <strong>Adding/Editing Events</strong> tab.");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/superwidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  120 => 40,  115 => 38,  110 => 36,  101 => 33,  88 => 29,  71 => 24,  89 => 14,  73 => 11,  69 => 10,  64 => 9,  59 => 21,  21 => 1,  68 => 18,  55 => 13,  166 => 38,  161 => 37,  154 => 34,  149 => 33,  144 => 32,  138 => 30,  133 => 47,  114 => 27,  108 => 25,  103 => 24,  92 => 30,  84 => 22,  77 => 19,  72 => 20,  57 => 13,  35 => 2,  24 => 5,  30 => 8,  106 => 35,  100 => 33,  97 => 32,  90 => 27,  86 => 26,  82 => 24,  75 => 25,  67 => 23,  65 => 17,  49 => 17,  37 => 7,  63 => 22,  53 => 18,  43 => 4,  40 => 9,  29 => 5,  146 => 53,  135 => 49,  130 => 48,  122 => 28,  117 => 43,  109 => 39,  104 => 35,  96 => 34,  91 => 33,  83 => 27,  79 => 26,  74 => 21,  66 => 22,  61 => 21,  56 => 14,  51 => 11,  42 => 9,  22 => 2,  25 => 2,  45 => 9,  32 => 5,  19 => 2,  50 => 15,  46 => 5,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 13,  54 => 7,  47 => 7,  44 => 8,  41 => 12,  39 => 3,  34 => 9,  31 => 5,  28 => 4,);
    }
}
