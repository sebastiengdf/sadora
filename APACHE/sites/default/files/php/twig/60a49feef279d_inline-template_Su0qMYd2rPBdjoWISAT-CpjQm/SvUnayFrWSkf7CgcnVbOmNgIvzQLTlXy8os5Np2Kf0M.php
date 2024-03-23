<?php

/* {# inline_template_start #}<div class="cbp-item {{ field_nom_clie }}">
      <div class="cbp-caption">
        <div class="cbp-caption-defaultWrap"> <img src="{{ field_image }}" alt="{{ title }}"> </div>
        <div class="cbp-caption-activeWrap">
          <div class="cbp-l-caption-alignCenter">
            <div class="cbp-l-caption-body"> <a href="{{ field_image_1 }}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Images de SADORA">Agrandir</a> </div>
          </div>
        </div>
      </div>
      <a href="{{ view_node }} " class="cbp-l-grid-masonry-projects-title" rel="nofollow">{{ title }}
      </a>
      <div class="cbp-l-grid-masonry-projects-desc">{{ field_portfolio_category }}  </div>
    </div> */
class __TwigTemplate_b00bb0d0c740566d6a1787fed1f89c08a0590accb47e1dbbb13932cd3f880c85 extends Twig_Template
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
        echo "<div class=\"cbp-item ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_nom_clie"] ?? null), "html", null, true));
        echo "\">
      <div class=\"cbp-caption\">
        <div class=\"cbp-caption-defaultWrap\"> <img src=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "\"> </div>
        <div class=\"cbp-caption-activeWrap\">
          <div class=\"cbp-l-caption-alignCenter\">
            <div class=\"cbp-l-caption-body\"> <a href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image_1"] ?? null), "html", null, true));
        echo "\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"Images de SADORA\">Agrandir</a> </div>
          </div>
        </div>
      </div>
      <a href=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo " \" class=\"cbp-l-grid-masonry-projects-title\" rel=\"nofollow\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "
      </a>
      <div class=\"cbp-l-grid-masonry-projects-desc\">";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_portfolio_category"] ?? null), "html", null, true));
        echo "  </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"cbp-item {{ field_nom_clie }}\">
      <div class=\"cbp-caption\">
        <div class=\"cbp-caption-defaultWrap\"> <img src=\"{{ field_image }}\" alt=\"{{ title }}\"> </div>
        <div class=\"cbp-caption-activeWrap\">
          <div class=\"cbp-l-caption-alignCenter\">
            <div class=\"cbp-l-caption-body\"> <a href=\"{{ field_image_1 }}\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"Images de SADORA\">Agrandir</a> </div>
          </div>
        </div>
      </div>
      <a href=\"{{ view_node }} \" class=\"cbp-l-grid-masonry-projects-title\" rel=\"nofollow\">{{ title }}
      </a>
      <div class=\"cbp-l-grid-masonry-projects-desc\">{{ field_portfolio_category }}  </div>
    </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 12,  76 => 10,  69 => 6,  61 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"cbp-item {{ field_nom_clie }}\">
      <div class=\"cbp-caption\">
        <div class=\"cbp-caption-defaultWrap\"> <img src=\"{{ field_image }}\" alt=\"{{ title }}\"> </div>
        <div class=\"cbp-caption-activeWrap\">
          <div class=\"cbp-l-caption-alignCenter\">
            <div class=\"cbp-l-caption-body\"> <a href=\"{{ field_image_1 }}\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"Images de SADORA\">Agrandir</a> </div>
          </div>
        </div>
      </div>
      <a href=\"{{ view_node }} \" class=\"cbp-l-grid-masonry-projects-title\" rel=\"nofollow\">{{ title }}
      </a>
      <div class=\"cbp-l-grid-masonry-projects-desc\">{{ field_portfolio_category }}  </div>
    </div>", "");
    }
}
