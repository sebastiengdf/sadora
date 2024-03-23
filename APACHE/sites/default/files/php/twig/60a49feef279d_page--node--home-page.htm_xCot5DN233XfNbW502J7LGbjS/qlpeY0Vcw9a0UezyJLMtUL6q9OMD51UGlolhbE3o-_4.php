<?php

/* themes/bzpro/templates/page--node--home-page.html.twig */
class __TwigTemplate_336465dc093ae16436280b4f7ca4fd759a1ef349670fe14523aadd2faaa6352f extends Twig_Template
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
        $tags = array("include" => 1, "if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
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
        $this->loadTemplate("@bzpro/header.html.twig", "themes/bzpro/templates/page--node--home-page.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "slider", array())) {
            // line 4
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 8
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
            // line 12
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
            echo "
";
        }
        // line 14
        echo "    
";
        // line 15
        $this->loadTemplate("@bzpro/footer.html.twig", "themes/bzpro/templates/page--node--home-page.html.twig", 15)->display($context);
        // line 16
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/bzpro/templates/page--node--home-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  81 => 15,  78 => 14,  72 => 12,  70 => 11,  67 => 10,  61 => 8,  59 => 7,  56 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bzpro/templates/page--node--home-page.html.twig", "/home/sebastien/projets/sadora4/sadora3/themes/bzpro/templates/page--node--home-page.html.twig");
    }
}
