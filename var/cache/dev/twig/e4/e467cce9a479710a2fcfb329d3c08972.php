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

/* base.html.twig */
class __TwigTemplate_0efc868a12412e6d27c7800bb2b787c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
";
        // line 3
        echo twig_include($this->env, $context, "common/header.html.twig");
        echo "
<body>

<header class=\"header black_nav clearfix element_to_stick\">
    <div class=\"container\">
        <div id=\"logo\">
            <a href=\"index.html\">
                <img src=\"img/logo_sticky.svg\" width=\"162\" height=\"35\" alt=\"\">
            </a>
        </div>
        <div class=\"layer\"></div><!-- Opacity Mask Menu Mobile -->
        <ul id=\"top_menu\">
            <li><a href=\"#sign-in-dialog\" id=\"sign-in\" class=\"login\">Sign In</a></li>
            <li><a href=\"#0\" class=\"wishlist_bt_top\" title=\"Your wishlist\">Your wishlist</a></li>
        </ul>
        <!-- /top_menu -->
        <a href=\"#0\" class=\"open_close\">
            <i class=\"icon_menu\"></i><span>Menu</span>
        </a>
        <nav class=\"main-menu\">
            <div id=\"header_menu\">
                <a href=\"#0\" class=\"open_close\">
                    <i class=\"icon_close\"></i><span>Menu</span>
                </a>
                <a href=\"index.html\"><img src=\"img/logo.svg\" width=\"162\" height=\"35\" alt=\"\"></a>
            </div>
            <ul>
                <li class=\"submenu\">
                    <a href=\"#0\" class=\"show-submenu\">Home</a>
                    <ul>
                        <li><a href=\"index.html\">Address Autocomplete</a></li>
                        <li><a href=\"index-2.html\">Search by Keyword</a></li>
                        <li><a href=\"index-3.html\">Home Version 2</a></li>
                        <li><a href=\"index-4.html\">Video Bg Fallback Mobile</a></li>
                        <li class=\"third-level\"><a href=\"#0\">Sliders - Parallax <strong>New!</strong></a>
                            <ul>
                                <li><a href=\"index-6.html\">Owl Carousel</a></li>
                                <li><a href=\"index-7.html\">Revolution Slider 1</a></li>
                                <li><a href=\"index-8.html\">Revolution Slider 2</a></li>
                                <li><a href=\"index-9.html\">Youtube/Vimeo Parallax</a></li>
                                <li><a href=\"index-10.html\">MP4 Video Parallax</a></li>
                                <li><a href=\"index-11.html\">Parallax Image</a></li>
                            </ul>
                        </li>
                        <li><a href=\"index-12.html\">Text Rotator <strong>New!</strong></a></li>
                        <li><a href=\"index-5.html\">GDPR Cookie Bar EU Law</a></li>
                        <li><a href=\"header-user-logged.html\">Header User Logged</a></li>
                        <li><a href=\"header-cart-top.html\">Header Cart Top</a></li>
                        <li><a href=\"modal-advertise.html\">Modal 1 Cookie Session</a></li>
                        <li><a href=\"modal-newsletter.html\">Modal 2 Cookie Session</a></li>
                    </ul>
                </li>
                <li class=\"submenu\">
                    <a href=\"#0\" class=\"show-submenu\">Listing</a>
                    <ul>
                        <li class=\"third-level\"><a href=\"#0\">List pages</a>
                            <ul>
                                <li><a href=\"grid-listing-filterscol.html\">List default</a></li>
                                <li><a href=\"grid-listing-filterscol-map.html\">List with map</a></li>
                                <li><a href=\"listing-map.html\">List side map</a></li>
                                <li><a href=\"grid-listing-masonry.html\">List Masonry Filter</a></li>
                            </ul>
                        </li>
                        <li class=\"third-level\"><a href=\"#0\">Detail pages</a>
                            <ul>
                                <li><a href=\"detail-restaurant.html\">Detail page 1</a></li>
                                <li><a href=\"detail-restaurant-2.html\">Detail page 2</a></li>
                                <li><a href=\"detail-restaurant-3.html\">Detail page 3</a></li>
                                <li><a href=\"detail-restaurant-4.html\">Detail page 4</a></li>
                            </ul>
                        </li>
                        <li class=\"third-level\"><a href=\"#0\">OpenStreetMap</a>
                            <ul>
                                <li><a href=\"grid-listing-filterscol-openstreetmap.html\">List with map</a></li>
                                <li><a href=\"listing-map-openstreetmap.html\">List side map</a></li>
                                <li><a href=\"grid-listing-masonry-openstreetmap.html\">List Masonry Filter</a></li>
                            </ul>
                        </li>
                        <li><a href=\"submit-restaurant.html\">Submit Restaurant</a></li>
                        <li><a href=\"submit-rider.html\">Submit Rider</a></li>
                        <li><a href=\"order.html\">Order</a></li>
                        <li><a href=\"confirm.html\">Confirm Order</a></li>
                    </ul>
                </li>
                <li class=\"submenu\">
                    <a href=\"#0\" class=\"show-submenu\">Other Pages</a>
                    <ul>
                        <li><a href=\"admin_section/index.html\" target=\"_blank\">Admin Section</a></li>
                        <li><a href=\"404.html\">404 Error</a></li>
                        <li><a href=\"help.html\">Help and Faq</a></li>
                        <li><a href=\"blog.html\">Blog</a></li>
                        <li><a href=\"leave-review.html\">Leave a review</a></li>
                        <li><a href=\"contacts.html\">Contacts</a></li>
                        <li><a href=\"coming_soon/index.html\">Coming Soon</a></li>
                        <li><a href=\"login.html\">Sign In</a></li>
                        <li><a href=\"register.html\">Sign Up</a></li>
                        <li><a href=\"icon-pack-1.html\">Icon Pack 1</a></li>
                        <li><a href=\"icon-pack-2.html\">Icon Pack 2</a></li>
                        <li><a href=\"shortcodes.html\">Shortcodes</a></li>
                    </ul>
                </li>
                <li><a href=\"https://1.envato.market/EkmV9\" target=\"_parent\">Buy this template</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- /header -->

