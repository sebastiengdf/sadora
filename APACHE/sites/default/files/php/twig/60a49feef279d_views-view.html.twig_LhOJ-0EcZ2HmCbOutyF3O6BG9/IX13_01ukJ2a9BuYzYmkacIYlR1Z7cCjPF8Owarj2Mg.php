<?php

/* themes/bzpro/templates/views-view.html.twig */
class __TwigTemplate_a35dd79a518973633da8845a8226b5e6d6e4fd47d2018cec5d7c7483de443d5b extends Twig_Template
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
        $tags = array("if" => 1, "set" => 201);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        if ((($context["id"] ?? null) == "_bzpro_block_section")) {
            // line 2
            echo "
\t";
            // line 3
            if ((($context["display_id"] ?? null) == "block_section_service")) {
                // line 4
                echo "\t\t<div class=\"container\">
\t\t\t";
                // line 5
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t  \t<div class=\"row\"></div>
\t\t  \t<div class=\"row superb-services\"> 
\t\t    \t";
                // line 8
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t  \t</div>
\t\t</div>
\t";
            } elseif ((            // line 11
($context["display_id"] ?? null) == "block_section_portfolio")) {
                // line 12
                echo "\t\t<div id=\"Portfolio\"> 
  \t\t\t<div class=\"container\">
  \t\t\t\t<div id=\"js-filters-masonry\" class=\"cbp-l-filters-alignRight\">
\t  \t\t\t\t";
                // line 15
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t\t\t</div>
  \t\t\t\t<div id=\"js-grid-masonry\" class=\"cbp\">
  \t\t\t\t\t";
                // line 18
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t</div>
  \t";
            } elseif ((            // line 22
($context["display_id"] ?? null) == "block_section_portfolio_2")) {
                // line 23
                echo "  \t\t<div id=\"Portfolio\"> 
  \t\t\t<div class=\"container-fluid\">
  \t\t\t\t<div id=\"js-filters-masonry\" class=\"cbp-l-filters-alignRight\">
\t  \t\t\t\t";
                // line 26
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t\t\t</div>
  \t\t\t\t<div id=\"js-grid-masonry\" class=\"cbp\">
  \t\t\t\t\t";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t</div>
  \t";
            } elseif ((            // line 33
($context["display_id"] ?? null) == "block_section_portfolio_3")) {
                // line 34
                echo "  \t\t<div id=\"Portfolio\">
  \t\t\t<div id=\"js-filters-masonry-projects\" class=\"cbp-l-filters-buttonCenter\">
  \t\t\t\t";
                // line 36
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
  \t\t\t</div>
  \t\t\t<div id=\"js-grid-masonry-projects\" class=\"cbp cbp-l-grid-masonry-projects\">
  \t\t\t\t";
                // line 39
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
  \t\t\t</div>
  \t\t</div>
        ";
            } elseif ((            // line 42
($context["display_id"] ?? null) == "block_8")) {
                // line 43
                echo "                <div id=\"Portfolio\">
                        <div id=\"js-filters-masonry-projects\" class=\"cbp-l-filters-buttonCenter\">
                                ";
                // line 45
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
                        </div>
                        <div id=\"js-grid-masonry-projects\" class=\"cbp cbp-l-grid-masonry-projects\">
                                ";
                // line 48
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
                        </div>
                </div>
        ";
            } elseif ((            // line 51
($context["display_id"] ?? null) == "block_9")) {
                // line 52
                echo "                <div id=\"Portfolio\">
                        <div id=\"js-filters-masonry-projects\" class=\"cbp-l-filters-buttonCenter\">
                                ";
                // line 54
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
                        </div>
                        <div id=\"js-grid-masonry-projects\" class=\"cbp cbp-l-grid-masonry-projects\">
                                ";
                // line 57
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
                        </div>
                </div>
\t";
            } elseif ((            // line 60
($context["display_id"] ?? null) == "block_section_testimonial")) {
                echo "\t
\t\t<div class=\"container\">
\t\t\t";
                // line 62
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t<div class=\"testimonials-slider testimonials-carousel\"> 
\t\t\t\t";
                // line 64
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div>
\t\t</div>
\t";
            } elseif ((            // line 67
($context["display_id"] ?? null) == "block_section_best_event_3")) {
                // line 68
                echo "\t\t<div class=\"events-section latest-events\">
  \t\t\t<div class=\"container-fluid\">\t
  \t\t\t\t";
                // line 70
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t\t\t<div class=\"row clearfix\"> 
\t  \t\t\t\t";
                // line 72
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t\t\t</div>
  \t\t\t</div>
  \t\t</div>
\t";
            } elseif ((            // line 76
($context["display_id"] ?? null) == "block_section_best_event_2")) {
                // line 77
                echo "\t\t<div class=\"events-section latest-events\">
  \t\t\t<div class=\"container\">
\t\t    \t";
                // line 79
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t    <div class=\"row clearfix\"> 
\t\t\t    ";
                // line 81
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            } elseif ((            // line 85
($context["display_id"] ?? null) == "block_section_best_event_1")) {
                // line 86
                echo "\t\t<div class=\"events-section latest-events\">
  \t\t\t<div class=\"container\">
  \t\t\t\t";
                // line 88
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t\t\t<div class=\"row clearfix\"> 
\t  \t\t\t\t";
                // line 90
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t\t\t</div>
\t  \t\t</div>
  \t\t</div>
  \t";
            } elseif ((            // line 94
($context["display_id"] ?? null) == "block_section_blog_3")) {
                // line 95
                echo "  \t\t<div id=\"blog\" class=\"blog-div-area\">
 \t\t\t<div class=\"container-fluid\">
 \t\t\t\t";
                // line 97
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
 \t\t\t\t<div class=\"blog-content-div\">
      \t\t\t\t<div class=\"row\">
      \t\t\t\t\t";
                // line 100
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
      \t\t\t\t</div>
      \t\t\t</div>
      \t\t</div>
      \t</div>
  \t";
            } elseif ((            // line 105
($context["display_id"] ?? null) == "block_section_blog_2")) {
                // line 106
                echo "  \t\t<div id=\"blog\" class=\"blog-div-area\">
 \t\t\t<div class=\"container\">
 \t\t\t\t";
                // line 108
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t \t\t\t<div class=\"blog-content-div\">
\t      \t\t\t<div class=\"row\">
\t      \t\t\t\t";
                // line 111
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
 \t\t\t\t\t</div>
 \t\t\t\t</div>
 \t\t\t</div>
 \t\t</div>
  \t";
            } elseif ((            // line 116
($context["display_id"] ?? null) == "block_section_blog_1")) {
                // line 117
                echo "  \t\t<div id=\"blog\" class=\"text-center\">
  \t\t\t<div class=\"container\">
  \t\t\t\t";
                // line 119
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t<div id=\"js-grid-blog-posts\" class=\"cbp\">
\t\t\t\t\t";
                // line 121
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
  \t";
            } elseif ((            // line 125
($context["display_id"] ?? null) == "block_section_advisor")) {
                // line 126
                echo "  \t\t<div class=\"events-section latest-events\">
  \t\t\t<div class=\"container\">
  \t\t\t\t";
                // line 128
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t\t\t<div class=\"row clearfix\"> 
\t  \t\t\t\t";
                // line 130
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t\t\t</div>
\t  \t\t</div>
\t  \t</div>

\t";
            } elseif ((            // line 135
($context["display_id"] ?? null) == "block_section_best_event")) {
                // line 136
                echo "\t\t<div class=\"container\">
\t\t\t";
                // line 137
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t<div class=\"row clearfix\"> 
\t\t\t\t";
                // line 139
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t";
                // line 140
                if (($context["attachment_after"] ?? null)) {
                    // line 141
                    echo "
\t\t\t\t<div class=\"column default-featured-column links-column col-lg-4 col-md-6 col-sm-12 col-xs-12\">
\t\t\t        <article class=\"inner-box\">
\t\t\t          \t<div class=\"vertical-links-outer\">
\t\t\t\t\t\t\t";
                    // line 145
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                    echo "
\t\t\t\t\t\t</div>
\t\t\t        </article>
\t\t\t     </div>
\t\t\t    ";
                }
                // line 150
                echo "\t\t\t</div>
\t\t</div>
\t";
            } elseif ((            // line 152
($context["display_id"] ?? null) == "block_section_partner")) {
                // line 153
                echo "\t\t<div class=\"sponsors\">
  \t\t\t<div class=\"container\">
    \t\t\t<div class=\"slider-outer\"> 
      \t\t\t\t<!--Sponsors Slider-->
      \t\t\t\t<ul class=\"sponsors-slider\">
      \t\t\t\t\t";
                // line 158
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
      \t\t\t\t</ul>
    \t\t\t</div>
 \t\t\t </div>
\t\t</div>
\t";
            } elseif ((            // line 163
($context["display_id"] ?? null) == "block_section_blog")) {
                // line 164
                echo "\t\t<div id=\"blog\" class=\"blog-div-area\">
  \t\t\t<div class=\"container\">
  \t\t\t\t<div class=\"row\">
  \t\t\t\t";
                // line 167
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
  \t\t\t\t</div>
  \t\t\t\t<div class=\"blog-content-div\">
      \t\t\t\t<div class=\"row\">
      \t\t\t\t\t";
                // line 171
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
      \t\t\t\t</div>
      \t\t\t</div>
  \t\t\t</div>
  \t\t</div>
  \t";
            } elseif ((            // line 176
($context["display_id"] ?? null) == "block_session_team")) {
                // line 177
                echo "\t\t<div class=\"container\">
\t\t \t";
                // line 178
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
 \t\t\t <div class=\"row\">
      \t\t\t<div class=\"col-sm-12\">
\t\t\t        <div class=\"ms-staff-carousel\">
\t\t\t          <div class=\"master-slider\" id=\"teamslider\">
          \t\t\t\t\t";
                // line 183
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
          \t\t\t\t</div>
          \t\t\t\t<div class=\"ms-staff-info\" id=\"staff-info\"> </div>
          \t\t\t</div>
          \t\t</div>
          \t</div>
      \t</div>
    ";
            } elseif ((            // line 190
($context["display_id"] ?? null) == "block_section_patner_2")) {
                // line 191
                echo "    \t<div id=\"services\" class=\"text-center\">
  \t\t\t<div class=\"container\">
  \t\t\t\t";
                // line 193
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
  \t\t\t\t<div class=\"row\">
  \t\t\t\t\t";
                // line 195
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t</div>      \t
\t";
            } else {
                // line 200
                echo "\t    ";
                // line 201
                $context["classes"] = array(0 => ((                // line 202
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
                // line 205
                echo "\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
                echo "
\t    <div";
                // line 206
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                echo ">
\t        ";
                // line 208
                echo "\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 210
                echo "\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 211
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 212
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 213
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 214
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 215
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t    </div>
\t";
            }
        } elseif ((        // line 218
($context["id"] ?? null) == "_bzpro_blog_section_2")) {
            // line 219
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_section_footer_lastest")) {
                // line 220
                echo "\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 221
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "\t
\t";
            }
        } elseif ((        // line 223
($context["id"] ?? null) == "blog")) {
            // line 224
            echo "
        ";
            // line 225
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
    <div";
            // line 226
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
\t    ";
            // line 227
            if ((($context["blog_style"] ?? null) == "style1")) {
                // line 228
                echo "\t    \t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 229
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo " 
\t    \t<div id=\"js-grid-blog-posts\" class=\"cbp\">
\t\t        ";
                // line 232
                echo "\t\t        
\t\t        ";
                // line 233
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 234
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 235
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 236
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 237
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 238
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t    </div>
\t    ";
            } else {
                // line 241
                echo "\t\t    ";
                // line 242
                $context["classes"] = array(0 => ((                // line 243
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
                // line 246
                echo "\t\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
                echo "
\t\t    <div";
                // line 247
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                echo ">
\t\t        ";
                // line 249
                echo "\t\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 251
                echo "\t\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 252
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 253
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 254
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 255
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t        ";
                // line 256
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t    \t</div>
\t    ";
            }
            // line 259
            echo "    </div>
";
        } elseif ((        // line 260
($context["id"] ?? null) == "taxonomy_term")) {
            // line 261
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
";
        } elseif ((        // line 262
($context["id"] ?? null) == "_bzpro_taxonomy_terms")) {
            // line 263
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_taxonomy_portfolio_category")) {
                // line 264
                echo "\t
\t\t";
                // line 265
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t";
                // line 266
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t";
            } else {
                // line 268
                echo "\t\t";
                // line 269
                $context["classes"] = array(0 => ((                // line 270
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
                // line 273
                echo "\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
                echo "
\t    <div";
                // line 274
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                echo ">
\t        ";
                // line 276
                echo "\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 278
                echo "\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 279
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 280
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 281
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 282
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t        ";
                // line 283
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t    </div>
\t";
            }
        } elseif ((        // line 286
($context["id"] ?? null) == "product_catalog")) {
            // line 287
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_lastest_product")) {
                // line 288
                echo "\t\t<div class=\"widget lt_product\">
\t\t\t";
                // line 289
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t<ul class=\"clearfix\">
\t\t\t\t";
                // line 291
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</ul>
\t\t</div>

\t";
            } else {
                // line 295
                echo " 
        ";
                // line 296
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
                echo "
    <div";
                // line 297
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
        ";
                // line 299
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
        ";
                // line 301
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
        ";
                // line 302
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
                echo "
        ";
                // line 303
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
        ";
                // line 304
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
        ";
                // line 305
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
        ";
                // line 306
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
    </div>
    ";
            }
            // line 309
            echo "    
";
        } else {
            // line 311
            echo "    ";
            // line 312
            $context["classes"] = array(0 => ((            // line 313
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
            // line 316
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    \t";
            // line 317
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "

        ";
            // line 320
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
        ";
            // line 322
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
            echo "
        ";
            // line 323
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "
        ";
            // line 324
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
        ";
            // line 325
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
            echo "
        ";
            // line 326
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
        ";
            // line 327
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bzpro/templates/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  764 => 327,  760 => 326,  756 => 325,  752 => 324,  748 => 323,  743 => 322,  738 => 320,  733 => 317,  728 => 316,  726 => 313,  725 => 312,  723 => 311,  719 => 309,  713 => 306,  709 => 305,  705 => 304,  701 => 303,  697 => 302,  692 => 301,  687 => 299,  683 => 297,  679 => 296,  676 => 295,  668 => 291,  663 => 289,  660 => 288,  657 => 287,  655 => 286,  649 => 283,  645 => 282,  641 => 281,  637 => 280,  633 => 279,  628 => 278,  623 => 276,  619 => 274,  614 => 273,  612 => 270,  611 => 269,  609 => 268,  604 => 266,  600 => 265,  597 => 264,  594 => 263,  592 => 262,  587 => 261,  585 => 260,  582 => 259,  576 => 256,  572 => 255,  568 => 254,  564 => 253,  560 => 252,  555 => 251,  550 => 249,  546 => 247,  541 => 246,  539 => 243,  538 => 242,  536 => 241,  530 => 238,  526 => 237,  522 => 236,  518 => 235,  514 => 234,  510 => 233,  507 => 232,  502 => 229,  497 => 228,  495 => 227,  491 => 226,  487 => 225,  484 => 224,  482 => 223,  477 => 221,  472 => 220,  469 => 219,  467 => 218,  461 => 215,  457 => 214,  453 => 213,  449 => 212,  445 => 211,  440 => 210,  435 => 208,  431 => 206,  426 => 205,  424 => 202,  423 => 201,  421 => 200,  413 => 195,  408 => 193,  404 => 191,  402 => 190,  392 => 183,  384 => 178,  381 => 177,  379 => 176,  371 => 171,  364 => 167,  359 => 164,  357 => 163,  349 => 158,  342 => 153,  340 => 152,  336 => 150,  328 => 145,  322 => 141,  320 => 140,  316 => 139,  311 => 137,  308 => 136,  306 => 135,  298 => 130,  293 => 128,  289 => 126,  287 => 125,  280 => 121,  275 => 119,  271 => 117,  269 => 116,  261 => 111,  255 => 108,  251 => 106,  249 => 105,  241 => 100,  235 => 97,  231 => 95,  229 => 94,  222 => 90,  217 => 88,  213 => 86,  211 => 85,  204 => 81,  199 => 79,  195 => 77,  193 => 76,  186 => 72,  181 => 70,  177 => 68,  175 => 67,  169 => 64,  164 => 62,  159 => 60,  153 => 57,  147 => 54,  143 => 52,  141 => 51,  135 => 48,  129 => 45,  125 => 43,  123 => 42,  117 => 39,  111 => 36,  107 => 34,  105 => 33,  98 => 29,  92 => 26,  87 => 23,  85 => 22,  78 => 18,  72 => 15,  67 => 12,  65 => 11,  59 => 8,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bzpro/templates/views-view.html.twig", "/home/sebastien/projets/sadora4/sadora3/themes/bzpro/templates/views-view.html.twig");
    }
}
