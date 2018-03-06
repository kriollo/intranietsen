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
      <form id=\"formproductividad\" name=\"formproductividad\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
          <div class=\"box\">
            <div class=\"col-lg-6\">
              <div class=\"box-header\">
               <h3 class=\"box-title\">Total Llamados</h3>
               <div class=\"box-body\">
                 <div id=\"tbldatos\" name=\"tbldatos\">
                     <table class='table table-bordered' id=\"tblproductividad\" name=\"tblproductividad\">
                       <thead>
                           <th>Nombre</th>
                           <th>Llamados</th>
                           <th>Llamados Confirmados</th>
                           <th>Progreso</th>
                           <th>%</th>
                       </thead>
                       <tbody>

                             ";
        // line 33
        $context["total"] = 0;
        // line 34
        echo "                             ";
        $context["total_confirmados"] = 0;
        // line 35
        echo "                             ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["llamados"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            if ((false != ($context["llamados"] ?? null))) {
                // line 36
                echo "                                 <tr>
                                     <td style=\"width:100%;\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "name", array()), "html", null, true);
                echo "</td>
                                     <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "cantidad_total", array()), "html", null, true);
                echo "</td>
                                     <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "cantidad", array()), "html", null, true);
                echo "</td>
                                     <td class=\"col-lg-1\"><div class=\"progress progress-xs\">
                                             <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 41
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "cantidad", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "cantidad", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
                echo "\">
                                                 <span class=\"sr-only\">";
                // line 42
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "cantidad", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                             </div>
                                         </div></td>
                                     <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "cantidad", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                     ";
                // line 46
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "cantidad_total", array()));
                // line 47
                echo "                                     ";
                $context["total_confirmados"] = (($context["total_confirmados"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "cantidad", array()));
                // line 48
                echo "                                 <tr>
                             ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                             <td>TOTAL:</td>
                             <td>";
        // line 51
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</td>
                             <td>";
        // line 52
        echo twig_escape_filter($this->env, ($context["total_confirmados"] ?? null), "html", null, true);
        echo "</td>
                       </tbody>
                     </table>
                 </div>
                </div>
                  <label>Meta total: <input type=\"number\" class=\"text-center\"id=\"txtmeta\" name=\"txtmeta\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
        echo "\"></label>
             </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </section>
    ";
    }

    // line 66
    public function block_appScript($context, array $blocks = array())
    {
        // line 67
        echo "      <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>

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
        return array (  153 => 67,  150 => 66,  137 => 57,  129 => 52,  125 => 51,  122 => 50,  114 => 48,  111 => 47,  109 => 46,  105 => 45,  99 => 42,  91 => 41,  86 => 39,  82 => 38,  78 => 37,  75 => 36,  69 => 35,  66 => 34,  64 => 33,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/reporteria/report_produccion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\reporteria\\report_produccion.twig");
    }
}
