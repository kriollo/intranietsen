<?php

/* visor/confirmacion_produccion_dia.twig */
class __TwigTemplate_8333b7006f54ed01ec0a4905afc9b1651acd8368ea18287122c7011034a63e58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout_visor", "visor/confirmacion_produccion_dia.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "overall/layout_visor";
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
            Confirmación
            <small>Producción día</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Gestión Confirmación Hoy - Meta: ";
        // line 16
        echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
        echo " confirmaciones</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 19
        $context["count"] = 1;
        // line 20
        echo "                        ";
        $context["mitad"] = twig_round((twig_length_filter($this->env, ($context["confirma_resumen_llamados_ejecutivos"] ?? null)) / 2), 0, "ceil");
        // line 21
        echo "                        ";
        $context["tope"] = ($context["mitad"] ?? null);
        // line 22
        echo "
                        ";
        // line 23
        $context["No"] = 1;
        // line 24
        echo "                        ";
        $context["total"] = 0;
        // line 25
        echo "                        ";
        $context["total_confirmados"] = 0;
        // line 26
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_resumen_llamados_ejecutivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_resumen_llamados_ejecutivos"] ?? null))) {
                // line 27
                echo "                            ";
                if ((($context["count"] ?? null) == 1)) {
                    // line 28
                    echo "                                <div class=\"col-lg-6\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                            <th>No</th>
                                            <th>Comuna</th>
                                            <th>Llamados</th>
                                            <th>confirmados</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>

                            ";
                }
                // line 41
                echo "
                                <tr>
                                    <td>";
                // line 43
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                    <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_total", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()), "html", null, true);
                echo "</td>
                                    <td class=\"col-lg-1\"><div class=\"progress progress-xs\">
                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 48
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
                echo "\">
                                                <span class=\"sr-only\">";
                // line 49
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                            </div>
                                        </div></td>
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                </tr>
                                ";
                // line 54
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 55
                echo "                                ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_total", array()));
                // line 56
                echo "                                ";
                $context["total_confirmados"] = (($context["total_confirmados"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()));
                // line 57
                echo "                                ";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 58
                echo "


                            ";
                // line 61
                if ((($context["count"] ?? null) == ($context["tope"] ?? null))) {
                    // line 62
                    echo "                                        </tbody>
                                    </table>
                                </div>
                                ";
                    // line 65
                    $context["count"] = 1;
                    // line 66
                    echo "                            ";
                }
                // line 67
                echo "
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        ";
        if ((($context["count"] ?? null) < ($context["tope"] ?? null))) {
            // line 70
            echo "                                        <tr>
                                            <td colspan=\"2\">TOTAL:</td>
                                            <td>";
            // line 72
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "</td>
                                            <td>";
            // line 73
            echo twig_escape_filter($this->env, ($context["total_confirmados"] ?? null), "html", null, true);
            echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        ";
        }
        // line 79
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

";
    }

    // line 88
    public function block_appScript($context, array $blocks = array())
    {
        // line 89
        echo "    <script type=\"text/javascript\">
      setInterval(function() {
          location.href = \"visor\"
      }, 120000);
    </script>
";
    }

    public function getTemplateName()
    {
        return "visor/confirmacion_produccion_dia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 89,  204 => 88,  192 => 79,  183 => 73,  179 => 72,  175 => 70,  172 => 69,  164 => 67,  161 => 66,  159 => 65,  154 => 62,  152 => 61,  147 => 58,  144 => 57,  141 => 56,  138 => 55,  136 => 54,  131 => 52,  125 => 49,  117 => 48,  112 => 46,  108 => 45,  104 => 44,  100 => 43,  96 => 41,  81 => 28,  78 => 27,  72 => 26,  69 => 25,  66 => 24,  64 => 23,  61 => 22,  58 => 21,  55 => 20,  53 => 19,  47 => 16,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "visor/confirmacion_produccion_dia.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\visor\\confirmacion_produccion_dia.twig");
    }
}
