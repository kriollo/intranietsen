<?php

/* rrhh/nuevo_trabajador.twig */
class __TwigTemplate_6777ca1c308ef997c190674c5ff8ce0ea5c1b57c95f2920e89e00bd1b3f15657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/nuevo_trabajador.twig", 1);
        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
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
    public function block_appStylos($context, array $blocks = array())
    {
    }

    // line 4
    public function block_appBody($context, array $blocks = array())
    {
        // line 5
        echo "    <section class=\"content-header\">
        <h1>
            RRHH
            <small>Agregar</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"rrhh/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"rrhh/listar_trabajadores\">Listado de Trabajadores</a></li>
        <li class=\"active\">Nuevo Trabajador</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"register_trabajador_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">  
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"rut\" id=\"rut\" type=\"text\" placeholder=\"RUT xxxxxxxx s/digito (Requerido)\" required/>
                  <input class=\"form-control\" name=\"nombres\" id=\"nombres\" type=\"text\" placeholder=\"Nombre Completo (Requerido)\" required/>
                  <input class=\"form-control\" name=\"fono\" id=\"fono\" type=\"text\" placeholder=\"Fono\" required/>
                </div>
                <div class=\"form-group\">Fecha Nacimiento
                  <input class=\"form-control\" name=\"f_nacimiento\" id=\"f_nacimiento\" type=\"date\" value='";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'/>
                </div>
                <div class=\"form-group\">Cargo
                  <select name='cargo' id='cargo' class='form-control'>
                    <option selected='selected'>--</option>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cargos_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["cargos_db"] ?? null))) {
                // line 38
                echo "                      <option value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "id_cargo", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "descripcion", array()), "html", null, true);
                echo "</option>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                  </select>
                </div>
                <div class=\"form-group\">Area
                  <select name='area' id='area' class='form-control'>
                    <option selected='selected'>--</option>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["areas_db"] ?? null))) {
                // line 46
                echo "                      <option value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "id_area", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "descripcion", array()), "html", null, true);
                echo "</option>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                  </select>
                </div>
                <div class=\"form-group\">
                  <button type=\"button\" id=\"register_personal\" class=\"btn btn-default\">Grabar</button>
                  <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
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

    // line 63
    public function block_appScript($context, array $blocks = array())
    {
        // line 64
        echo "    <script src=\"views/app/js/rrhh/rrhh.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/nuevo_trabajador.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 64,  134 => 63,  116 => 48,  104 => 46,  99 => 45,  92 => 40,  80 => 38,  75 => 37,  67 => 32,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/nuevo_trabajador.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\nuevo_trabajador.twig");
    }
}
