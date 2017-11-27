<?php

/* rrhh/editar_trabajadores.twig */
class __TwigTemplate_d309e3609b79d716ceb893a2c4a33007c8bf7a5b0208da472438add38566bff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/editar_trabajadores.twig", 1);
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
            <small>Editar</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"rrhh/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"rrhh/listar_trabajadores\">Listado de Trabajadores</a></li>
        <li class=\"active\">Editar Trabajador</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"update_trabajador_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_personal' id='id_personal' value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_trabajador"] ?? null), "id_personal", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"rut\" id=\"rut\" type=\"text\" placeholder=\"RUT xxxxxxxx s/digito (Requerido)\" value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_trabajador"] ?? null), "rut", array()), "html", null, true);
        echo "'/>
                  <input class=\"form-control\" name=\"nombres\" id=\"nombres\" type=\"text\" placeholder=\"Nombre Completo (Requerido)\" value='";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_trabajador"] ?? null), "nombres", array()), "html", null, true);
        echo "'/>
                  <input class=\"form-control\" name=\"fono\" id=\"fono\" type=\"text\" placeholder=\"Fono\" value='";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_trabajador"] ?? null), "fono", array()), "html", null, true);
        echo "'/>
                </div>
                <div class=\"form-group\">Fecha Nacimiento
                  <input class=\"form-control\" name=\"f_nacimiento\" id=\"f_nacimiento\" type=\"date\" value='";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_trabajador"] ?? null), "f_nacimiento", array()), "html", null, true);
        echo "'/>
                </div>
                <div class=\"form-group\">Cargo
                  <select name='cargo' id='cargo' class='form-control'>
                    <option>--</option>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cargos_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["cargos_db"] ?? null))) {
                // line 39
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "id_cargo", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_trabajador"] ?? null), "id_cargo", array()))) {
                    // line 40
                    echo "                        <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "id_cargo", array()), "html", null, true);
                    echo "' selected='selected'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "descripcion", array()), "html", null, true);
                    echo "</option>
                      ";
                } else {
                    // line 42
                    echo "                        <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "id_cargo", array()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "descripcion", array()), "html", null, true);
                    echo "</option>
                      ";
                }
                // line 44
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                  </select>
                </div>
                <div class=\"form-group\">Area
                  <select name='area' id='area' class='form-control'>
                    <option>--</option>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["areas_db"] ?? null))) {
                // line 51
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "id_area", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_trabajador"] ?? null), "id_area", array()))) {
                    // line 52
                    echo "                        <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "id_area", array()), "html", null, true);
                    echo "' selected='selected'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "descripcion", array()), "html", null, true);
                    echo "</option>
                      ";
                } else {
                    // line 54
                    echo "                          <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "id_area", array()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "descripcion", array()), "html", null, true);
                    echo "</option>
                      ";
                }
                // line 56
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                  </select>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_personal\" class=\"btn btn-default\">Grabar</button>
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

    // line 71
    public function block_appScript($context, array $blocks = array())
    {
        // line 72
        echo "    <script src=\"views/app/js/rrhh/rrhh.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/editar_trabajadores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 72,  174 => 71,  157 => 57,  150 => 56,  142 => 54,  134 => 52,  131 => 51,  126 => 50,  119 => 45,  112 => 44,  104 => 42,  96 => 40,  93 => 39,  88 => 38,  80 => 33,  74 => 30,  70 => 29,  66 => 28,  61 => 26,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/editar_trabajadores.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\editar_trabajadores.twig");
    }
}
