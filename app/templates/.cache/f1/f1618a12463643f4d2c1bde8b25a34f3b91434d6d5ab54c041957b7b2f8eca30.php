<?php

/* rrhh/horasextra/horasextra.twig */
class __TwigTemplate_a09fae066132354c131ec94a237221745177d99c4b4db9a2188245e2750895aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/horasextra.twig", 1);
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
        echo "  <section class=\"content-header\">
    <h4>
      <i class=\"fa fa-user\"></i>
      GESTION DE HORAS EXTRA
      <a class=\"btn btn-primary btn-social pull-right\" href=\"rrhh/horasextra\" title=\"solicitar\" data-toggle=\"tooltip\">
        <i class=\"fa fa-plus\"></i>
        SOLICITAR
      </a>
    </h4>
    <input type=\"hidden\" name=\"iduser\" id=\"iduser\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array")), "html", null, true);
        echo "\">
  </section>
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <div class=\"box-body\">
            <table id=\"dataTables1\" class=\"table table-bordered\">
              <thead>
                <tr>
                  <th>Peticion Creada</th>
                  <th>Fecha solicitada</th>
                  <th>Hora desde</th>
                  <th>Hora hasta</th>
                  <th>Motivo</th>
                  <th>Estatus</th>
                  <th>OPCIONES</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 35
        $context["No"] = 1;
        // line 36
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 37
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()))) {
                    // line 38
                    echo "                    <tr>
                      <td>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_creacion", array()), "html", null, true);
                    echo "</td>
                      <td>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_solicitud", array()), "html", null, true);
                    echo "</td>
                      <td>";
                    // line 41
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hora_desde", array())), "html", null, true);
                    echo "</td>
                      <td>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hora_hasta", array()), "html", null, true);
                    echo "</td>
                      ";
                    // line 43
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == "Pendiente")) {
                        // line 44
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "motivo_solicitud", array()), "html", null, true);
                        echo "</td>
                      ";
                    } else {
                        // line 46
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "motivo_respuesta", array()), "html", null, true);
                        echo "</td>
                      ";
                    }
                    // line 48
                    echo "                      <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()), "html", null, true);
                    echo "</td>
                      <td class='center' width='150'>
                        ";
                    // line 50
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == "Pendiente")) {
                        // line 51
                        echo "                          <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-primary btn-sm' href=\"rrhh/modificar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_enc_hx", array()), "html", null, true);
                        echo "\">
                            <i class='glyphicon glyphicon-edit'></i>
                          </a>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                     // line 54
$context["d"], "estado", array()) == "Aprobada")) {
                        // line 55
                        echo "                          <a data-toggle='tooltip' data-placement='top' title='Aceptada ' class='btn btn-success btn-sm' disabled=\"disabled\">
                            <i class='glyphicon glyphicon-ok'></i>
                          </a>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                     // line 58
$context["d"], "estado", array()) == "Rechazada")) {
                        // line 59
                        echo "                          <a data-toggle='tooltip' data-placement='top' title='Rechazada ' class='btn btn-danger btn-sm' disabled=\"disabled\">
                            <i class='glyphicon glyphicon-remove'></i>
                          </a>
                        ";
                    }
                    // line 63
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) != "Aprobada")) {
                        // line 64
                        echo "                          <a data-toggle='tooltip' data-placement='top' title='Eliminar' id=\"btn_eliminar1\" onclick=\"eliminar_peticiones(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_enc_hx", array()), "html", null, true);
                        echo ")\" class='btn btn-warning btn-sm'>
                            <i class='glyphicon glyphicon-trash'></i>
                          </a>
                          <form class=\"\" action=\"\" name=\"form_id_peticion\" id=\"form_id_peticion\" method=\"post\">
                            <input type=\"hidden\" id=\"id_peticion\" name=\"id_peticion\">
                          </form>
                        ";
                    }
                    // line 71
                    echo "                      </td>
                    </tr>
                  ";
                }
                // line 74
                echo "                  ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 75
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    // line 85
    public function block_appScript($context, array $blocks = array())
    {
        // line 86
        $this->loadTemplate("rrhh/horasextra/datatables_opciones", "rrhh/horasextra/horasextra.twig", 86)->display($context);
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/horasextra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 86,  190 => 85,  178 => 76,  171 => 75,  168 => 74,  163 => 71,  152 => 64,  149 => 63,  143 => 59,  141 => 58,  136 => 55,  134 => 54,  127 => 51,  125 => 50,  119 => 48,  113 => 46,  107 => 44,  105 => 43,  101 => 42,  97 => 41,  93 => 40,  89 => 39,  86 => 38,  83 => 37,  77 => 36,  75 => 35,  52 => 15,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/horasextra.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\horasextra\\horasextra.twig");
    }
}
