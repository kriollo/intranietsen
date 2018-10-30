<?php

/* cierreseguro/cierreseguro.twig */
class __TwigTemplate_54648ec0fa28fef94868cc5980df356c2da87053004c81bd3ca9a6e3aad3fa09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "cierreseguro/cierreseguro.twig", 1);
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
            Cierre Seguro
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
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Resumen Gestión Ordenes Cierre Hoy</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 23
        $context["count"] = 1;
        // line 24
        echo "                        ";
        $context["tope"] = twig_round(twig_length_filter($this->env, ($context["getResumenGestionDia"] ?? null)), 0, "ceil");
        // line 25
        echo "

                        ";
        // line 27
        $context["No"] = 1;
        // line 28
        echo "                        ";
        $context["total"] = 0;
        // line 29
        echo "                        ";
        $context["total_pendiente"] = 0;
        // line 30
        echo "                        ";
        $context["total_aprobado"] = 0;
        // line 31
        echo "                        ";
        $context["total_rechazado"] = 0;
        // line 32
        echo "                        ";
        $context["total_anuladas"] = 0;
        // line 33
        echo "                        ";
        $context["pasa"] = "0";
        // line 34
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["getResumenGestionDia"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["getResumenGestionDia"] ?? null))) {
                // line 35
                echo "                            ";
                if ((($context["count"] ?? null) == 1)) {
                    // line 36
                    echo "                                <div class=\"col-lg-12\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                            <th>No</th>
                                            <th>Ejecutivos</th>
                                            <th>Asignados</th>
                                            <th>Pendientes</th>
                                            <th>Aprobados</th>
                                            <th>Cliente Rechaza</th>
                                            <th>S/Contactos</th>
                                        </thead>
                                        <tbody>

                            ";
                }
                // line 50
                echo "
                                            <tr>
                                                <td>";
                // line 52
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                                <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_asignado", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_pendiente", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_aprobado", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_rechazado", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_anuladas", array()), "html", null, true);
                echo "</td>
                                            </tr>
                                            ";
                // line 60
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 61
                echo "                                            ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_asignado", array()));
                // line 62
                echo "                                            ";
                $context["total_pendiente"] = (($context["total_pendiente"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_pendiente", array()));
                // line 63
                echo "                                            ";
                $context["total_aprobado"] = (($context["total_aprobado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_aprobado", array()));
                // line 64
                echo "                                            ";
                $context["total_rechazado"] = (($context["total_rechazado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_rechazado", array()));
                // line 65
                echo "                                            ";
                $context["total_anuladas"] = (($context["total_anuladas"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_anuladas", array()));
                // line 66
                echo "
                            ";
                // line 67
                $context["pasa"] = "0";
                // line 68
                echo "                            ";
                if ((($context["count"] ?? null) == ($context["tope"] ?? null))) {
                    // line 69
                    echo "                                            ";
                    $context["pasa"] = "1";
                    // line 70
                    echo "                                        </tbody>
                                    </table>
                                </div>
                                ";
                    // line 73
                    $context["count"] = 0;
                    // line 74
                    echo "                            ";
                }
                // line 75
                echo "                            ";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 76
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "

                        ";
        // line 79
        if (((($context["count"] ?? null) <= ($context["tope"] ?? null)) && (($context["pasa"] ?? null) == 0))) {
            // line 80
            echo "                                    </tbody>
                                </table>
                            </div>
                        ";
        }
        // line 84
        echo "
                    </div>
                    <div class=\"box-footer clearfix\">
                        <table>
                            <td>Total Asignado: ";
        // line 88
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo " </td>
                            <td width='50'> </td>
                            <td>Total Pendiente: ";
        // line 90
        echo twig_escape_filter($this->env, ($context["total_pendiente"] ?? null), "html", null, true);
        echo " </td>
                            <td width='50'> </td>
                            <td>Total Aprobado: ";
        // line 92
        echo twig_escape_filter($this->env, ($context["total_aprobado"] ?? null), "html", null, true);
        echo " </td>
                            <td width='50'> </td>
                            <td>Total Cliente Rechaza: ";
        // line 94
        echo twig_escape_filter($this->env, ($context["total_rechazado"] ?? null), "html", null, true);
        echo " </td>
                            <td width='50'> </td>
                            <td>Total Sin Contacto: ";
        // line 96
        echo twig_escape_filter($this->env, ($context["total_anuladas"] ?? null), "html", null, true);
        echo " </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

";
    }

    // line 106
    public function block_appScript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "cierreseguro/cierreseguro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 106,  227 => 96,  222 => 94,  217 => 92,  212 => 90,  207 => 88,  201 => 84,  195 => 80,  193 => 79,  189 => 77,  182 => 76,  179 => 75,  176 => 74,  174 => 73,  169 => 70,  166 => 69,  163 => 68,  161 => 67,  158 => 66,  155 => 65,  152 => 64,  149 => 63,  146 => 62,  143 => 61,  141 => 60,  136 => 58,  132 => 57,  128 => 56,  124 => 55,  120 => 54,  116 => 53,  112 => 52,  108 => 50,  92 => 36,  89 => 35,  83 => 34,  80 => 33,  77 => 32,  74 => 31,  71 => 30,  68 => 29,  65 => 28,  63 => 27,  59 => 25,  56 => 24,  54 => 23,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cierreseguro/cierreseguro.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\cierreseguro\\cierreseguro.twig");
    }
}