<main>
    ";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 113
        echo "</main>
<!-- /main -->

";
        // line 116
        echo twig_include($this->env, $context, "common/footer.html.twig");
        echo "
<!--/footer-->

<div id=\"toTop\"></div><!-- Back to top button -->

<!-- Sign In Modal -->
<div id=\"sign-in-dialog\" class=\"zoom-anim-dialog mfp-hide\">
    <div class=\"modal_header\">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class=\"sign-in-wrapper\">
            <a href=\"#0\" class=\"social_bt facebook\">Login with Facebook</a>
            <a href=\"#0\" class=\"social_bt google\">Login with Google</a>
            <div class=\"divider\"><span>Or</span></div>
            <div class=\"form-group\">
                <label>Email</label>
                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\">
                <i class=\"icon_mail_alt\"></i>
            </div>
            <div class=\"form-group\">
                <label>Password</label>
                <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" value=\"\">
                <i class=\"icon_lock_alt\"></i>
            </div>
            <div class=\"clearfix add_bottom_15\">
                <div class=\"checkboxes float-start\">
                    <label class=\"container_check\">Remember me
                        <input type=\"checkbox\">
                        <span class=\"checkmark\"></span>
                    </label>
                </div>
                <div class=\"float-end\"><a id=\"forgot\" href=\"javascript:void(0);\">Forgot Password?</a></div>
            </div>
            <div class=\"text-center\">
                <input type=\"submit\" value=\"Log In\" class=\"btn_1 full-width mb_5\">
                Don’t have an account? <a href=\"register.html\">Sign up</a>
            </div>
            <div id=\"forgot_pw\">
                <div class=\"form-group\">
                    <label>Please confirm login email below</label>
                    <input type=\"email\" class=\"form-control\" name=\"email_forgot\" id=\"email_forgot\">
                    <i class=\"icon_mail_alt\"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class=\"text-center\"><input type=\"submit\" value=\"Reset Password\" class=\"btn_1\"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Modal -->

