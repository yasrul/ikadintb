<?php

/* themes/cloud_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_79601a8352d1f5f8ca8b3d6c3f1c758d79cbec4ec6746edafde95facf498140b extends Twig_Template
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
        $tags = array("if" => 62, "for" => 154);
        $filters = array("raw" => 155, "date" => 381);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 'date'),
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

        // line 60
        echo "

";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "contact_email", array()) || $this->getAttribute(($context["page"] ?? null), "top_menu", array()))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->

        <div class=\"col-sm-9\">
          
          <div class=\"top-blocks\">
            ";
            // line 72
            if ($this->getAttribute(($context["page"] ?? null), "top_menu", array())) {
                // line 73
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_menu", array()), "html", null, true));
                echo "
            ";
            }
            // line 75
            echo "
            ";
            // line 76
            if ($this->getAttribute(($context["page"] ?? null), "contact_email", array())) {
                // line 77
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_email", array()), "html", null, true));
                echo "
            ";
            }
            // line 79
            echo "
            <!-- Start: Social media icons -->

            ";
            // line 82
            if (($context["show_social_icon"] ?? null)) {
                // line 83
                echo "              <div class=\"social-media\">
                ";
                // line 84
                if (($context["facebook_url"] ?? null)) {
                    // line 85
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
                ";
                }
                // line 87
                echo "                ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 88
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
                ";
                }
                // line 90
                echo "                ";
                if (($context["twitter_url"] ?? null)) {
                    // line 91
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
                ";
                }
                // line 93
                echo "                ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 94
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                ";
                }
                // line 96
                echo "                ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 97
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
                ";
                }
                // line 99
                echo "                ";
                if (($context["rss_url"] ?? null)) {
                    // line 100
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                }
                // line 102
                echo "              </div>
            ";
            }
            // line 104
            echo "
            <!-- End: Social media icons -->

          </div>

        </div>

        <!-- End: Contact Phone & Email -->

      </div>
    </div>
  </div>
";
        }
        // line 117
        echo "

<div class=\"container\">

  <div class=\"row\">

    <!-- Start: Header -->

    <div class=\"navbar-header col-md-3\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
        <i class=\"fas fa-bars\"></i>
      </button>
      ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 130
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
      ";
        }
        // line 132
        echo "    </div>

    <!-- End: Header -->

    ";
        // line 136
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 137
            echo "      <div class=\"col-md-9\">
        <div class=\"main-menu\">
          ";
            // line 139
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 143
        echo "
    </div>
  </div>

</div>


";
        // line 150
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 151
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 155
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 161
        echo "

<!-- Start: Top widget -->

";
        // line 165
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array())))) {
            // line 166
            echo "  <div class=\"\" id=\"\">
    <div class=\"container\">
      ";
            // line 168
            if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array())))) {
                // line 169
                echo "        <div class=\"row clearfix topwidget\">

          <!-- Start: Top widget first -->          
          ";
                // line 172
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                    // line 173
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                    echo "</div>
          ";
                }
                // line 174
                echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
                // line 178
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                    // line 179
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                    echo "</div>
          ";
                }
                // line 180
                echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
                // line 184
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                    // line 185
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_third_class"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                    echo "</div>
          ";
                }
                // line 186
                echo "          
          <!-- End: Top widget third -->

        </div>
      ";
            }
            // line 191
            echo "    </div>
  </div>
";
        }
        // line 194
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 200
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 201
            echo "  <div class=\"container\">
    ";
            // line 202
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 205
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 210
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 211
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 214
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 219
        echo "
<!--End: Title -->

<div class=\"container\">
  <div class=\"parallax-region\">

    <!--Start: Breadcrumb -->

    ";
        // line 227
        if ( !($context["is_front"] ?? null)) {
            // line 228
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 229
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
      </div>
    ";
        }
        // line 232
        echo "
    <!--End: Breadcrumb -->

    <div class=\"row layout\">

      <!--- Start: Left SideBar -->
      ";
        // line 238
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 239
            echo "        <div class=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo ">
          <div class=\"sidebar\">
            ";
            // line 241
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 245
        echo "      <!-- End Left SideBar -->

      <!--- Start Content -->
      ";
        // line 248
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 249
            echo "        <div class=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo ">
          <div class=\"content_layout\">
            ";
            // line 251
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>              
        </div>
      ";
        }
        // line 255
        echo "      <!-- End: Content -->

      <!-- Start: Right SideBar -->
      ";
        // line 258
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 259
            echo "        <div class=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo ">
          <div class=\"sidebar\">
            ";
            // line 261
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 265
        echo "      <!-- End: Right SideBar -->
      
    </div>
  
  </div>
</div>


<!-- End: Main content -->


<!-- Start: Services -->

";
        // line 278
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "services", array()))) {
            // line 279
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 282
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "services", array()), "html", null, true));
            echo "
    </div>
  </div>
";
        }
        // line 286
        echo "
<!--End: Services -->


<!-- Start: Bottom widgets -->

";
        // line 292
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_third", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", array())))) {
            // line 293
            echo "  <div class=\"products\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 299
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", array())) {
                // line 300
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 301
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 303
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 307
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", array())) {
                // line 308
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 309
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 311
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 315
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", array())) {
                // line 316
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 317
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 319
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 323
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", array())) {
                // line 324
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 325
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 328
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 335
        echo "
<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

";
        // line 341
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array()))) {
            // line 342
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 348
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 349
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 350
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 353
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 356
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 357
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 358
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 361
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 364
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 365
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 366
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 369
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>

    <!-- Start: Copyright -->
    <div class=\"container copyright\">
      <div class=\"row\">

        <!-- Start: Copyright -->
        <div class=\"col-sm-6\">
          <p>Copyright © ";
            // line 381
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
            echo ". All rights reserved.</p>
        </div>
        <!-- End: Copyright -->

        <!-- Start: Credit link -->
        ";
            // line 386
            if (($context["show_credit_link"] ?? null)) {
                // line 387
                echo "          <div class=\"col-sm-6\">
            <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
          </div>
        ";
            }
            // line 391
            echo "        <!-- End: Credit link -->
        
      </div>
    </div>

  </div>
";
        }
        // line 398
        echo "
<!--End: Footer widgets -->


<!-- Start: Map -->

";
        // line 404
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", array()))) {
            // line 405
            echo "  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 406
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "google_map", array()), "html", null, true));
            echo "</div>
  </div>
";
        }
        // line 409
        echo "
<!--End: Map -->





";
    }

    public function getTemplateName()
    {
        return "themes/cloud_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  686 => 409,  680 => 406,  677 => 405,  675 => 404,  667 => 398,  658 => 391,  652 => 387,  650 => 386,  642 => 381,  628 => 369,  622 => 366,  617 => 365,  615 => 364,  610 => 361,  604 => 358,  599 => 357,  597 => 356,  592 => 353,  586 => 350,  581 => 349,  579 => 348,  571 => 342,  569 => 341,  561 => 335,  552 => 328,  546 => 325,  541 => 324,  539 => 323,  533 => 319,  527 => 317,  522 => 316,  520 => 315,  514 => 311,  508 => 309,  503 => 308,  501 => 307,  495 => 303,  489 => 301,  484 => 300,  482 => 299,  474 => 293,  472 => 292,  464 => 286,  457 => 282,  452 => 279,  450 => 278,  435 => 265,  428 => 261,  422 => 259,  420 => 258,  415 => 255,  408 => 251,  402 => 249,  400 => 248,  395 => 245,  388 => 241,  382 => 239,  380 => 238,  372 => 232,  366 => 229,  363 => 228,  361 => 227,  351 => 219,  343 => 214,  338 => 211,  336 => 210,  329 => 205,  323 => 202,  320 => 201,  318 => 200,  310 => 194,  305 => 191,  298 => 186,  290 => 185,  288 => 184,  282 => 180,  274 => 179,  272 => 178,  266 => 174,  258 => 173,  256 => 172,  251 => 169,  249 => 168,  245 => 166,  243 => 165,  237 => 161,  231 => 157,  222 => 155,  218 => 154,  213 => 151,  211 => 150,  202 => 143,  195 => 139,  191 => 137,  189 => 136,  183 => 132,  177 => 130,  175 => 129,  161 => 117,  146 => 104,  142 => 102,  136 => 100,  133 => 99,  127 => 97,  124 => 96,  118 => 94,  115 => 93,  109 => 91,  106 => 90,  100 => 88,  97 => 87,  91 => 85,  89 => 84,  86 => 83,  84 => 82,  79 => 79,  73 => 77,  71 => 76,  68 => 75,  62 => 73,  60 => 72,  49 => 63,  47 => 62,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/cloud_zymphonies_theme/templates/layout/page.html.twig", "/home/yasrul/projects/ikadintb/themes/cloud_zymphonies_theme/templates/layout/page.html.twig");
    }
}
