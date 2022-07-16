<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index/index.html.twig */
class __TwigTemplate_5b0b8206f33c44eb3ed3f2177d35007a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"hero_single version_1\">
        <div class=\"opacity-mask\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <h1>Delivery or Takeaway Food</h1>
                        <p>The best restaurants at the best price</p>
                        <form method=\"post\" action=\"grid-listing-filterscol.html\">
                            <div class=\"row g-0 custom-search-input\">
                                <div class=\"col-lg-10\">
                                    <div class=\"form-group\">
                                        <input class=\"form-control no_border_r\" type=\"text\" id=\"autocomplete\" placeholder=\"Address, neighborhood...\">
                                    </div>
                                </div>
                                <div class=\"col-lg-2\">
                                    <button class=\"btn_1 gradient\" type=\"submit\">Search</button>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class=\"search_trends\">
                                <h5>Trending:</h5>
                                <ul>
                                    <li><a href=\"#0\">Sushi</a></li>
                                    <li><a href=\"#0\">Burgher</a></li>
                                    <li><a href=\"#0\">Chinese</a></li>
                                    <li><a href=\"#0\">Pizza</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <div class=\"wave hero\"></div>
    </div>
    <!-- /hero_single -->

    <div class=\"container margin_30_60\">
        <div class=\"main_title center\">
            <span><em></em></span>
            <h2>Popular Categories</h2>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <!-- /main_title -->

        <div class=\"owl-carousel owl-theme categories_carousel\">
            ";
        // line 51
        if ((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 53
                echo "                    <div class=\"item_version_2\">
                        <a href=\"";
                // line 54
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalog");
                echo "\">
                            <figure>
                                <span>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 56), "html", null, true);
                echo "</span>
                                <img src=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "image", [], "any", false, false, false, 57), "html", null, true);
                echo "\" data-src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "image", [], "any", false, false, false, 57), "html", null, true);
                echo "\" alt=\"\" class=\"owl-lazy\" width=\"350\" height=\"450\">
                                <div class=\"info\">
                                    <h3>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 59), "html", null, true);
                echo "</h3>
                                    <small>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "getShortDescription", [], "any", false, false, false, 60), "html", null, true);
                echo "</small>
                                </div>
                            </figure>
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "            ";
        } else {
            // line 67
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No categories found here"), "html", null, true);
            echo "</p>
            ";
        }
        // line 69
        echo "        </div>
        <!-- /carousel -->
    </div>
    <!-- /container -->

    <div class=\"bg_gray\">
        <div class=\"container margin_60_40\">
            <div class=\"main_title\">
                <span><em></em></span>
                <h2>Top Rated Restaurants</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                <a href=\"#0\">View All &rarr;</a>
            </div>
            <div class=\"row add_bottom_25\">
                ";
        // line 83
        if ((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 83, $this->source); })())) {
            // line 84
            echo "                    <div class=\"col-lg-12\">
                        <div class=\"list_home\">
                            <ul>
                                ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 87, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rest"]) {
                // line 88
                echo "                                <li>
                                    <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalog_rest", ["id" => twig_get_attribute($this->env, $this->source, $context["rest"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                echo "\">
                                        <figure>
                                            <img src=\"";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rest"], "image", [], "any", false, false, false, 91), "html", null, true);
                echo "\" data-src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rest"], "image", [], "any", false, false, false, 91), "html", null, true);
                echo "\" alt=\"\" class=\"lazy\" width=\"350\" height=\"233\">
                                        </figure>
                                        <div class=\"score\"><strong>9.5</strong></div>
                                        <h3>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rest"], "title", [], "any", false, false, false, 94), "html", null, true);
                echo "</h3>
                                        <small>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rest"], "getShortDescription", [], "any", false, false, false, 95), "html", null, true);
                echo "</small>
                                        <ul>
                                            <li><span class=\"ribbon off\">-30%</span></li>
                                            <li>Average price \$35</li>
                                        </ul>
                                    </a>
                                </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                            </ul>
                        </div>
                    </div>
                ";
        } else {
            // line 107
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No restaurants found"), "html", null, true);
            echo "</p>
                ";
        }
        // line 109
        echo "            </div>
            <!-- /row -->
            <div class=\"banner lazy\" data-bg=\"url(img/banner_bg_desktop.jpg)\">
                <div class=\"wrapper d-flex align-items-center opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.3)\">
                    <div>
                        <small>FooYes Delivery</small>
                        <h3>We Deliver to your Office</h3>
                        <p>Enjoy a tasty food in minutes!</p>
                        <a href=\"grid-listing-filterscol.html\" class=\"btn_1 gradient\">Start Now!</a>
                    </div>
                </div>
                <!-- /wrapper -->
            </div>
            <!-- /banner -->
        </div>
    </div>
    <!-- /bg_gray -->

    <div class=\"shape_element_2\">
        <div class=\"container margin_60_0\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"box_how\">
                                <figure><img src=\"img/lazy-placeholder-100-100-white.png\" data-src=\"img/how_1.svg\" alt=\"\" width=\"150\" height=\"167\" class=\"lazy\"></figure>
                                <h3>Easly Order</h3>
                                <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin.</p>
                            </div>
                            <div class=\"box_how\">
                                <figure><img src=\"img/lazy-placeholder-100-100-white.png\" data-src=\"img/how_2.svg\" alt=\"\" width=\"130\" height=\"145\" class=\"lazy\"></figure>
                                <h3>Quick Delivery</h3>
                                <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 align-self-center\">
                            <div class=\"box_how\">
                                <figure><img src=\"img/lazy-placeholder-100-100-white.png\" data-src=\"img/how_3.svg\" alt=\"\" width=\"150\" height=\"132\" class=\"lazy\"></figure>
                                <h3>Enjoy Food</h3>
                                <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros.</p>
                            </div>
                        </div>
                    </div>
                    <p class=\"text-center mt-3 d-block d-lg-none\"><a href=\"#0\" class=\"btn_1 medium gradient pulse_bt mt-2\">Register Now!</a></p>
                </div>
                <div class=\"col-lg-5 offset-lg-1 align-self-center\">
                    <div class=\"intro_txt\">
                        <div class=\"main_title\">
                            <span><em></em></span>
                            <h2>Start Ordering Now</h2>
                        </div>
                        <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur deserunt.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p><a href=\"#0\" class=\"btn_1 medium gradient pulse_bt mt-2\">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /shape_element_2 -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 109,  235 => 107,  229 => 103,  215 => 95,  211 => 94,  203 => 91,  198 => 89,  195 => 88,  191 => 87,  186 => 84,  184 => 83,  168 => 69,  162 => 67,  159 => 66,  147 => 60,  143 => 59,  136 => 57,  132 => 56,  127 => 54,  124 => 53,  119 => 52,  117 => 51,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"hero_single version_1\">
        <div class=\"opacity-mask\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <h1>Delivery or Takeaway Food</h1>
                        <p>The best restaurants at the best price</p>
                        <form method=\"post\" action=\"grid-listing-filterscol.html\">
                            <div class=\"row g-0 custom-search-input\">
                                <div class=\"col-lg-10\">
                                    <div class=\"form-group\">
                                        <input class=\"form-control no_border_r\" type=\"text\" id=\"autocomplete\" placeholder=\"Address, neighborhood...\">
                                    </div>
                                </div>
                                <div class=\"col-lg-2\">
                                    <button class=\"btn_1 gradient\" type=\"submit\">Search</button>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class=\"search_trends\">
                                <h5>Trending:</h5>
                                <ul>
                                    <li><a href=\"#0\">Sushi</a></li>
                                    <li><a href=\"#0\">Burgher</a></li>
                                    <li><a href=\"#0\">Chinese</a></li>
                                    <li><a href=\"#0\">Pizza</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <div class=\"wave hero\"></div>
    </div>
    <!-- /hero_single -->

    <div class=\"container margin_30_60\">
        <div class=\"main_title center\">
            <span><em></em></span>
            <h2>Popular Categories</h2>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <!-- /main_title -->

        <div class=\"owl-carousel owl-theme categories_carousel\">
            {% if categories %}
                {% for cat in categories %}
                    <div class=\"item_version_2\">
                        <a href=\"{{ path('app_catalog') }}\">
                            <figure>
                                <span>{{ cat.id }}</span>
                                <img src=\"{{ cat.image }}\" data-src=\"{{ cat.image }}\" alt=\"\" class=\"owl-lazy\" width=\"350\" height=\"450\">
                                <div class=\"info\">
                                    <h3>{{ cat.title }}</h3>
                                    <small>{{ cat.getShortDescription }}</small>
                                </div>
                            </figure>
                        </a>
                    </div>
                {% endfor %}
            {% else %}
                <p>{{ \"No categories found here\"|trans }}</p>
            {% endif %}
        </div>
        <!-- /carousel -->
    </div>
    <!-- /container -->

    <div class=\"bg_gray\">
        <div class=\"container margin_60_40\">
            <div class=\"main_title\">
                <span><em></em></span>
                <h2>Top Rated Restaurants</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                <a href=\"#0\">View All &rarr;</a>
            </div>
            <div class=\"row add_bottom_25\">
                {% if restaurants %}
                    <div class=\"col-lg-12\">
                        <div class=\"list_home\">
                            <ul>
                                {% for rest in restaurants %}
                                <li>
                                    <a href=\"{{ path('app_catalog_rest', {id: rest.id}) }}\">
                                        <figure>
                                            <img src=\"{{ rest.image }}\" data-src=\"{{ rest.image }}\" alt=\"\" class=\"lazy\" width=\"350\" height=\"233\">
                                        </figure>
                                        <div class=\"score\"><strong>9.5</strong></div>
                                        <h3>{{ rest.title }}</h3>
                                        <small>{{ rest.getShortDescription }}</small>
                                        <ul>
                                            <li><span class=\"ribbon off\">-30%</span></li>
                                            <li>Average price \$35</li>
                                        </ul>
                                    </a>
                                </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                {% else %}
                    <p>{{ \"No restaurants found\"|trans }}</p>
                {% endif %}
            </div>
            <!-- /row -->
            <div class=\"banner lazy\" data-bg=\"url(img/banner_bg_desktop.jpg)\">
                <div class=\"wrapper d-flex align-items-center opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.3)\">
                    <div>
                        <small>FooYes Delivery</small>
                        <h3>We Deliver to your Office</h3>
                        <p>Enjoy a tasty food in minutes!</p>
                        <a href=\"grid-listing-filterscol.html\" class=\"btn_1 gradient\">Start Now!</a>
                    </div>
                </div>
                <!-- /wrapper -->
            </div>
            <!-- /banner -->
        </div>
    </div>
    <!-- /bg_gray -->

    <div class=\"shape_element_2\">
        <div class=\"container margin_60_0\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"box_how\">
                                <figure><img src=\"img/lazy-placeholder-100-100-white.png\" data-src=\"img/how_1.svg\" alt=\"\" width=\"150\" height=\"167\" class=\"lazy\"></figure>
                                <h3>Easly Order</h3>
                                <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin.</p>
                            </div>
                            <div class=\"box_how\">
                                <figure><img src=\"img/lazy-placeholder-100-100-white.png\" data-src=\"img/how_2.svg\" alt=\"\" width=\"130\" height=\"145\" class=\"lazy\"></figure>
                                <h3>Quick Delivery</h3>
                                <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 align-self-center\">
                            <div class=\"box_how\">
                                <figure><img src=\"img/lazy-placeholder-100-100-white.png\" data-src=\"img/how_3.svg\" alt=\"\" width=\"150\" height=\"132\" class=\"lazy\"></figure>
                                <h3>Enjoy Food</h3>
                                <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros.</p>
                            </div>
                        </div>
                    </div>
                    <p class=\"text-center mt-3 d-block d-lg-none\"><a href=\"#0\" class=\"btn_1 medium gradient pulse_bt mt-2\">Register Now!</a></p>
                </div>
                <div class=\"col-lg-5 offset-lg-1 align-self-center\">
                    <div class=\"intro_txt\">
                        <div class=\"main_title\">
                            <span><em></em></span>
                            <h2>Start Ordering Now</h2>
                        </div>
                        <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur deserunt.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p><a href=\"#0\" class=\"btn_1 medium gradient pulse_bt mt-2\">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /shape_element_2 -->
{% endblock %}
", "index/index.html.twig", "/var/html/symfony/templates/index/index.html.twig");
    }
}
