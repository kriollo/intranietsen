<?php

/* confirmacion/reporteria/report_produccion.twig */
class __TwigTemplate_c12d602d54e94f7c86140150cd1b078957c7dfbd1c1a03164b3e721e42aa4539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/reporteria/report_produccion.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            Informes
            <small>Productividad</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li class=\"active\">Dashboard</li>
        </ol>
    </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Total Llamados</h3>
                        <label>Seleccione Fecha:
                        <input type=\"date\" class=\"form-control\" name=\"fecha\" id=\"fecha\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" onchange=\"actualiza_datos_meta_y_tabla();carga_grafico_mensual_pendientes();\">
                        <div id=\"cargandoooo\" name=\"cargandoooo\"></div>
                        </label>
                    </div>
                    <div class=\"box-body\" id=\"tbldatos\" name=\"tbldatos\">
                        <table class='table table-bordered' id=\"tblproductividad\" name=\"tblproductividad\">
                            <thead>
                                <th colspan='2'></th>
                                <th colspan='4' class='text-center'>Hoy -> ";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </th>
                                <th colspan='3' class='text-center'>Acumulado desde -> ";
        // line 29
        echo twig_escape_filter($this->env, ($context["fecha_desde"] ?? null), "html", null, true);
        echo "</th>
                            </thead>
                        <thead>
                            <th>Nombre</th>
                            <th>Dias Trabajados</th>
                            <th>Llamados</th>
                            <th>Confirmados</th>
                            <th>Progreso</th>
                            <th>%</th>
                            <th>Llamados</th>
                            <th>Confirmados</th>
                            <th>Prom Dia</th>
                        </thead>
                        <tbody>

                         ";
        // line 44
        $context["total"] = 0;
        // line 45
        echo "                         ";
        $context["total_confirmados"] = 0;
        // line 46
        echo "                         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["llamados"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            if ((false != ($context["llamados"] ?? null))) {
                // line 47
                echo "                             <tr>
                                 <td >";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "name", array()), "html", null, true);
                echo "</td>
                                 <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "dias_trab", array()), "html", null, true);
                echo "</td>
                                 <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_hoy_total", array()), "html", null, true);
                echo "</td>
                                 <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_hoy_conf", array()), "html", null, true);
                echo "</td>
                                 <td class=\"col-lg-2\"><div class=\"progress progress-xs\">
                                         <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 53
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
                echo "\">
                                             <span class=\"sr-only\">";
                // line 54
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                         </div>
                                     </div></td>
                                 <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                 ";
                // line 58
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_hoy_total", array()));
                // line 59
                echo "                                 ";
                $context["total_confirmados"] = (($context["total_confirmados"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_hoy_conf", array()));
                // line 60
                echo "
                                 <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_total_sinconf", array()), "html", null, true);
                echo "</td>
                                 <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_total_conf", array()), "html", null, true);
                echo "</td>
                                 ";
                // line 63
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "dias_trab", array()) == 0)) {
                    // line 64
                    echo "                                    <td>0</td>
                                 ";
                } else {
                    // line 66
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "acum_total_conf", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "dias_trab", array())), 1, "ceil"), "html", null, true);
                    echo "</td>
                                 ";
                }
                // line 68
                echo "                             <tr>
                         ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                         <td colspan='2'>TOTAL:</td>
                         <td>";
        // line 71
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</td>
                         <td>";
        // line 72
        echo twig_escape_filter($this->env, ($context["total_confirmados"] ?? null), "html", null, true);
        echo "</td>
                        </tbody>
                    </table>

                    </div>
                    <div class=\"box-footer\">
                        <form id=\"formproductividad\" name=\"formproductividad\">
                            <label>Meta total: <input type=\"number\" class=\"text-center\"id=\"txtmeta\" name=\"txtmeta\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
        echo "\"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Grafica</h3>
                    </div>
                    <div class=\"box-body\" id=\"grafico_llamados_confirmadas\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Grafica</h3>
                    </div>
                    <div class=\"box-body\" id=\"grafico_llamados_confirmadas_total\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
    }

    // line 109
    public function block_appScript($context, array $blocks = array())
    {
        // line 110
        echo "      <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
      <script src=\"views/app/template/highcharts/highstock.js\"></script>
      <script src=\"views/app/template/highcharts/exporting.js\"></script>

        <script>
            \$(document).ready(function() {
                carga_grafico_mensual_pendientes();
            });

            function carga_grafico_mensual_pendientes(){
                var formData = new FormData();
                formData.append('fecha',\$('input[name=fecha]').val());
                \$.ajax({
                    type: \"POST\",
                    url: \"api/Mdlconfirmacion_grafico_llamados_confirmadas\",
                    contentType:false,
                    processData:false,
                    data : formData,
                    success : function(data){
                        var serie= []; var valor= []; var valor_total= []; var valor_total_conf_acum= []; var valor_total_sinconf_acum= [];
                        \$.each(data, function(i,o){
                            serie.push(String(o.x));
                            valor.push(parseFloat(o.y));
                            valor_total.push(parseFloat(o.z));
                            valor_total_conf_acum.push(parseFloat(o.a));
                            valor_total_sinconf_acum.push(parseFloat(o.b));
                        });

                        var grafico_reag= \$('#grafico_llamados_confirmadas').highcharts({
                            chart:{
                                type: 'column',
                                animation: Highcharts.svg,

                                height: 300
                            },
                            title:{text: 'Ordenes Confirmadas'},
                            xAxis:{categories: serie},
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Total Llamados'
                                },
                                stackLabels: {
                                    enabled: true,
                                    style: {
                                        fontWeight: 'bold',
                                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                                    }
                                }
                            },
                            legend: { align: 'right',
                                    x: -30,
                                    verticalAlign: 'top',
                                    y: 25,
                                    floating: true,
                                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                                    borderColor: '#CCC',
                                    borderWidth: 1,
                                    shadow: false },
                            exporting: { enabled: true },
                            tooltip: {
                                headerFormat: '<b>{point.x}</b><br/>',
                                pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                            },
                            plotOptions: {
                                column: {
                                    stacking: 'normal',
                                    dataLabels: {
                                        enabled: true,
                                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                                    }
                                }
                            },
                            series: [{ name: 'Confirmados', data:valor},{name: \"Total Llamados\" , data:valor_total}]
                        });

                        var grafico_reag= \$('#grafico_llamados_confirmadas_total').highcharts({
                            chart:{
                                type: 'column',
                                animation: Highcharts.svg,
                                height: 300
                            },
                            title:{text: 'Ordenes Confirmadas Acumulado'},
                            xAxis:{categories: serie},
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Total Llamados'
                                },
                                stackLabels: {
                                    enabled: true,
                                    style: {
                                        fontWeight: 'bold',
                                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                                    }
                                }
                            },
                            legend: { align: 'right',
                                    x: -30,
                                    verticalAlign: 'top',
                                    y: 25,
                                    floating: true,
                                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                                    borderColor: '#CCC',
                                    borderWidth: 1,
                                    shadow: false },
                            exporting: { enabled: true },
                            tooltip: {
                                headerFormat: '<b>{point.x}</b><br/>',
                                pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                            },
                            plotOptions: {
                                column: {
                                    stacking: 'normal',
                                    dataLabels: {
                                        enabled: true,
                                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                                    }
                                }
                            },
                            series: [{ name: 'Confirmados', data:valor_total_conf_acum},{name: \"Total Llamados\" , data:valor_total_sinconf_acum}]
                        });
                    },
                    error : function(xhr, status) {
                      msg_box_alert(99,'Filtrar Ordenes',xhr.responseText);
                    }
                });
            }
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "confirmacion/reporteria/report_produccion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 110,  220 => 109,  186 => 79,  176 => 72,  172 => 71,  169 => 70,  161 => 68,  155 => 66,  151 => 64,  149 => 63,  145 => 62,  141 => 61,  138 => 60,  135 => 59,  133 => 58,  129 => 57,  123 => 54,  115 => 53,  110 => 51,  106 => 50,  102 => 49,  98 => 48,  95 => 47,  89 => 46,  86 => 45,  84 => 44,  66 => 29,  62 => 28,  51 => 20,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/reporteria/report_produccion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\reporteria\\report_produccion.twig");
    }
}
