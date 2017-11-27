<?php

/* portal/header.twig */
class __TwigTemplate_40c6486fea2fc5189ada139aa721a676273224f4490d9c05ce45f405dc4f886a extends Twig_Template
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
        echo "
<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"portal\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>A</b>ON</span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</b> OCREN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
        <!-- Sidebar toggle button-->
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>

        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                <!-- Messages: style can be found in dropdown.less-->
                <li class=\"dropdown messages-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"label label-success\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">Tienes 0 mensajes</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class=\"menu\">
                                
                            </ul>
                        </li>
                        <li class=\"footer\"><a href=\"#\">Ver todos los mensajes</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class=\"dropdown notifications-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"label label-warning\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">Tienes 0 notificaciones</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class=\"menu\">
                                
                            </ul>
                        </li>
                        <li class=\"footer\"><a href=\"#\">Ver todo</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class=\"dropdown tasks-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-flag-o\"></i>
                        <span class=\"label label-danger\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">Tienes 0 tareas</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class=\"menu\">
                                
                            </ul>
                        </li>
                        <li class=\"footer\">
                            <a href=\"#\">Ver todas las tareas</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class=\"dropdown user user-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"user-image\" alt=\"User Image\">
                        <span class=\"hidden-xs\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), 1, array(), "array"), "html", null, true);
        echo "</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- User image -->
                        <li class=\"user-header\">
                            <img src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"img-circle\" alt=\"User Image\">

                            <p>
                                ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), 2, array(), "array"), "html", null, true);
        echo "
                                <small></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class=\"user-body\">
                            <div class=\"row\">
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\"></a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\"></a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\"></a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"#\" class=\"btn btn-default btn-flat\"></a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"logout\" class=\"btn btn-default btn-flat\">Salir</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                
            </ul>
        </div>
    </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "portal/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 84,  99 => 76,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"portal\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>A</b>ON</span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>{{ config.site.name }}</b> OCREN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
        <!-- Sidebar toggle button-->
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>

        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                <!-- Messages: style can be found in dropdown.less-->
                <li class=\"dropdown messages-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"label label-success\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">Tienes 0 mensajes</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class=\"menu\">
                                
                            </ul>
                        </li>
                        <li class=\"footer\"><a href=\"#\">Ver todos los mensajes</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class=\"dropdown notifications-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"label label-warning\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">Tienes 0 notificaciones</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class=\"menu\">
                                
                            </ul>
                        </li>
                        <li class=\"footer\"><a href=\"#\">Ver todo</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class=\"dropdown tasks-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-flag-o\"></i>
                        <span class=\"label label-danger\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">Tienes 0 tareas</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class=\"menu\">
                                
                            </ul>
                        </li>
                        <li class=\"footer\">
                            <a href=\"#\">Ver todas las tareas</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class=\"dropdown user user-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"user-image\" alt=\"User Image\">
                        <span class=\"hidden-xs\">{{ owner_user[1] }}</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- User image -->
                        <li class=\"user-header\">
                            <img src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"img-circle\" alt=\"User Image\">

                            <p>
                                {{ owner_user[2] }}
                                <small></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class=\"user-body\">
                            <div class=\"row\">
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\"></a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\"></a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\"></a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"#\" class=\"btn btn-default btn-flat\"></a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"logout\" class=\"btn btn-default btn-flat\">Salir</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                
            </ul>
        </div>
    </nav>
</header>
", "portal/header.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\portal\\header.twig");
    }
}
