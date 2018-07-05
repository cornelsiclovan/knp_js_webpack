<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c4b90ba3ff88b81b6f5ccc497bd9e56506c7cf2ea01d09aad3587dfb238d2326 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/login.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"container\">
        <div class=\"wrapper\">
            <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
                <h3><img class=\"dumbbell\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/static/dumbbell.png"), "html", null, true);
        echo "\">Login! Start Lifting!</h3>
                <div class=\"js-recommended-login\">
                    <a href=\"#\" class=\"js-show-login\">Don't know the login?</a>
                    <div class=\"js-recommended-login-details\" style=\"display: none;\">
                        Sir or madam, might I recommend that you try the following login details:
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Username</th>
                                    <td>cindy_clawford</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>pumpup</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class=\"colorgraph\" />

                <br/>

                ";
        // line 38
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                    <div class=\"alert alert-block alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 39, $this->source); })()), "messageKey", array()), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                ";
        }
        // line 41
        echo "
                <input type=\"text\"
                       class=\"form-control js-login-field-username\"
                       name=\"_username\"
                       value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\"
                       required=\"required\"
                       placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                />
                <input type=\"password\"
                       class=\"form-control\"
                       name=\"_password\"
                       required=\"required\"
                       placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                />

                <input type=\"checkbox\" name=\"_remember_me\" checked style=\"display: none;\" />

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">
                    Login
                </button>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  143 => 53,  134 => 47,  129 => 45,  123 => 41,  117 => 39,  115 => 38,  89 => 15,  85 => 14,  81 => 12,  72 => 11,  60 => 8,  54 => 6,  45 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('build/login.js') }}\"></script>
{% endblock %}

{% block fos_user_content %}
    <div class=\"container\">
        <div class=\"wrapper\">
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
                <h3><img class=\"dumbbell\" src=\"{{ asset('build/static/dumbbell.png') }}\">Login! Start Lifting!</h3>
                <div class=\"js-recommended-login\">
                    <a href=\"#\" class=\"js-show-login\">Don't know the login?</a>
                    <div class=\"js-recommended-login-details\" style=\"display: none;\">
                        Sir or madam, might I recommend that you try the following login details:
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Username</th>
                                    <td>cindy_clawford</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>pumpup</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class=\"colorgraph\" />

                <br/>

                {% if error %}
                    <div class=\"alert alert-block alert-danger\">{{ error.messageKey|trans }}</div>
                {% endif %}

                <input type=\"text\"
                       class=\"form-control js-login-field-username\"
                       name=\"_username\"
                       value=\"{{ last_username }}\"
                       required=\"required\"
                       placeholder=\"{{ 'security.login.username'|trans }}\"
                />
                <input type=\"password\"
                       class=\"form-control\"
                       name=\"_password\"
                       required=\"required\"
                       placeholder=\"{{ 'security.login.password'|trans }}\"
                />

                <input type=\"checkbox\" name=\"_remember_me\" checked style=\"display: none;\" />

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">
                    Login
                </button>
            </form>
        </div>
    </div>
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "D:\\symfony\\knp_js_webpack\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
