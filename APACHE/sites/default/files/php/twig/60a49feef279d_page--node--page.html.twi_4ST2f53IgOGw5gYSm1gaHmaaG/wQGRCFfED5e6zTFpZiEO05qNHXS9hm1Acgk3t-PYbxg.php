<?php

/* themes/bzpro/templates/page--node--page.html.twig */
class __TwigTemplate_84d43eec58114b01c4d7e71279536e62837cd24befcaa08d4564ea641dd0acbe extends Twig_Template
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
        $tags = array("include" => 1, "set" => 2, "if" => 31);
        $filters = array("raw" => 10);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'set', 'if'),
                array('raw'),
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
        $this->loadTemplate("@bzpro/header.html.twig", "themes/bzpro/templates/page--node--page.html.twig", 1)->display($context);
        // line 2
        $context["description"] = $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_description_basic_home", array()), "value", array());
        // line 3
        echo "\t<div id=\"home\" class=\"bg-inner low-back-gradient-inner\">
\t  <div class=\"text-con-inner low-back-up\">
\t    <div class=\"container\">
\t      <div class=\"row\">
\t        <div class=\"lead col-lg-12 col-xm-12 text-center\">
\t          <h1><span class=\"top-heading-inner\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</span></h1>
\t          <div class=\"list-o-i white\">
\t            <p class=\"white no-p\">";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["description"] ?? null)));
        echo "</p>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>

\t<!--Pagenation -->
\t<div class=\"pagenation-holder\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-md-6 text-left\">
\t        <div class=\"pagenation_links\">";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "</div>
\t      </div>
\t      <div class=\"col-md-6\"> </div>
\t    </div>
\t  </div>
\t</div>
\t<!--END Pagenation --> 

";
        // line 31
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 32
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
";
        }
        // line 34
        echo "
";
        // line 35
        if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
            // line 36
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
            echo "
";
        }
        // line 38
        echo "

    
";
        // line 41
        $this->loadTemplate("@bzpro/footer.html.twig", "themes/bzpro/templates/page--node--page.html.twig", 41)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/bzpro/templates/page--node--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  105 => 38,  99 => 36,  97 => 35,  94 => 34,  88 => 32,  86 => 31,  75 => 23,  59 => 10,  54 => 8,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bzpro/templates/page--node--page.html.twig", "/home/sebastien/projets/sadora4/sadora3/themes/bzpro/templates/page--node--page.html.twig");
    }
}
