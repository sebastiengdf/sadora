<?php

/* {# inline_template_start #}<div data-filter=".{{ tid }}" class="cbp-filter-item"> {{ name }}
        <div class="cbp-filter-counter"></div>
      </div */
class __TwigTemplate_5054f4e5e926cc5336ccf93b7841c6f92cef4c2ce2c9c14b0adde7318981f9ea extends Twig_Template
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
        echo "<div data-filter=\".";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tid"] ?? null), "html", null, true));
        echo "\" class=\"cbp-filter-item\"> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true));
        echo "
        <div class=\"cbp-filter-counter\"></div>
      </div";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div data-filter=\".{{ tid }}\" class=\"cbp-filter-item\"> {{ name }}
        <div class=\"cbp-filter-counter\"></div>
      </div";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div data-filter=\".{{ tid }}\" class=\"cbp-filter-item\"> {{ name }}
        <div class=\"cbp-filter-counter\"></div>
      </div", "");
    }
}
