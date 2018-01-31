<?php

/* coordinacion/coordinacion.twig */
class __TwigTemplate_ece541fc78ace13a916bc24d3614c731a55d588517d637be32acbc6e64093138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "coordinacion/coordinacion.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
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
        echo "<section class=\"content-header\">
    <h1>
        Coordinación
        <small>Principal</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li class=\"active\">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box table-responsive\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Resumen Ordenes a Ejecutar Hoy</h3>
                        </div>
                        <div class=\"box-body\">
                            <table class=\"table table-bordered table-responsive\">
                                <thead>
                                    <th>Bloque</th>
                                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 29
                echo "                                        <th class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                echo "</th>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 35
                echo "                                        <tr>
                                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "bloque", array()), "html", null, true);
                echo "</td>
                                            ";
                // line 37
                $context["total_fila"] = 0;
                // line 38
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                    if ((false != ($context["db_comuna"] ?? null))) {
                        // line 39
                        echo "                                                ";
                        $context["break_for"] = false;
                        // line 40
                        echo "                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["db_resumen_ordenes_bloques"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            if ((false != ($context["db_resumen_ordenes_bloques"] ?? null))) {
                                // line 41
                                echo "                                                    ";
                                if ((($context["break_for"] ?? null) == false)) {
                                    // line 42
                                    echo "                                                        ";
                                    if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "comuna", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "bloque", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "bloque", array())))) {
                                        // line 43
                                        echo "                                                            <td class=\"text-right\">";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "cantidad", array()), "html", null, true);
                                        echo "</td>
                                                            ";
                                        // line 44
                                        $context["total_fila"] = (($context["total_fila"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "cantidad", array()));
                                        // line 45
                                        echo "                                                            ";
                                        $context["break_for"] = true;
                                        // line 46
                                        echo "                                                        ";
                                    }
                                    // line 47
                                    echo "                                                    ";
                                }
                                // line 48
                                echo "                                                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 49
                        echo "                                                ";
                        if ((($context["break_for"] ?? null) == false)) {
                            // line 50
                            echo "                                                    <td ></td>
                                                ";
                        }
                        // line 52
                        echo "                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                                            <td class=\"text-right\">";
                echo twig_escape_filter($this->env, ($context["total_fila"] ?? null), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Ejecutivo y comuna asignada</h3>
                        </div>
                        <div class=\"box-body\">
                            <table class=\"table table-bordered table-responsive\">
                                <thead>
                                    <th>Ejecutivo</th>
                                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 73
                echo "                                        <th class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                echo "</th>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                </thead>
                                <tbody>
                                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_ejecutivos_despacho"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_ejecutivos_despacho"] ?? null))) {
                // line 78
                echo "                                        <tr>
                                            <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array()), "html", null, true);
                echo "</td>

                                            ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                    if ((false != ($context["db_comuna"] ?? null))) {
                        // line 82
                        echo "                                                ";
                        $context["break_for"] = false;
                        // line 83
                        echo "                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["db_detalle_ejecutivo_comuna"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            if ((false != ($context["db_detalle_ejecutivo_comuna"] ?? null))) {
                                // line 84
                                echo "                                                    ";
                                if ((($context["break_for"] ?? null) == false)) {
                                    // line 85
                                    echo "                                                        ";
                                    if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_user", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "comuna", array())))) {
                                        // line 86
                                        echo "                                                            <td class=\"text-center\">X</td>
                                                            ";
                                        // line 87
                                        $context["break_for"] = true;
                                        // line 88
                                        echo "                                                        ";
                                    }
                                    // line 89
                                    echo "                                                    ";
                                }
                                // line 90
                                echo "                                                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 91
                        echo "                                                ";
                        if ((($context["break_for"] ?? null) == false)) {
                            // line 92
                            echo "                                                    <td></td>
                                                ";
                        }
                        // line 94
                        echo "                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "
                                        </tr>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                    <tr>
                                        <td>TOTALES</td>
                                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 101
                echo "                                            ";
                $context["break_for"] = false;
                // line 102
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_resumen_ejecutivo_comuna"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    if ((false != ($context["db_resumen_ejecutivo_comuna"] ?? null))) {
                        // line 103
                        echo "                                                ";
                        if ((($context["break_for"] ?? null) == false)) {
                            // line 104
                            echo "                                                    ";
                            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "comuna", array()))) {
                                // line 105
                                echo "                                                        <td class=\"text-right\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "cantidad", array()), "html", null, true);
                                echo "</td>
                                                        ";
                                // line 106
                                $context["break_for"] = true;
                                // line 107
                                echo "                                                    ";
                            }
                            // line 108
                            echo "                                                ";
                        }
                        // line 109
                        echo "                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "                                            ";
                if ((($context["break_for"] ?? null) == false)) {
                    // line 111
                    echo "                                                <td class=\"text-right\"></td>
                                            ";
                }
                // line 113
                echo "                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                                    </tr>
                                </tbody>
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

    public function getTemplateName()
    {
        return "coordinacion/coordinacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 114,  323 => 113,  319 => 111,  316 => 110,  309 => 109,  306 => 108,  303 => 107,  301 => 106,  296 => 105,  293 => 104,  290 => 103,  284 => 102,  281 => 101,  276 => 100,  272 => 98,  263 => 95,  256 => 94,  252 => 92,  249 => 91,  242 => 90,  239 => 89,  236 => 88,  234 => 87,  231 => 86,  228 => 85,  225 => 84,  219 => 83,  216 => 82,  211 => 81,  206 => 79,  203 => 78,  198 => 77,  194 => 75,  184 => 73,  179 => 72,  161 => 56,  150 => 53,  143 => 52,  139 => 50,  136 => 49,  129 => 48,  126 => 47,  123 => 46,  120 => 45,  118 => 44,  113 => 43,  110 => 42,  107 => 41,  101 => 40,  98 => 39,  92 => 38,  90 => 37,  86 => 36,  83 => 35,  78 => 34,  73 => 31,  63 => 29,  58 => 28,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "coordinacion/coordinacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\coordinacion\\coordinacion.twig");
    }
}
