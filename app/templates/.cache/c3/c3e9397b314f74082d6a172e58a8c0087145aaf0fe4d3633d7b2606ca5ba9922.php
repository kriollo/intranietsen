<?php

/* rrhh/turnos/carga_de_turnos.twig */
class __TwigTemplate_b699582c6639bc51a42832fc6e795a37e9cfdffac15ae5dd7573c45017c44dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/turnos/carga_de_turnos.twig", 1);
        $this->blocks = array(
            'appScript' => array($this, 'block_appScript'),
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
    public function block_appScript($context, array $blocks = array())
    {
        // line 3
        echo "    <script src=\"views/app/js/rrhh/turnos.js\"></script>
";
    }

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "<section class=\"content-header\">
    <h1>
        RRHH
        <small>Carga de Turnos</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li class=\"active\">Dashboard</li>
    </ol>
</section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body col-sm-6\">
                    <div class=\"form-group\">
                        <form id=\"formturnos\" name=\"formturnos\" method=\"post\" enctype=\"multipart/form-data\">
                            <input class='filestyle' data-buttonText=\"Logo\" type=\"file\" name=\"imagefile\" id=\"imagefile\" onchange=\"document.getElementById('archivo').value=document.getElementById('imagefile').value\" tabindex=\"-1\" style=\"position:absolute; clip: rect(0px 0px 0px 0px);\" accept=\"file_extension|image/*|media_type\">
                            <div class=\"bootstrap-filestyle input-group\">
                                <input type=\"text\" class=\"form-control\" id=\"archivo\" placeholder=\"\" disabled=\"\">
                                <span class=\"group-span-filestyle input-group-btn\" tabindex=\"0\">
                                    <label for=\"imagefile\" class=\"btn btn-default \">
                                    <span class=\"icon-span-filestyle glyphicon glyphicon-share\"></span>
                                    <span class=\"buttonText\">Buscar Archivo</span>
                                    </label>
                                </span>
                            </div>
                            <div id=\"div_cargando\">
                                <a class=\"btn btn-success btn-social\" title=\"Exportar a Excel\" data-toggle=\"tooltip\" onclick=\"subirarchivoexcel()\">
                                    <i class=\"fa fa-arrow-up\"></i> Cargar Turnos 
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"box-body col-sm-6\">
                    <span><b>Formato de Archivo</b>
                    <p>Col A -> Rut</p>
                    <p>Col B -> Servicio</p>
                    <p>Col C -> Fecha</p>
                    <p>Col D -> Hora de Ingreso</p>
                    <p>Col E -> Hora de Salida</p>
                    <p>Col F -> Número de Semana</p>
                    <p>Col G -> Horas Turno</p>
                    <p>Col H -> Hora Colacion</p>
                    <p>Col H -> Horario Colacion</p>
                    <p>Col H -> Hora Break 1</p>
                    <p>Col H -> Hora Break 2</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "rrhh/turnos/carga_de_turnos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/turnos/carga_de_turnos.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\turnos\\carga_de_turnos.twig");
    }
}
