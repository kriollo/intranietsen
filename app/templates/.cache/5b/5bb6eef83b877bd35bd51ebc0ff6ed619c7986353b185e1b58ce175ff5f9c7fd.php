<?php

/* administracion/edit_user.twig */
class __TwigTemplate_e21a1de0d3ff03951d68af280c21a0df80f5be1d38bc35b8d07cf7cf102cc6e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/edit_user.twig", 1);
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
        <i class=\"fa fa-user\"></i> EDITAR USUARIO
      </h4>
      <ol class=\"breadcrumb\">
        <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Inicio </a></li>
        <li><a href=\"administracion/usuario\"> Usuarios </a></li>
        <li class=\"active\"> editar </li>
      </ol>
  </section>

  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <form id=\"update_user_form\"  action=\"\" method=\"POST\">
            <input type='hidden' name='id_user' value='";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "id_user", array()), "html", null, true);
        echo "' />
            <div class=\"box-body col-sm-2\"></div>
            <div class=\"box-body col-sm-4\">
              <div class=\"form-group\">
                <input class=\"form-control\" name=\"name\"        id=\"name\"        type=\"text\"     placeholder=\"Nombre Completo\" value='";
        // line 23
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "name", array())), "html", null, true);
        echo "'/>
                <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" value='";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "email", array()), "html", null, true);
        echo "' readonly/>
                <input class=\"form-control\" name=\"cargo\"       id=\"cargo\"       type=\"text\"    placeholder=\"cargo\" value='";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "cargo", array()), "html", null, true);
        echo "'/>
                <input class=\"form-control\" name=\"fono\"       id=\"fono\"       type=\"text\"    placeholder=\"Fono\" value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "fono", array()), "html", null, true);
        echo "'/>
              </div>
              <div class=\"form-group\">
                <select name='perfil' id='perfil' class='form-control'>
                  <option>--</option>
                  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_perfiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["db_perfiles"] ?? null))) {
                // line 32
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "perfil", array()))) {
                    // line 33
                    echo "                      <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "' selected='selected'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "</option>
                    ";
                } else {
                    // line 35
                    echo "                      <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "</option>
                    ";
                }
                // line 37
                echo "                  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                  ";
        if (("DEFINIDO" == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "perfil", array()))) {
            // line 39
            echo "                    <option value='DEFINIDO' selected='selected'>DEFINIDO</option>
                  ";
        } else {
            // line 41
            echo "                    <option value='DEFINIDO'>DEFINIDO</option>
                  ";
        }
        // line 43
        echo "                </select>
              </div>
              <div class=\"checkbox\">
                <label>
                  ";
        // line 47
        if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "rol", array()))) {
            // line 48
            echo "                    <input name=\"rol\" type=\"checkbox\" id=\"admin\" />
                  ";
        } else {
            // line 50
            echo "                    <input name=\"rol\" type=\"checkbox\" id=\"admin\" checked />
                  ";
        }
        // line 52
        echo "                  Usuario Administrador?

                </label>
              </div>
              <div class=\"form-group\">
                <button type=\"button\" id=\"update_user\" class=\"btn btn-default\">Grabar</button>
              </div>
            </div>
            <div class=\"box-body col-sm-4\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Foto</label>
                <div class=\"col-sm-5\">
                  <input type=\"file\" name=\"foto\" id=\"foto\">
                  <br/>
                  ";
        // line 66
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "foto", array()) == 1)) {
            // line 67
            echo "                    <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"views/app/images/avatares/";
            echo twig_escape_filter($this->env, sprintf("%s%s%s", twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "id_user", array()), ".", twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "ext_foto", array())), "html", null, true);
            echo "\" width=\"128\">
                  ";
        } else {
            // line 69
            echo "                    <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" width=\"128\">
                  ";
        }
        // line 71
        echo "                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
";
    }

    // line 80
    public function block_appScript($context, array $blocks = array())
    {
        // line 81
        echo "    <script src=\"views/app/js/administracion/administracion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "administracion/edit_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 81,  175 => 80,  163 => 71,  159 => 69,  153 => 67,  151 => 66,  135 => 52,  131 => 50,  127 => 48,  125 => 47,  119 => 43,  115 => 41,  111 => 39,  108 => 38,  101 => 37,  93 => 35,  85 => 33,  82 => 32,  77 => 31,  69 => 26,  65 => 25,  61 => 24,  57 => 23,  50 => 19,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
  <section class=\"content-header\">
      <h4>
        <i class=\"fa fa-user\"></i> EDITAR USUARIO
      </h4>
      <ol class=\"breadcrumb\">
        <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Inicio </a></li>
        <li><a href=\"administracion/usuario\"> Usuarios </a></li>
        <li class=\"active\"> editar </li>
      </ol>
  </section>

  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <form id=\"update_user_form\"  action=\"\" method=\"POST\">
            <input type='hidden' name='id_user' value='{{ db_users.id_user }}' />
            <div class=\"box-body col-sm-2\"></div>
            <div class=\"box-body col-sm-4\">
              <div class=\"form-group\">
                <input class=\"form-control\" name=\"name\"        id=\"name\"        type=\"text\"     placeholder=\"Nombre Completo\" value='{{ db_users.name|raw|upper }}'/>
                <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" value='{{ db_users.email }}' readonly/>
                <input class=\"form-control\" name=\"cargo\"       id=\"cargo\"       type=\"text\"    placeholder=\"cargo\" value='{{ db_users.cargo }}'/>
                <input class=\"form-control\" name=\"fono\"       id=\"fono\"       type=\"text\"    placeholder=\"Fono\" value='{{ db_users.fono }}'/>
              </div>
              <div class=\"form-group\">
                <select name='perfil' id='perfil' class='form-control'>
                  <option>--</option>
                  {% for p in db_perfiles if false != db_perfiles %}
                    {% if p.nombre == db_users.perfil  %}
                      <option value='{{ p.nombre }}' selected='selected'>{{ p.nombre }}</option>
                    {% else %}
                      <option value='{{ p.nombre }}'>{{ p.nombre }}</option>
                    {% endif %}
                  {% endfor %}
                  {% if 'DEFINIDO' == db_users.perfil  %}
                    <option value='DEFINIDO' selected='selected'>DEFINIDO</option>
                  {% else %}
                    <option value='DEFINIDO'>DEFINIDO</option>
                  {% endif %}
                </select>
              </div>
              <div class=\"checkbox\">
                <label>
                  {% if 0 == db_users.rol  %}
                    <input name=\"rol\" type=\"checkbox\" id=\"admin\" />
                  {% else %}
                    <input name=\"rol\" type=\"checkbox\" id=\"admin\" checked />
                  {% endif %}
                  Usuario Administrador?

                </label>
              </div>
              <div class=\"form-group\">
                <button type=\"button\" id=\"update_user\" class=\"btn btn-default\">Grabar</button>
              </div>
            </div>
            <div class=\"box-body col-sm-4\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Foto</label>
                <div class=\"col-sm-5\">
                  <input type=\"file\" name=\"foto\" id=\"foto\">
                  <br/>
                  {% if db_users.foto == 1 %}
                    <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"views/app/images/avatares/{{ '%s%s%s'|format(db_users.id_user,'.',db_users.ext_foto) }}\" width=\"128\">
                  {% else %}
                    <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" width=\"128\">
                  {% endif %}
                </div>
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
", "administracion/edit_user.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\administracion\\edit_user.twig");
    }
}
