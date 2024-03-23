<?php

/* @bzpro/header.html.twig */
class __TwigTemplate_3a9104870e4b0f52639fd35d9d1d840e8a3f9737aa95168b9f8739a233af060b extends Twig_Template
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
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
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
        if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_header_style", array()), "value", array())) {
            // line 2
            echo "  ";
            $context["header_style"] = $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_header_style", array()), "value", array());
        }
        // line 4
        if ((($context["header_style"] ?? null) == "header1")) {
            // line 5
            echo "  <nav>
    ";
            // line 6
            if ($this->getAttribute(($context["page"] ?? null), "top_header", array())) {
                // line 7
                echo "      <div class=\"nav-top\">
        <div class=\"container\">
          <div class=\"row\">
            ";
                // line 10
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header", array()), "html", null, true));
                echo "
          </div>
        </div>
      </div>
    ";
            }
            // line 15
            echo "    <div class=\"top-area nav-two\">
      <div class=\"header-top-area\" id=\"sticker\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
              ";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
            </div>
            <div class=\"col-lg-7 col-md-7 col-sm-9 col-xs-12\">
              <div class=\"main-menu\">
                ";
            // line 24
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", array())) {
                // line 25
                echo "                  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
                echo "
                ";
            }
            // line 27
            echo "              </div>
            </div>
            <div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-12\">
              <div class=\"header-top-right\">
                <ul>
                  ";
            // line 32
            if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
                // line 33
                echo "                  <li>
                    <div class=\"header-top-search search-box\">
                      ";
                // line 35
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
                echo "
                    </div>
                  </li>
                  ";
            }
            // line 39
            echo "                  <li> 
                        ";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "cart", array()), "html", null, true));
            echo "
                  </li>
                  <li>
                   
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile-menu-area start -->
    <div class=\"mobile-menu-area\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"mobile-menu\">
              ";
            // line 58
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", array())) {
                // line 59
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
                echo "
              ";
            }
            // line 61
            echo "            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile-menu-area end --> 
  </nav>
";
        } elseif ((        // line 68
($context["header_style"] ?? null) == "header2")) {
            // line 69
            echo "<nav>
  <div class=\"header-one\">
    <div class=\"header-top-area\" id=\"sticker\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-7 col-md-7 col-sm-9 col-xs-12\">
            <div class=\"main-menu\">
              ";
            // line 79
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", array())) {
                // line 80
                echo "                  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
                echo "
              ";
            }
            // line 82
            echo "            </div>
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-12\">
            <div class=\"header-top-right\">
              <ul>
                <li>
                  <div class=\"header-top-search search-box\">
                    ";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
                  </div>
                </li>
                
                <li>
                  <div class=\"additional-menu-area\" id=\"additional-menu-area\">
                    <div id=\"mySidenav\" class=\"sidenav\"> <a href=\"index3.html#\" class=\"closebtn\">×</a>
                      <div class=\"sidenav-search bzsidenav\">
                          <div class=\"input-group stylish-input-group\">
                            ";
            // line 98
            if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
                // line 99
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
                echo "
                            ";
            }
            // line 101
            echo "                          </div>
                        </div>
                        <ul class=\"sidenav-nav\">
                          ";
            // line 104
            if ($this->getAttribute(($context["page"] ?? null), "sidenav", array())) {
                // line 105
                echo "                          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidenav", array()), "html", null, true));
                echo "
                          ";
            }
            // line 107
            echo "                        </ul>
                      <!-- times--> 
                    </div>
                    <span class=\"side-menu-open side-menu-trigger\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></span> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile-menu-area start -->
  <div class=\"mobile-menu-area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"mobile-menu\">
            ";
            // line 125
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", array())) {
                // line 126
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
                echo "
            ";
            }
            // line 128
            echo "          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile-menu-area end --> 