";
        // line 169
        echo twig_include($this->env, $context, "common/scripts.html.twig");
        echo "


</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 112
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 112,  223 => 169,  167 => 116,  162 => 113,  160 => 112,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
{{ include('common/header.html.twig') }}
<body>

<header class=\"header black_nav clearfix element_to_stick\">
    <div class=\"container\">
        <div id=\"logo\">
            <a href=\"index.html\">
                <img src=\"img/logo_sticky.svg\" width=\"162\" height=\"35\" alt=\"\">
            </a>
        </div>
        <div class=\"layer\"></div><!-- Opacity Mask Menu Mobile -->
        <ul id=\"top_menu\">
            <li><a href=\"#sign-in-dialog\" id=\"sign-in\" class=\"login\">Sign In</a></li>
            <li><a href=\"#0\" class=\"wishlist_bt_top\" title=\"Your wishlist\">Your wishlist</a></li>
        </ul>
        <!-- /top_menu -->
        <a href=\"#0\" class=\"open_close\">
            <i class=\"icon_menu\"></i><span>Menu</span>
        </a>
        <nav class=\"main-menu\">
            <div id=\"header_menu\">
                <a href=\"#0\" class=\"open_close\">
                    <i class=\"icon_close\"></i><span>Menu</span>
                </a>
                <a href=\"index.html\"><img src=\"img/logo.svg\" width=\"162\" height=\"35\" alt=\"\"></a>
            </div>
            <ul>
                <li class=\"submenu\">
                    <a href=\"#0\" class=\"show-submenu\">Home</a>
                    <ul>
                        <li><a href=\"index.html\">Address Autocomplete</a></li>
                        <li><a href=\"index-2.html\">Search by Keyword</a></li>
                        <li><a href=\"index-3.html\">Home Version 2</a></li>
                        <li><a href=\"index-4.html\">Video Bg Fallback Mobile</a></li>
                        <li class=\"third-level\"><a href=\"#0\">Sliders - Parallax <strong>New!</strong></a>
                            <ul>
                                <li><a href=\"index-6.html\">Owl Carousel</a></li>
                                <li><a href=\"index-7.html\">Revolution Slider 1</a></li>
                                <li><a href=\"index-8.html\">Revolution Slider 2</a></li>
                                <li><a href=\"index-9.html\">Youtube/Vimeo Parallax</a></li>
                                <li><a href=\"index-10.html\">MP4 Video Parallax</a></li>
                                <li><a href=\"index-11.html\">Parallax Image</a></li>
                            </ul>
                        </li>
                        <li><a href=\"index-12.html\">Text Rotator <strong>New!</strong></a></li>
                        <li><a href=\"index-5.html\">GDPR Cookie Bar EU Law</a></li>
                        <li><a href=\"header-user-logged.html\">Header User Logged</a></li>
                        <li><a href=\"header-cart-top.html\">Header Cart Top</a></li>
                        <li><a href=\"modal-advertise.html\">Modal 1 Cookie Session</a></li>
                        <li><a href=\"modal-newsletter.html\">Modal 2 Cookie Session</a></li>
                    </ul>
                </li>
                <li class=\"submenu\">
                    <a href=\"#0\" class=\"show-submenu\">Listing</a>
                    <ul>
                        <li class=\"third-level\"><a href=\"#0\">List pages</a>
                            <ul>
                                <li><a href=\"grid-listing-filterscol.html\">List default</a></li>
                                <li><a href=\"grid-listing-filterscol-map.html\">List with map</a></li>
                                <li><a href=\"listing-map.html\">List side map</a></li>
                                <li><a href=\"grid-listing-masonry.html\">List Masonry Filter</a></li>
                            </ul>
                        </li>
                        <li class=\"third-level\"><a href=\"#0\">Detail pages</a>
                            <ul>
                                <li><a href=\"detail-restaurant.html\">Detail page 1</a></li>
                                <li><a href=\"detail-restaurant-2.html\">Detail page 2</a></li>
                                <li><a href=\"detail-restaurant-3.html\">Detail page 3</a></li>
                                <li><a href=\"detail-restaurant-4.html\">Detail page 4</a></li>
                            </ul>
                        </li>
                        <li class=\"third-level\"><a href=\"#0\">OpenStreetMap</a>
                            <ul>
                                <li><a href=\"grid-listing-filterscol-openstreetmap.html\">List with map</a></li>
                                <li><a href=\"listing-map-openstreetmap.html\">List side map</a></li>
                                <li><a href=\"grid-listing-masonry-openstreetmap.html\">List Masonry Filter</a></li>
                            </ul>
                        </li>
                        <li><a href=\"submit-restaurant.html\">Submit Restaurant</a></li>
                        <li><a href=\"submit-rider.html\">Submit Rider</a></li>
                        <li><a href=\"order.html\">Order</a></li>
                        <li><a href=\"confirm.html\">Confirm Order</a></li>
                    </ul>
                </li>
                <li class=\"submenu\">
                    <a href=\"#0\" class=\"show-submenu\">Other Pages</a>
                    <ul>
                        <li><a href=\"admin_section/index.html\" target=\"_blank\">Admin Section</a></li>
                        <li><a href=\"404.html\">404 Error</a></li>
                        <li><a href=\"help.html\">Help and Faq</a></li>
                        <li><a href=\"blog.html\">Blog</a></li>
                        <li><a href=\"leave-review.html\">Leave a review</a></li>
                        <li><a href=\"contacts.html\">Contacts</a></li>
                        <li><a href=\"coming_soon/index.html\">Coming Soon</a></li>
                        <li><a href=\"login.html\">Sign In</a></li>
                        <li><a href=\"register.html\">Sign Up</a></li>
                        <li><a href=\"icon-pack-1.html\">Icon Pack 1</a></li>
                        <li><a href=\"icon-pack-2.html\">Icon Pack 2</a></li>
                        <li><a href=\"shortcodes.html\">Shortcodes</a></li>
                    </ul>
                </li>
                <li><a href=\"https://1.envato.market/EkmV9\" target=\"_parent\">Buy this template</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- /header -->

