<?php

/* despacho/tecnicos/importar_tecnico.twig */
class __TwigTemplate_f9685569c8e8d66cddf0aaa36a22a0fc6ef19933f5df3463cff2bd99be0533c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/tecnicos/importar_tecnico.twig", 1);
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
        echo "<section class=\"content-header\">
    <h1>
        Despacho
        <small>Importar Tecnico</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li><a href=\"despacho/mantenedores_crud_masters\">Mantenedores</a></li>
    <li><a href=\"despacho/listar_tecnicos\">Listado de Tecnicos</a></li>
    <li class=\"active\">Importar Tecnico</li>
    </ol>
</section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body col-sm-6\">
                    <div class=\"form-group\">
                        <form id=\"formturnos\" name=\"formturnos\" method=\"post\" enctype=\"multipart/form-data\">
                            <input class='filestyle' data-buttonText=\"Logo\" type=\"file\" name=\"imagefile\" id=\"imagefile\" onchange=\"document.getElementById('archivo').value=document.getElementById('imagefile').value\" tabindex=\"-1\" style=\"position:absolute; clip: rect(0px 0px 0px 0px);\" accept=\"file_extension|image/*|media_type\">
                            <div class=\"bootstrap-filestyle input-group\">
                                <input type=\"text\" class=\"form-control\" id=\"archivo\" placeholder=\"\" disabled=\"\">
                                <span class=\"group-span-filestyle input-group-btn\" tabindex=\"0\">
                                    <label for=\"imagefile\" class=\"btn btn-default \">
                                    <span class=\"icon-span-filestyle glyphicon glyphicon-share\"></span>
                                    <span class=\"buttonText\">Buscar Archivo</span>
                                    </label>
                                </span>
                            </div>
                            <div id=\"div_cargando\">
                                <a class=\"btn btn-success btn-social\" title=\"Exportar a Excel\" data-toggle=\"tooltip\" onclick=\"subirarchivoexcel()\">
                                    <i class=\"fa fa-arrow-up\"></i> Cargar Tecnicos
                                </a>
                            </div>
                        </form>
                    </div>
                    <p><strong>Ultimos 5 archivos cargados</strong></p>
                    <table class=\"table table-bordered\">
                      <thead>
                        <th>No</th>
                        <th>Fecha y hora</th>
                        <th>Nombre de Archivo</th>
                      </thead>
                      <tbody>
                        ";
        // line 49
        $context["No"] = 1;
        // line 50
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_archivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_archivos"] ?? null))) {
                // line 51
                echo "                          <tr>
                            <td>";
                // line 52
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_hora", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre_archivo", array()), "html", null, true);
                echo "</td>
                          </tr>
                          ";
                // line 56
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 57
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                      </tbody>
                    </table>
                </div>
                <div class=\"box-body col-sm-6\">
                    <span><b>Formato de Archivo</b>
                    <p>Col A -> Rut</p>
                    <p>Col B -> Nombre</p>
                    <p>Col C -> Codigo Tango</p>
                    <p>Col D -> Telefono</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 75
    public function block_appScript($context, array $blocks = array())
    {
        // line 76
        echo "    <script src=\"views/app/js/despacho/tecnicos.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "despacho/tecnicos/importar_tecnico.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 76,  131 => 75,  112 => 58,  105 => 57,  103 => 56,  98 => 54,  94 => 53,  90 => 52,  87 => 51,  81 => 50,  79 => 49,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/tecnicos/importar_tecnico.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\tecnicos\\importar_tecnico.twig");
    }
}
