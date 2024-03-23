<?php

/* themes/bzpro/templates/page--node--list-portfolio.html.twig */
class __TwigTemplate_707caca9460983052c8ea7d2f332aeeb8f54e6d678e5d7e38882301941628350 extends Twig_Template
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
        $tags = array("include" => 1, "set" => 3, "if" => 32);
        $filters = array("raw" => 11);
        $functions = array("attach_library" => 2);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'set', 'if'),
                array('raw'),
                array('attach_library')
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
        $this->loadTemplate("@bzpro/header.html.twig", "themes/bzpro/templates/page--node--list-portfolio.html.twig", 1)->display($context);
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bzpro/bzpro-lib-cubeportfolio"), "html", null, true));
        echo "
";
        // line 3
        $context["description"] = $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_description_basic_home", array()), "value", array());
        // line 4
        echo "\t<div id=\"home\" class=\"bg-inner low-back-gradient-inner\">
\t  <div class=\"text-con-inner low-back-up\">
\t    <div class=\"container\">
\t      <div class=\"row\">
\t        <div class=\"lead col-lg-12 col-xm-12 text-center\">
\t          <h1><span class=\"top-heading-inner\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</span></h1>
\t          <div class=\"list-o-i white\">
\t            <p class=\"white no-p\">";
        // line 11
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
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "</div>
\t      </div>
\t      <div class=\"col-md-6\"> </div>
\t    </div>
\t  </div>
\t</div>
\t<!--END Pagenation --> 

";
        // line 32
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 33
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
";
        }
        // line 35
        echo "
";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
            // line 37
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
            echo "
";
        }
        // line 39
        echo "

    
";
        // line 42
        $this->loadTemplate("@bzpro/footer.html.twig", "themes/bzpro/templates/page--node--list-portfolio.html.twig", 42)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/bzpro/templates/page--node--list-portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  109 => 39,  103 => 37,  101 => 36,  98 => 35,  92 => 33,  90 => 32,  79 => 24,  63 => 11,  58 => 9,  51 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bzpro/templates/page--node--list-portfolio.html.twig", "/home/sebastien/projets/sadora4/sadora3/themes/bzpro/templates/page--node--list-portfolio.html.twig");
    }
}