</nav>
";
        } elseif ((        // line 135
($context["header_style"] ?? null) == "header3")) {
            // line 136
            echo "
<nav>
  <div class=\"nav-top\">
    ";
            // line 139
            if ($this->getAttribute(($context["page"] ?? null), "top_header", array())) {
                // line 140
                echo "      <div class=\"nav-top\">
        <div class=\"container\">
          <div class=\"row\">
            ";
                // line 143
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header", array()), "html", null, true));
                echo "
          </div>
        </div> 
      </div>
    ";
            }
            // line 148
            echo "  </div>
  <div class=\"header1-area nav-two header-four\">
    <div class=\"header-top-area\" id=\"sticker\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 154
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-7 col-md-7 col-sm-9 col-xs-12\">
            <div class=\"main-menu\">
              ";
            // line 158
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", array())) {
                // line 159
                echo "                  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
                echo "
              ";
            }
            // line 161
            echo "            </div>
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-12\">
            <div class=\"header-top-right\">
              <ul>
                <li>
                  <div class=\"header-top-search search-box\">
                    ";
            // line 168
            if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
                // line 169
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
                echo "
                            ";
            }
            // line 171
            echo "                  </div>
                </li>
                
                <li>
                  <div class=\"additional-menu-area\" id=\"additional-menu-area\">
                    <div id=\"mySidenav\" class=\"sidenav\"> <a href=\"index3.html#\" class=\"closebtn\">×</a>
                      <div class=\"sidenav-search\">
                        <div class=\"input-group stylish-input-group\">
                          ";
            // line 179
            if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
                // line 180
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
                echo "
                            ";
            }
            // line 182
            echo "                        </div>
                      </div>
                      <ul class=\"sidenav-nav\">
                      ";
            // line 185
            if ($this->getAttribute(($context["page"] ?? null), "sidenav", array())) {
                // line 186
                echo "                          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidenav", array()), "html", null, true));
                echo "
                          ";
            }
            // line 188
            echo "                      </ul>
                      <!-- times--> 
                    </div>
                    <span class=\"side-menu-open side-menu-trigger\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></span> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile-menu-area start -->
  <div class=\"mobile-menu-area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"mobile-menu\">
            ";
            // line 206
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", array())) {
                // line 207
                echo "                  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
                echo "
            ";
            }
            // line 209
            echo "          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile-menu-area end --> 
</nav>
";
        } elseif ((        // line 216
($context["header_style"] ?? null) == "header4")) {
            // line 217
            echo "<nav>
  
  <div class=\"top-area nav-two\">
    <div class=\"header-top-area\" id=\"sticker\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 224
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-7 col-md-7 col-sm-9 col-xs-12\">
            <div class=\"main-menu\">
               ";
            // line 228
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", array())) {
                // line 229
                echo "                  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
                echo "
              ";
            }
            // line 231
            echo "            </div>
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-12\">
            <div class=\"header-top-right\">
              <ul>
                <li>
                  <div class=\"header-top-search search-box\">
                    ";
            // line 238
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
                  </div>
                </li>
                <li>
                  ";
            // line 242
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "cart", array()), "html", null, true));
            echo "
                </li>
                <li>
                  <div class=\"additional-menu-area\" id=\"additional-menu-area\">
                    <div id=\"mySidenav\" class=\"sidenav\"> <a href=\"index3.html#\" class=\"closebtn\">×</a>
                      <div class=\"sidenav-search\">
                        <div class=\"input-group stylish-input-group\">
                          ";
            // line 249
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo " 
                        </div>
                      </div>
                      <ul class=\"sidenav-nav\">
                        ";
            // line 253
            if ($this->getAttribute(($context["page"] ?? null), "sidenav", array())) {
                // line 254
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidenav", array()), "html", null, true));
                echo "
                        ";
            }
            // line 256
            echo "                      </ul>
                      <!-- times--> 
                    </div>
                    <span class=\"side-menu-open side-menu-trigger\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></span> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile-menu-area start -->
  <div class=\"mobile-menu-area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"mobile-menu\">
             ";
            // line 274
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", array())) {
                // line 275
                echo "                  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
                echo "
              ";
            }
            // line 277
            echo "          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile-menu-area end --> 
