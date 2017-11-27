<?php

/* home/home.twig */
class __TwigTemplate_d524ac88cd3e3cf8ad76f3ae32a79555267e011651a103b17d5e97f4a606d7a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "home/home.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "overall/layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "   <div class=\"container\">
           <div class=\"card card-container\">
            <!-- <img class=\"profile-img-card\" src=\"//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120\" alt=\"\" /> -->
            <img id=\"profile-img\" class=\"profile-img-card\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" />
            <p id=\"profile-name\" class=\"profile-name-card\"></p>
            <form class=\"form-signin\" id=\"login_form\" method=\"POST\">
                <span id=\"reauth-email\" class=\"reauth-email\"></span>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required autofocus>
                <input type=\"password\" id=\"pass\" name=\"pass\" class=\"form-control\" placeholder=\"Password\" required>
                <div id=\"remember\" class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" value=\"remember-me\"> Recuerdame
                    </label>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\" id=\"login\">INICIAR</button>
            </form><!-- /form -->
            <a href=\"#\" class=\"forgot-password\">
                Recuperar la password?
            </a>
        </div><!-- /card-container -->
    
    </div><!-- /container -->
";
    }

    // line 26
    public function block_appScript($context, array $blocks = array())
    {
        // line 27
        echo "    <script src=\"views/app/js/login/login.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 27,  58 => 26,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'overall/layout' %}
{% block appBody %}
   <div class=\"container\">
           <div class=\"card card-container\">
            <!-- <img class=\"profile-img-card\" src=\"//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120\" alt=\"\" /> -->
            <img id=\"profile-img\" class=\"profile-img-card\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" />
            <p id=\"profile-name\" class=\"profile-name-card\"></p>
            <form class=\"form-signin\" id=\"login_form\" method=\"POST\">
                <span id=\"reauth-email\" class=\"reauth-email\"></span>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required autofocus>
                <input type=\"password\" id=\"pass\" name=\"pass\" class=\"form-control\" placeholder=\"Password\" required>
                <div id=\"remember\" class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" value=\"remember-me\"> Recuerdame
                    </label>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\" id=\"login\">INICIAR</button>
            </form><!-- /form -->
            <a href=\"#\" class=\"forgot-password\">
                Recuperar la password?
            </a>
        </div><!-- /card-container -->
    
    </div><!-- /container -->
{% endblock %}
{% block appScript %}
    <script src=\"views/app/js/login/login.js\"></script>
{% endblock %}", "home/home.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\home\\home.twig");
    }
}
