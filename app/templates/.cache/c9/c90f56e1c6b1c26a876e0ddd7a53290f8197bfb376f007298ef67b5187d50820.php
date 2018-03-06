<?php

/* despacho/despacho.twig */
class __TwigTemplate_fe5ad4838cd7d15cbc7daf706ac9683b9d5247a0cc6087476b13e0ac7fcc22f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/despacho.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            Despacho
            <small>Control panel</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li class=\"active\">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
        ";
        // line 17
        $context["count"] = 1;
        // line 18
        echo "        ";
        $context["tope"] = 11;
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_asistencia_tecnico"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_asistencia_tecnico"] ?? null))) {
                // line 20
                echo "            ";
                if ((($context["count"] ?? null) == 1)) {
                    // line 21
                    echo "                <div class=\"col-md-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <th>TEC</th>
                            <th>ASI</th>
                        </thead>
                        <tbody>

            ";
                }
                // line 30
                echo "                            <tr>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "codigo", array()), "html", null, true);
                echo "</td>
                                <td>
                                ";
                // line 33
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()) == "AUS")) {
                    // line 34
                    echo "                                    <span class=\"label label-danger\">
                                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 35
$context["d"], "asistencia", array()) == "PRE")) {
                    // line 36
                    echo "                                    <span class=\"label label-success\">
                                ";
                } else {
                    // line 38
                    echo "                                    <span class=\"label label-warning\">


                                ";
                }
                // line 42
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()), "html", null, true);
                echo "</td>
                            </tr>
            ";
                // line 44
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 45
                echo "            ";
                if ((($context["count"] ?? null) == ($context["tope"] ?? null))) {
                    // line 46
                    echo "
                        </tbody>
                    </table>
                </div>
                ";
                    // line 50
                    $context["count"] = 1;
                    // line 51
                    echo "            ";
                }
                // line 52
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        ";
        if ((($context["count"] ?? null) < ($context["tope"] ?? null))) {
            // line 55
            echo "                        </tr>
                    </tbody>
                </table>
            </div>
        ";
        }
        // line 60
        echo "        </div>
    </section>
    <!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "despacho/despacho.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 60,  130 => 55,  127 => 54,  119 => 52,  116 => 51,  114 => 50,  108 => 46,  105 => 45,  103 => 44,  97 => 42,  91 => 38,  87 => 36,  85 => 35,  82 => 34,  80 => 33,  75 => 31,  72 => 30,  61 => 21,  58 => 20,  52 => 19,  49 => 18,  47 => 17,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/despacho.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\despacho.twig");
    }
}
