<?php

/* despacho/supervisor/listado_ot.twig */
class __TwigTemplate_7255ef109949553132f062b6328f6702a423b9a3b88e2b5c02df56b3be22bbf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/supervisor/listado_ot.twig", 1);
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
        echo "  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
";
    }

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "<section class=\"content-header\">
    <h1>
        OT Ejecutivos
        <small>Seguimiento</small>
    </h1>

    <select id=\"ejecutivos\" name=\"ejecutivos\" class=\"form-control\" style=\"width:20em;\">
        <option value=\"\">--</option>
        <option value=\"TODOS\">TODOS</option>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personal_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["personal_db"] ?? null))) {
                // line 16
                echo "            <option class=\"text-center\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array()), "html", null, true);
                echo "</option>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </select>

    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i>Home</a></li>
    <li class=\"active\">Dashboard</li>
    </ol>
</section>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs pull-rigth\">
                    ";
        // line 31
        echo "                    <li class=\"active\"><a href=\"#tab_2-2\" data-toggle=\"tab\">SEGUIMIENTO</a></li>
                </ul>
                <div class=\"tab-content\">
                    ";
        // line 128
        echo "                    <div class=\"tab-pane active\" id=\"tab_2-2\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <form id=\"formseguimiento\" name=\"formseguimiento\" method=\"post\">
                                        <table class=\"table table-bordered table-responsive\" id=\"tblseguimiento\" name=\"tblseguimiento\">
                                            <thead>
                                                <tr>
                                                    <th>Ubicacion</th>
                                                    <th>N° Orden</th>
                                                    <th>Rut Cliente</th>
                                                    <th>Fecha compromiso</th>
                                                    <th>Bloque</th>
                                                    <th>Comuna</th>
                                                    <th>Prioridad</th>
                                                    <th>Mover</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    // line 159
    public function block_appScript($context, array $blocks = array())
    {
        // line 160
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/despacho/despacho.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "despacho/supervisor/listado_ot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 160,  122 => 159,  88 => 128,  83 => 31,  69 => 18,  57 => 16,  52 => 15,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/supervisor/listado_ot.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\supervisor\\listado_ot.twig");
    }
}
