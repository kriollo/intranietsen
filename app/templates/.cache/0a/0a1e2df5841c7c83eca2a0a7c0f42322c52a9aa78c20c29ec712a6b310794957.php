<?php

/* cierreseguro/cierreseguro.twig */
class __TwigTemplate_8c304c71014492c96437f84aae98ce7dc86a8b5a7202c3d72c5e6efca6653ce7 extends Twig_Template
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
                        <h3 class=\"box-title\">Gestión Cierre Hoy</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 23
        $context["count"] = 1;
        // line 24
        echo "                        ";
        $context["mitad"] = twig_round((twig_length_filter($this->env, ($context["getResumenGestionDia"] ?? null)) / 2), 0, "ceil");
        // line 25
        echo "                        ";
        $context["tope"] = (($context["mitad"] ?? null) + 1);
        // line 26
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["getResumenGestionDia"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["getResumenGestionDia"] ?? null))) {
                // line 33
                echo "                            ";
                if ((($context["count"] ?? null) == 1)) {
                    // line 34
                    echo "                                <div class=\"col-lg-6\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                            <th>No</th>
                                            <th>Ejecutivos</th>
                                            <th>Asignados</th>
                                            <th>Pendientes</th>
                                            <th>Aprobados</th>
                                            <th>Rechazados</th>
                                        </thead>
                                        <tbody>

                            ";
                }
                // line 47
                echo "
                                            <tr>
                                                <td>";
                // line 49
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_asignado", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_pendiente", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_aprobado", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_rechazado", array()), "html", null, true);
                echo "</td>
                                            </tr>
                                            ";
                // line 56
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 57
                echo "                                            ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_asignado", array()));
                // line 58
                echo "                                            ";
                $context["total_pendiente"] = (($context["total_pendiente"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_pendiente", array()));
                // line 59
                echo "                                            ";
                $context["total_aprobado"] = (($context["total_aprobado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_aprobado", array()));
                // line 60
                echo "                                            ";
                $context["total_rechazado"] = (($context["total_rechazado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_rechazado", array()));
                // line 61
                echo "                                            ";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 62
                echo "                            ";
                $context["pasa"] = 0;
                // line 63
                echo "                            ";
                if ((($context["count"] ?? null) == ($context["tope"] ?? null))) {
                    // line 64
                    echo "                                            ";
                    $context["pasa"] = 1;
                    // line 65
                    echo "                                        </tbody>
                                    </table>
                                </div>
                                ";
                    // line 68
                    $context["count"] = 1;
                    // line 69
                    echo "                            ";
                }
                // line 70
                echo "
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        ";
        if (((($context["count"] ?? null) < ($context["tope"] ?? null)) && (($context["pasa"] ?? null) == 0))) {
            // line 73
            echo "                                    </tbody>
                                </table>
                            </div>
                        ";
        }
        // line 77
        echo "                        <div class=\"box-footer clearfix\">
                            <table>
                                <td>Total Asignado: ";
        // line 79
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo " </td>
                                <td width='50'> </td>
                                <td>Total Pendiente: ";
        // line 81
        echo twig_escape_filter($this->env, ($context["total_pendiente"] ?? null), "html", null, true);
        echo " </td>
                                <td width='50'> </td>
                                <td>Total Aprobado: ";
        // line 83
        echo twig_escape_filter($this->env, ($context["total_aprobado"] ?? null), "html", null, true);
        echo " </td>
                                <td width='50'> </td>
                                <td>Total Rechazado: ";
        // line 85
        echo twig_escape_filter($this->env, ($context["total_rechazado"] ?? null), "html", null, true);
        echo " </td>
                                
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

";
    }

    // line 98
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
        return array (  221 => 98,  204 => 85,  199 => 83,  194 => 81,  189 => 79,  185 => 77,  179 => 73,  176 => 72,  168 => 70,  165 => 69,  163 => 68,  158 => 65,  155 => 64,  152 => 63,  149 => 62,  146 => 61,  143 => 60,  140 => 59,  137 => 58,  134 => 57,  132 => 56,  127 => 54,  123 => 53,  119 => 52,  115 => 51,  111 => 50,  107 => 49,  103 => 47,  88 => 34,  85 => 33,  79 => 32,  76 => 31,  73 => 30,  70 => 29,  67 => 28,  65 => 27,  62 => 26,  59 => 25,  56 => 24,  54 => 23,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cierreseguro/cierreseguro.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\cierreseguro\\cierreseguro.twig");
    }
}
