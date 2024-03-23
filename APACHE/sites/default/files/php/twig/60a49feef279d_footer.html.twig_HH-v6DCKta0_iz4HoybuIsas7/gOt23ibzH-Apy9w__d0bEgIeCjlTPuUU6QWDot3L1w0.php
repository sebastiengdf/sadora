<?php

/* @bzpro/footer.html.twig */
class __TwigTemplate_0fff4961b4bea4a94e646fd14b1eb54380c1b3bf36141cb4d602635eca2f93ac extends Twig_Template
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
        echo "<footer>
  
  <div class=\"main_footer\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 footer_logo\"> 
          ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
          
        </div>
        <!-- End of .footer_logo -->
        ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_footer", array()), "html", null, true));
        echo "
        <div class=\"col-lg-2 col-md-2 col-sm-6 col-xs-12 quick_links\">
        
          ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
        echo "
        </div>
        <!-- End of .quick_links --> 
        <!-- End of .latest_twieets -->
        <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 subscribe_now\">
          
          ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_simplenews", array()), "html", null, true));
        echo "
        </div>
        <!-- End of .subscribe_now --> 
      </div>
      <!-- End of .row --> 
    </div>
    <!-- End of .container --> 
  </div>
  <!-- End of .main_footer -->
  ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "last_footer", array()), "html", null, true));
        echo "
  <!-- End of .bottom_footer --> 
</footer>

<!-- End Footer --> 

<!-- Back to Top --> 
<a href=\"#\" id=\"back-to-top\" title=\"Back to top\"><i class=\"fa fa-chevron-up\" ></i></a> 
";
    }

    public function getTemplateName()
    {
        return "@bzpro/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  74 => 21,  65 => 15,  59 => 12,  52 => 8,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bzpro/footer.html.twig", "/home/sebastien/projets/sadora4/sadora3/themes/bzpro/templates/footer.html.twig");
    }
}