<main>
    {% block content %}{% endblock %}
</main>
<!-- /main -->

{{ include('common/footer.html.twig') }}
<!--/footer-->

<div id=\"toTop\"></div><!-- Back to top button -->

<!-- Sign In Modal -->
<div id=\"sign-in-dialog\" class=\"zoom-anim-dialog mfp-hide\">
    <div class=\"modal_header\">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class=\"sign-in-wrapper\">
            <a href=\"#0\" class=\"social_bt facebook\">Login with Facebook</a>
            <a href=\"#0\" class=\"social_bt google\">Login with Google</a>
            <div class=\"divider\"><span>Or</span></div>
            <div class=\"form-group\">
                <label>Email</label>
                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\">
                <i class=\"icon_mail_alt\"></i>
            </div>
            <div class=\"form-group\">
                <label>Password</label>
                <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" value=\"\">
                <i class=\"icon_lock_alt\"></i>
            </div>
            <div class=\"clearfix add_bottom_15\">
                <div class=\"checkboxes float-start\">
                    <label class=\"container_check\">Remember me
                        <input type=\"checkbox\">
                        <span class=\"checkmark\"></span>
                    </label>
                </div>
                <div class=\"float-end\"><a id=\"forgot\" href=\"javascript:void(0);\">Forgot Password?</a></div>
            </div>
            <div class=\"text-center\">
                <input type=\"submit\" value=\"Log In\" class=\"btn_1 full-width mb_5\">
                Don’t have an account? <a href=\"register.html\">Sign up</a>
            </div>
            <div id=\"forgot_pw\">
                <div class=\"form-group\">
                    <label>Please confirm login email below</label>
                    <input type=\"email\" class=\"form-control\" name=\"email_forgot\" id=\"email_forgot\">
                    <i class=\"icon_mail_alt\"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class=\"text-center\"><input type=\"submit\" value=\"Reset Password\" class=\"btn_1\"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Modal -->

{{ include('common/scripts.html.twig') }}


</body>
</html>", "base.html.twig", "/var/html/symfony/templates/base.html.twig");
    }
}
