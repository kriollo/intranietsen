<?php

/* administracion/usuarios.twig */
class __TwigTemplate_fb12ae11c5308575aa42d680da33fe89ada7f3fe6be34f510c6ca932983d0d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/usuarios.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portal/portal";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "  <section class=\"content-header\">
      <h4>
        <i class=\"fa fa-user\"></i> REGISTRO DE USUARIOS
      </h4>
      <ol class=\"breadcrumb\">
        <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Inicio </a></li>
        <li><a href=\"administracion/usuario\"> Usuarios </a></li>
        <li class=\"active\"> agregar </li>
      </ol>
  </section>

  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <form id=\"register_user_form\"  action=\"\" method=\"POST\">
            <div class=\"box-body col-sm-4\"></div>
            <div class=\"box-body col-sm-4\">
              <div class=\"form-group\">
                <input class=\"form-control\" name=\"name\"        id=\"name\"        type=\"text\"     placeholder=\"Nombre Completo\" required/>
                <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" required/>
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" name=\"pass\"        id=\"pass\"        type=\"password\" placeholder=\"Password\" required/>
                <input class=\"form-control\" name=\"pass_repeat\" id=\"pass_repeat\" type=\"password\" placeholder=\"Repita Password\" required/>
              </div>
              <div class=\"form-group\">
                <select name='perfil' id='perfil' class='form-control'>
                <option selected='selected'>--</option>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_perfiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["db_perfiles"] ?? null))) {
                // line 33
                echo "                <option value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "</option>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                <option value='Otro'>Otro</option>
                </select>
              </div>
              <div class=\"checkbox\">
                <label>
                <input name=\"rol\" type=\"checkbox\" id=\"admin\" /> Usuario Administrador?
                </label>
              </div>
              <div class=\"form-group\">
                <button type=\"button\" id=\"register\" class=\"btn btn-default\">Grabar</button>
                <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
";
    }

    // line 54
    public function block_appScript($context, array $blocks = array())
    {
        // line 55
        echo "    <script src=\"views/app/js/administracion/administracion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "administracion/usuarios.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 55,  102 => 54,  80 => 35,  68 => 33,  63 => 32,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
  <section class=\"content-header\">
      <h4>
        <i class=\"fa fa-user\"></i> REGISTRO DE USUARIOS
      </h4>
      <ol class=\"breadcrumb\">
        <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Inicio </a></li>
        <li><a href=\"administracion/usuario\"> Usuarios </a></li>
        <li class=\"active\"> agregar </li>
      </ol>
  </section>

  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <form id=\"register_user_form\"  action=\"\" method=\"POST\">
            <div class=\"box-body col-sm-4\"></div>
            <div class=\"box-body col-sm-4\">
              <div class=\"form-group\">
                <input class=\"form-control\" name=\"name\"        id=\"name\"        type=\"text\"     placeholder=\"Nombre Completo\" required/>
                <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" required/>
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" name=\"pass\"        id=\"pass\"        type=\"password\" placeholder=\"Password\" required/>
                <input class=\"form-control\" name=\"pass_repeat\" id=\"pass_repeat\" type=\"password\" placeholder=\"Repita Password\" required/>
              </div>
              <div class=\"form-group\">
                <select name='perfil' id='perfil' class='form-control'>
                <option selected='selected'>--</option>
                {% for p in db_perfiles if false != db_perfiles %}
                <option value='{{ p.nombre }}'>{{ p.nombre }}</option>
                {% endfor %}
                <option value='Otro'>Otro</option>
                </select>
              </div>
              <div class=\"checkbox\">
                <label>
                <input name=\"rol\" type=\"checkbox\" id=\"admin\" /> Usuario Administrador?
                </label>
              </div>
              <div class=\"form-group\">
                <button type=\"button\" id=\"register\" class=\"btn btn-default\">Grabar</button>
                <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
{% endblock %}
{% block appScript %}
    <script src=\"views/app/js/administracion/administracion.js\"></script>
{% endblock %}
", "administracion/usuarios.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\administracion\\usuarios.twig");
    }
}
