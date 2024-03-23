<?php

/* {# inline_template_start #}<div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <article class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
          <figure class="image-box"> <a href="{{ view_node }}"><img src="{{ field_image }} " alt="{{ title }} "></a> </figure>
          <div class="content-box">
            <h3><a href="{{ view_node }}">{{ title }} </a></h3>
            <div class="column-info">{{ field_description }}</div>
          <p> {{ body }}</p>
            <a href="{{ view_node }}" class="theme-btn btn-style-orange">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </article>
      </div> */
class __TwigTemplate_eb21e1fe0b665eddf2a87e07a2e76fe6250c17a7071b515a615531a16b533bb5 extends Twig_Template
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
        echo "<div class=\"column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12\">
        <article class=\"inner-box wow fadeInUp\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">
          <figure class=\"image-box\"> <a href=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\"><img src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo " \" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo " \"></a> </figure>
          <div class=\"content-box\">
            <h3><a href=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo " </a></h3>
            <div class=\"column-info\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_description"] ?? null), "html", null, true));
        echo "</div>
          <p> ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</p>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\" class=\"theme-btn btn-style-orange\">Read More <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a> </div>
        </article>
      </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12\">
        <article class=\"inner-box wow fadeInUp\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">
          <figure class=\"image-box\"> <a href=\"{{ view_node }}\"><img src=\"{{ field_image }} \" alt=\"{{ title }} \"></a> </figure>
          <div class=\"content-box\">
            <h3><a href=\"{{ view_node }}\">{{ title }} </a></h3>
            <div class=\"column-info\">{{ field_description }}</div>
          <p> {{ body }}</p>
            <a href=\"{{ view_node }}\" class=\"theme-btn btn-style-orange\">Read More <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a> </div>
        </article>
      </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 8,  75 => 7,  71 => 6,  65 => 5,  56 => 3,  52 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12\">
        <article class=\"inner-box wow fadeInUp\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">
          <figure class=\"image-box\"> <a href=\"{{ view_node }}\"><img src=\"{{ field_image }} \" alt=\"{{ title }} \"></a> </figure>
          <div class=\"content-box\">
            <h3><a href=\"{{ view_node }}\">{{ title }} </a></h3>
            <div class=\"column-info\">{{ field_description }}</div>
          <p> {{ body }}</p>
            <a href=\"{{ view_node }}\" class=\"theme-btn btn-style-orange\">Read More <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a> </div>
        </article>
      </div>", "");
    }
}
