<?php

/* rrhh/horasextra/ingreso_horas_extra.twig */
class __TwigTemplate_6446d8543e6c293b904d2b6b7d1bd1f17944e1f99fe0a4dadd9ee56bfc5984a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/ingreso_horas_extra.twig", 1);
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
        // line 3
        echo "  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
    }

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "<section class=\"content-header\">
    <h1>
        RRHH
        <small>Solicitar Hora Extra</small>
        ";
        // line 10
        if ((($context["No"] ?? null) > 1)) {
            // line 11
            echo "          <center>
            <button class=\"btn btn-success\" type=\"button\" id=\"btn_horaextra\">
              <span>Solicitar Horas Extra</span></button>
          </center>
        ";
        }
        // line 16
        echo "    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li><a href=\"rrhh/revisar_horas_extra\">Listado de Horas Extras</a></li>
    <li class=\"active\">Solicitar Hora Extra</li>
    </ol>
</section>
<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"col-md-6\">
                    <div class=\"box\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Datos para la solicitud</h3>
                        </div>
                        <div class=\"box-body\">
                            <form name=\"form_horax\" id=\"form_horax\" action=\"\" method=\"POST\">
                                <table class=\"table table-bordered\">
                                    <tr>
                                        <td>Fecha:</td>
                                        <td><input type=\"date\" class=\"form-control\" name=\"fecha_solicitud\" id=\"fecha_solicitud\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td>Desde:</td>
                                        <td><input type=\"time\" class=\"form-control\" name=\"hora_desde\" id=\"hora_desde\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:m"), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td>Hasta:</td>
                                        <td><input type=\"time\" class=\"form-control\" name=\"hora_hasta\" id=\"hora_hasta\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:m"), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td>Motivo:</td>
                                        <td><input type=\"text\" class=\"form-control\" name=\"motivo\" id=\"motivo\" placeholder=\"Agregar un motivo para solicitud de horas extra.(REQUERIDO)\"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"box\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Ingrese personal asociado</h3>
                            <form id=\"form_buscar\" name=\"form_buscar\">
                                <div class=\"form-group margin\">
                                    <button class=\"btn btn-primary\" style=\"position:absolute;display:inline-block;\" type=\"button\" id=\"btn_tmp_horaextra\" onmouseover=\"buscar_coincidencia()\">
                                    <span>Agregar</span></button>
                                    <input type=\"text\" class=\"form-control\" style=\"padding-left:20%;\" placeholder=\"Buscar usuario por nombre o RUT\" name=\"busca\" id=\"busca\">
                                    <input type=\"hidden\" name=\"rut\" id=\"rut\">
                                </div>
                            </form>
                        </div>
                        <div class=\"box-body\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 80
                echo "                                        <tr>
                                            <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombres", array()), "html", null, true);
                echo "</td>
                                            <td class='center' width='40'>
                                                <a data-toggle='tooltip' data-placement='top' title='Eliminar' id=\"btn_eliminar1\" onclick=\"eliminar_solicitud(";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id", array()), "html", null, true);
                echo ")\" class='btn btn-warning btn-sm'>
                                                    <i class='glyphicon glyphicon-trash'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 99
    public function block_appScript($context, array $blocks = array())
    {
        // line 100
        echo "    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"views/app/js/rrhh/horasextra.js\"></script>
    <script>
        \$(function() {
            var dbdatos = [";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_users"] ?? null))) {
                // line 105
                echo "                '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombres", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
                echo "',
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "];
            \$('#busca').autocomplete({source: dbdatos});
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/ingreso_horas_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 106,  183 => 105,  178 => 104,  172 => 100,  169 => 99,  156 => 89,  143 => 83,  138 => 81,  135 => 80,  130 => 79,  94 => 46,  87 => 42,  80 => 38,  56 => 16,  49 => 11,  47 => 10,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/ingreso_horas_extra.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\horasextra\\ingreso_horas_extra.twig");
    }
}
