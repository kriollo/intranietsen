<?php

/* rrhh/horasextra/datatables_opciones.twig */
class __TwigTemplate_669a06d8f96bcfeb0de905a6803e2f85dd655a7d780cf03643696e531bc7c676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
<script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"views/app/js/rrhh/horasextra.js\"></script>
<script>
    \$(function() {
        var dbdatos = [";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_users"] ?? null))) {
                // line 8
                echo "            '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombres", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
                echo "',
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "];
        \$('#busca').autocomplete({source: dbdatos});
    });
</script>
<script type=\"text/javascript\">
  \$(\"#dataTables1\").dataTable({
    \"language\": {
      \"search\": \"Buscar:\",
      \"zeroRecords\": \"No hay datos para mostrar\",
      \"info\": \"Mostrando _END_ Registros, de un total de _TOTAL_ \",
      \"loadingRecords\": \"Cargando...\",
      \"processing\": \"Procesando...\",
      \"infoEmpty\": \"No hay entradas para mostrar\",
      \"lengthMenu\": \"Mostrar _MENU_ Filas\",
      \"paginate\": {
        \"first\": \"Primera\",
        \"last\": \"Ultima\",
        \"next\": \"Siguiente\",
        \"previous\": \"Anterior\"
      }
    },
    \"autoWidth\": true
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/datatables_opciones.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  32 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/datatables_opciones.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\horasextra\\datatables_opciones.twig");
    }
}
