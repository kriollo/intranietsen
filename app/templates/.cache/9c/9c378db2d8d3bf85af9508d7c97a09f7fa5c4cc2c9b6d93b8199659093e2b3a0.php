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
                <div class=\"col-xs-6\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Resumen Ordenes a Ejecutar Hoy</h3>
                        </div>
                        <div class=\"box-body\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <th>No</th>
                                    <th>Comuna</th>
                                    <th>Cantidad Gestión</th>
                                </thead>
                                <tbody>
                                    ";
        // line 32
        $context["No"] = 1;
        // line 33
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_resumen_x_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_resumen_x_comuna"] ?? null))) {
                // line 34
                echo "                                        <tr>
                                            <td>";
                // line 35
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array())), "html", null, true);
                echo "</td>
                                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
                // line 39
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 40
                echo "                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return array (  95 => 41,  88 => 40,  86 => 39,  81 => 37,  77 => 36,  73 => 35,  70 => 34,  64 => 33,  62 => 32,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "coordinacion/coordinacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\coordinacion\\coordinacion.twig");
    }
}
