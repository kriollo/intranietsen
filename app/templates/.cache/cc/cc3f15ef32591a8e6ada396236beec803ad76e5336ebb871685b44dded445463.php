<?php

/* rrhh/tecnicos/editar_tecnicos.twig */
class __TwigTemplate_66b045f62dd28f312085c73a985eef19443174d03e3331a8eee02d709a5cd954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/tecnicos/editar_tecnicos.twig", 1);
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

    // line 3
    public function block_appBody($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            RRHH
            <small>Editar Tecnico</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"rrhh/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"rrhh/listar_tecnicos\">Listado de Tecnicos</a></li>
        <li class=\"active\">Editar Tecnico</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_tecnico_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_tecnico' id='id_tecnico' value='";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_tecnico"] ?? null), "id_tecnicos", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"rut\" id=\"rut\" type=\"text\" placeholder=\"RUT xxxxxxxx s/digito (Requerido)\" value='";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_tecnico"] ?? null), "rut", array()), "html", null, true);
        echo "'/>
                  <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" placeholder=\"Nombre Completo (Requerido)\" value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_tecnico"] ?? null), "nombre", array()), "html", null, true);
        echo "'/>
                  <input class=\"form-control\" name=\"codigo\" id=\"codigo\" type=\"text\" placeholder=\"Codigo\" value='";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_tecnico"] ?? null), "codigo", array()), "html", null, true);
        echo "'/>
                  <input class=\"form-control\" name=\"telefono\" id=\"telefono\" type=\"text\" placeholder=\"telefono\" value='";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_tecnico"] ?? null), "telefono", array()), "html", null, true);
        echo "'/>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_tecnico\" class=\"btn btn-default\">Grabar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

";
    }

    // line 44
    public function block_appScript($context, array $blocks = array())
    {
        // line 45
        echo "    <script src=\"views/app/js/rrhh/tecnicos.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/tecnicos/editar_tecnicos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 45,  90 => 44,  72 => 30,  68 => 29,  64 => 28,  60 => 27,  55 => 25,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}

{% block appBody %}
    <section class=\"content-header\">
        <h1>
            RRHH
            <small>Editar Tecnico</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"rrhh/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"rrhh/listar_tecnicos\">Listado de Tecnicos</a></li>
        <li class=\"active\">Editar Tecnico</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_tecnico_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_tecnico' id='id_tecnico' value='{{ db_tecnico.id_tecnicos }}' />
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"rut\" id=\"rut\" type=\"text\" placeholder=\"RUT xxxxxxxx s/digito (Requerido)\" value='{{ db_tecnico.rut }}'/>
                  <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" placeholder=\"Nombre Completo (Requerido)\" value='{{ db_tecnico.nombre }}'/>
                  <input class=\"form-control\" name=\"codigo\" id=\"codigo\" type=\"text\" placeholder=\"Codigo\" value='{{ db_tecnico.codigo }}'/>
                  <input class=\"form-control\" name=\"telefono\" id=\"telefono\" type=\"text\" placeholder=\"telefono\" value='{{ db_tecnico.telefono }}'/>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_tecnico\" class=\"btn btn-default\">Grabar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

{% endblock %}
{% block appScript %}
    <script src=\"views/app/js/rrhh/tecnicos.js\"></script>
{% endblock %}
", "rrhh/tecnicos/editar_tecnicos.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\tecnicos\\editar_tecnicos.twig");
    }
}
