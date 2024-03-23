<?php

/* themes/bzpro/templates/node--portfolio.html.twig */
class __TwigTemplate_e77182da7a125ad0c856f2dcfabaa537d9cc1128027d9596b452aa1cdb7979c4 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 2);
        $filters = array("length" => 16, "raw" => 62);
        $functions = array("file_url" => 14, "getUrlByImageStyle" => 20, "drupal_view" => 37);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array('length', 'raw'),
                array('file_url', 'getUrlByImageStyle', 'drupal_view')
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "getRevisionAuthor", array(), "method"), "field_description", array()), "value", array())) {
            // line 2
            echo "imagecarroussel  ";
            $context["description"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "getRevisionAuthor", array(), "method"), "field_description", array()), "value", array());
        }
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "getRevisionAuthor", array(), "method"), "field_full_name", array()), "value", array())) {
            // line 6
            echo "    ";
            $context["full_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "getRevisionAuthor", array(), "method"), "field_full_name", array()), "value", array());
        }
        // line 8
        if ((null === ($context["full_name"] ?? null))) {
            // line 9
            echo "  ";
            $context["full_name"] = ($context["author_name"] ?? null);
        }
        // line 11
        echo "
";
        // line 12
        $context["img_uri"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_image", array()), "entity", array()), "uri", array()), "value", array());
        // line 13
        echo "
";
        // line 14
        $context["img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array(($context["img_uri"] ?? null)));
        // line 15
        $context["img_alt"] = $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_image", array()), "alt", array());
        // line 16
        $context["length_image"] = twig_length_filter($this->env, $this->getAttribute(($context["node"] ?? null), "field_image", array()));
        // line 17
        $context["img_arr"] = $this->getAttribute(($context["node"] ?? null), "field_image", array());
        // line 18
        $context["comment_count"] = $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_blog_comments", array()), "comment_count", array());
        // line 19
        echo "
";
        // line 20
        $context["image746x518"] = $this->env->getExtension('Drupal\nvs_func\Twig\NVSImageStyle')->getUrlByImageStyle(($context["img_uri"] ?? null), "image_746x518");
        // line 21
        echo "

";
        // line 23
        if ( !($context["page"] ?? null)) {
            // line 24
            echo "\t
";
        } else {
            // line 26
            echo "\t<div id=\"portfolio-single\" style=\"padding:100px 0\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-12\">
           <div class=\"row\">
\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t<div class=\"left_product_slider\">
\t\t\t  <div id=\"product_slider\" class=\"e_product_slider\"> <img id=\"imgprincipale\" src=\"";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image746x518"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", array()), "value", array()), "html", null, true));
            echo "\"> </div>
\t\t\t</div>
\t\t</div>
                 <div class=\"col-lg-12 col-md-12\">
                     ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("_bzpro_block_section", "block_section_partner"), "html", null, true));
            echo "
                </div>
\t    </div>
      </div>
      <div class=\"col-lg-4 col-md-12\">
        <div class=\"left_prodoct_desc_single\">
          <div class=\"left_product_heading\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                 <div class=\"pr_title_review\">
                  <h2>";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", array()), "value", array()), "html", null, true));
            echo "</h2>

                </div>

\t\t</div>
             
            </div>
          </div>
          <div class=\"left_product_desc\">
            <p>";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_type_marche", array()), "html", null, true));
            echo "</p>
          </div>
          <div class=\"product_size_color pt-0-projet\">
            <div class=\"row left_product_desc pt-0-projet\">
               <div class=\"col-md-12\"><br>
\t\t  \t   <h3 style=\"font-weight:bold\">DESCRIPTION</h3>
\t\t\t   <p>";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_description_portfolio", array()), "value", array())));
            echo "</p>
\t       </div>
              <div class=\"col-md-12 pd-activite-projet\">
                <h3 style=\"font-weight:bold\">Activité</h3>
                <p>";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_portfolio_category", array()), "html", null, true));
            echo "</p>
              </div>
            </div>
          </div>
         
          
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"product_extra_info\"> 
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bzpro/templates/node--portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 66,  149 => 62,  140 => 56,  128 => 47,  115 => 37,  106 => 33,  97 => 26,  93 => 24,  91 => 23,  87 => 21,  85 => 20,  82 => 19,  80 => 18,  78 => 17,  76 => 16,  74 => 15,  72 => 14,  69 => 13,  67 => 12,  64 => 11,  60 => 9,  58 => 8,  54 => 6,  52 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bzpro/templates/node--portfolio.html.twig", "/home/sebastien/projets/sadora4/sadora3/themes/bzpro/templates/node--portfolio.html.twig");
    }
}