</nav>
";
        } else {
            // line 285
            echo " <nav>
    ";
            // line 286
            if ($this->getAttribute(($context["page"] ?? null), "top_header", array())) {
                // line 287
                echo "      <div class=\"nav-top\">
        <div class=\"container\">
          <div class=\"row\">
            ";
                // line 290
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header", array()), "html", null, true));
                echo "
          </div>
        </div>
      </div>
    ";
            }
            // line 295
            echo "    <div class=\"top-area nav-two\">
      <div class=\"header-top-area\" id=\"sticker\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
              ";
            // line 300
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
            </div>
            <div class=\"col-lg-7 col-md-7 col-sm-9 col-xs-12\">
              <div class=\"main-menu\">
                ";
            // line 304
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", array())) {
                // line 305
                echo "                  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
                echo "
                ";
            }
            // line 307
            echo "              </div>
            </div>
            <div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-12\">
              <div class=\"header-top-right\">
                <ul>
                  ";
            // line 312
            if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
                // line 313
                echo "                  <li>
                    <div class=\"header-top-search search-box\">
                      ";
                // line 315
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
                echo "
                    </div>
                  </li>
                  ";
            }
            // line 319
            echo "                  <li> 
                    ";
            // line 320
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "cart", array()), "html", null, true));
            echo "
                  </li>
                  <li>
                    <div class=\"additional-menu-area\" id=\"additional-menu-area\">
                      <div id=\"mySidenav\" class=\"sidenav\"> <a href=\"index3.html#\" class=\"closebtn\">×</a>
                        <div class=\"sidenav-search bzsidenav\">
                          <div class=\"input-group stylish-input-group\">
                            ";
            // line 327
            if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
                // line 328
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
                echo "
                            ";
            }
            // line 329
            echo "  
                          </div>
                        </div>
                          ";
            // line 332
            if ($this->getAttribute(($context["page"] ?? null), "sidenav", array())) {
                // line 333
                echo "                          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidenav", array()), "html", null, true));
                echo "
                          ";
            }
            // line 334
            echo " 
                        <!-- times--> 
                      </div>
                      <span class=\"side-menu-open side-menu-trigger\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></span> </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile-menu-area start -->
    <div class=\"mobile-menu-area\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"mobile-menu\">
              ";
            // line 352
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", array())) {
                // line 353
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
                echo "
              ";
            }
            // line 355
            echo "            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile-menu-area end --> 
  </nav>
";
        }
        // line 363
        echo "<div class='header-bg' data-header-bg='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_page_header_bg"] ?? null), "html", null, true));
        echo "'></div>
";
    }

    public function getTemplateName()
    {
        return "@bzpro/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  623 => 363,  613 => 355,  607 => 353,  605 => 352,  585 => 334,  579 => 333,  577 => 332,  572 => 329,  566 => 328,  564 => 327,  554 => 320,  551 => 319,  544 => 315,  540 => 313,  538 => 312,  531 => 307,  525 => 305,  523 => 304,  516 => 300,  509 => 295,  501 => 290,  496 => 287,  494 => 286,  491 => 285,  481 => 277,  475 => 275,  473 => 274,  453 => 256,  447 => 254,  445 => 253,  438 => 249,  428 => 242,  421 => 238,  412 => 231,  406 => 229,  404 => 228,  397 => 224,  388 => 217,  386 => 216,  377 => 209,  371 => 207,  369 => 206,  349 => 188,  343 => 186,  341 => 185,  336 => 182,  330 => 180,  328 => 179,  318 => 171,  312 => 169,  310 => 168,  301 => 161,  295 => 159,  293 => 158,  286 => 154,  278 => 148,  270 => 143,  265 => 140,  263 => 139,  258 => 136,  256 => 135,  247 => 128,  241 => 126,  239 => 125,  219 => 107,  213 => 105,  211 => 104,  206 => 101,  200 => 99,  198 => 98,  186 => 89,  177 => 82,  171 => 80,  169 => 79,  162 => 75,  154 => 69,  152 => 68,  143 => 61,  137 => 59,  135 => 58,  114 => 40,  111 => 39,  104 => 35,  100 => 33,  98 => 32,  91 => 27,  85 => 25,  83 => 24,  76 => 20,  69 => 15,  61 => 10,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bzpro/header.html.twig", "/home/sebastien/projets/sadora4/sadora3/themes/bzpro/templates/header.html.twig");
    }
}
