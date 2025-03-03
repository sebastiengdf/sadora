<?php

/* modules/simple_gmap/templates/simple-gmap-output.html.twig */
class __TwigTemplate_e38d3bb3d3584fe703f4aca4543ad7be0e52c209caf308b9200f5712a71e7b96 extends Twig_Template
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
        $tags = array("if" => 30);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 30
        if (($context["include_map"] ?? null)) {
            // line 31
            echo "  <iframe width=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["width"] ?? null), "html", null, true));
            echo "\" height=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["height"] ?? null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["iframe_title"] ?? null), "html", null, true));
            echo "\" frameborder=\"0\" style=\"border:0\" src=\"https://maps.google.com/maps?hl=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["langcode"] ?? null), "html", null, true));
            echo "&amp;q=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url_suffix"] ?? null), "html", null, true));
            echo "&amp;t=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["map_type"] ?? null), "html", null, true));
            echo "&amp;z=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["zoom"] ?? null), "html", null, true));
            echo "&amp;output=embed\"></iframe>
";
        }
        // line 33
        if (($context["include_static_map"] ?? null)) {
            // line 34
            echo "  <div class=\"simple-gmap-static-map\">
    <img src=\"https://maps.googleapis.com/maps/api/staticmap?size=";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["width"] ?? null), "html", null, true));
            echo "x";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["height"] ?? null), "html", null, true));
            echo "&amp;scale=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["static_scale"] ?? null), "html", null, true));
            echo "&amp;zoom=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["zoom"] ?? null), "html", null, true));
            echo "&amp;language=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["langcode"] ?? null), "html", null, true));
            echo "&amp;maptype=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["static_map_type"] ?? null), "html", null, true));
            echo "&amp;markers=color:red|";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url_suffix"] ?? null), "html", null, true));
            echo "&amp;sensor=false&amp;key=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["apikey"] ?? null), "html", null, true));
            echo "\" />
  </div>
";
        }
        // line 38
        if (($context["include_link"] ?? null)) {
            // line 39
            echo "  <p class=\"simple-gmap-link\"><a href=\"https://maps.google.com/maps?q=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url_suffix"] ?? null), "html", null, true));
            echo "&amp;hl=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["langcode"] ?? null), "html", null, true));
            echo "&amp;t=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["map_type"] ?? null), "html", null, true));
            echo "&amp;z=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["zoom"] ?? null), "html", null, true));
            echo "\" target=\"_blank\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["link_text"] ?? null), "html", null, true));
            echo "</a></p>
";
        }
        // line 41
        if ( !twig_test_empty(($context["address_text"] ?? null))) {
            // line 42
            echo "  <p class=\"simple-gmap-address\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["address_text"] ?? null), "html", null, true));
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/simple_gmap/templates/simple-gmap-output.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  104 => 41,  90 => 39,  88 => 38,  68 => 35,  65 => 34,  63 => 33,  45 => 31,  43 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/simple_gmap/templates/simple-gmap-output.html.twig", "/home/sebastien/projets/sadora4/sadora3/modules/simple_gmap/templates/simple-gmap-output.html.twig");
    }
}
