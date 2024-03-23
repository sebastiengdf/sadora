<?php

/* {# inline_template_start #}<div class="col-md-4 col-sm-6" data-animation="fadeInUp">
    <div class="s-feature-box text-center">
      <div class="mask-top"> 
        <!-- Icon --> 
        <i class="fa {{ field_icon_class }}"></i> 
        <!-- Title -->
        <h4>{{ title }}</h4>
      </div>
      <div class="mask-bottom"> 
        <!-- Icon --> 
        <i class="fa {{ field_icon_class }}"></i> 
        <!-- Title -->
        <h4 class="white">{{ title }}</h4>
        <!-- Text -->
        <p class="white">{{ body }}</p>
      </div>
    </div>
  </div> */
class __TwigTemplate_9a79ba726b8770968992cf68b25536574db04dc6850551e5429462f9f3f41bdd extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"col-md-4 col-sm-6\" data-animation=\"fadeInUp\">
    <div class=\"s-feature-box text-center\">
      <div class=\"mask-top\"> 
        <!-- Icon --> 
        <i class=\"fa ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_icon_class"] ?? null), "html", null, true));
        echo "\"></i> 
        <!-- Title -->
        <h4>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h4>
      </div>
      <div class=\"mask-bottom\"> 
        <!-- Icon --> 
        <i class=\"fa ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_icon_class"] ?? null), "html", null, true));
        echo "\"></i> 
        <!-- Title -->
        <h4 class=\"white\">";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h4>
        <!-- Text -->
        <p class=\"white\">";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</p>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-md-4 col-sm-6\" data-animation=\"fadeInUp\">
    <div class=\"s-feature-box text-center\">
      <div class=\"mask-top\"> 
        <!-- Icon --> 
        <i class=\"fa {{ field_icon_class }}\"></i> 
        <!-- Title -->
        <h4>{{ title }}</h4>
      </div>
      <div class=\"mask-bottom\"> 
        <!-- Icon --> 
        <i class=\"fa {{ field_icon_class }}\"></i> 
        <!-- Title -->
        <h4 class=\"white\">{{ title }}</h4>
        <!-- Text -->
        <p class=\"white\">{{ body }}</p>
      </div>
    </div>
  </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  83 => 13,  78 => 11,  71 => 7,  66 => 5,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"col-md-4 col-sm-6\" data-animation=\"fadeInUp\">
    <div class=\"s-feature-box text-center\">
      <div class=\"mask-top\"> 
        <!-- Icon --> 
        <i class=\"fa {{ field_icon_class }}\"></i> 
        <!-- Title -->
        <h4>{{ title }}</h4>
      </div>
      <div class=\"mask-bottom\"> 
        <!-- Icon --> 
        <i class=\"fa {{ field_icon_class }}\"></i> 
        <!-- Title -->
        <h4 class=\"white\">{{ title }}</h4>
        <!-- Text -->
        <p class=\"white\">{{ body }}</p>
      </div>
    </div>
  </div>", "");
    }
}
