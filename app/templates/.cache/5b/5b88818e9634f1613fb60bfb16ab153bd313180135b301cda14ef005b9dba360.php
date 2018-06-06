<?php

/* cierreseguro/cargaordenes/cargaordenes.twig */
class __TwigTemplate_30bd5d5703f9060be91824938d3430536055875c0df0875db98eaf4c5404b63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "cierreseguro/cargaordenes/cargaordenes.twig", 1);
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
        echo "
    <section class=\"content-header\">
        <h1>
            Cierre Seguro
            <small>Carga de Cierre seguro</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
            <li class=\"active\">Cargar OT cierre seguro</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-body col-lg-7\">
                        <div class=\"form-group\">
                            <form id=\"formcarga\" name=\"formcarga\" method=\"post\">
                                <input class='filestyle' data-buttontext=\"Logo\" id=\"blindfile\" onchange=\"document.getElementById('archivo').value=document.getElementById('blindfile').value\" tabindex=\"-1\" style=\"position:absolute; clip: rect(0px 0px 0px 0px);\" type=\"file\" name=\"files[]\" accept=\"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\">
                                <div class=\"bootstrap-filestyle input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"archivo\" placeholder=\"\" disabled=\"\">
                                    <span class=\"group-span-filestyle input-group-btn\" tabindex=\"0\">
                                        <label for=\"blindfile\" class=\"btn btn-default \">
                                            <span class=\"icon-span-filestyle glyphicon glyphicon-share\"></span>
                                            <span class=\"buttonText\">Buscar Archivo</span>
                                        </label>
                                    </span>
                                </div>
                                <div id=\"div_tipobase\" class=\"col-lg-4\">
                                    <select class=\"form-control\" name=\"tipo_base\">
                                        <option value=\"--\">--</option>
                                        <option value=\"SSTT\">SSTT</option>
                                        <option value=\"ALTAS\">ALTAS</option>
                                    </select>
                                </div>
                                <div id=\"div_cargando\">
                                    <a class=\"btn btn-success btn-social\" title=\"Importar Excel\" data-toggle=\"tooltip\" onclick=\"subirarchivoexcel()\">
                                        <i class=\"fa fa-arrow-up\"></i>
                                        Cargar Ordenes
                                    </a>
                                </div>
                            </form>
                        </div>

                        <p>
                            <strong>Ultimos 5 archivos cargados</strong>
                        </p>
                        <table class=\"table table-bordered\">
                            <thead>
                                <th>No</th>
                                <th>Fecha y hora</th>
                                <th>Nombre de Archivo</th>
                                <th>Usuario</th>
                                <th>Cantidad</th>
                            </thead>
                            <tbody>
                                ";
        // line 64
        $context["No"] = 1;
        // line 65
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_archivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_archivos"] ?? null))) {
                // line 66
                echo "                                    <tr>
                                        <td>";
                // line 67
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_hora", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre_archivo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_registros", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                    ";
                // line 73
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 74
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>

                    </div>
                    <div class=\"box-body col-lg-5\">
                        <span>
                            <b>Formato de Archivo</b>

                            <p>Col B -> SIGLA TECNICO</p>
                            <p>Col D -> DESPACHADOR</p>
                            <p>Col F -> ACTIVIDAD</p>
                            <p>Col N -> COMUNA</p>
                            <p>Col O -> NODO</p>
                            <p>Col P -> RUT_CLIENTE</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 96
    public function block_appScript($context, array $blocks = array())
    {
        // line 97
        echo "    <script src=\"views/app/js/cierreseguro/cierreseguro.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "cierreseguro/cargaordenes/cargaordenes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 97,  160 => 96,  136 => 75,  129 => 74,  127 => 73,  122 => 71,  118 => 70,  114 => 69,  110 => 68,  106 => 67,  103 => 66,  97 => 65,  95 => 64,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cierreseguro/cargaordenes/cargaordenes.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\cierreseguro\\cargaordenes\\cargaordenes.twig");
    }
}
