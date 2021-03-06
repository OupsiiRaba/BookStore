<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/welcome.html.twig */
class __TwigTemplate_afce4b5fa9428aeeb20028038e5c9201b777ebb1c6f0fce9d752e837c0aff3d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "@EasyAdmin/welcome.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        echo "Tableau de bord ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo " <link href=\"assets/css/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"assets/css/sb-admin-2.min.css\" rel=\"stylesheet\">
 <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-4 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    Livres</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">50</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-book fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-4 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                Genres</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">10</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-edit fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-4 col-md-6 mb-4\">
                            <div class=\"card border-left-info shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Auteurs
                                            </div>
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\">
                                                        <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-users fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    <!-- Content Row -->

                    <div class=\"row\">

                        <!-- Area Chart -->
                        <div class=\"col-xl-8 col-lg-7\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Aper??u des visiteurs</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-area\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
                                        <canvas id=\"myAreaChart\" style=\"display: block; height: 160px; width: 515px;\" width=\"772\" height=\"240\" class=\"chartjs-render-monitor\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-pie pt-4 pb-2\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
                                        <canvas id=\"myPieChart\" width=\"772\" height=\"312\" style=\"display: block; height: 208px; width: 515px;\" class=\"chartjs-render-monitor\"></canvas>
                                    </div>
                                    <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Direct
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> Social
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Content Column -->
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Project Card Example -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Projets</h6>
                                </div>
                                <div class=\"card-body\">
                                    <h4 class=\"small font-weight-bold\">Migration de serveur <span class=\"float-right\">20%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Visiteurs <span class=\"float-right\">40%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Base de donn??es <span class=\"float-right\">60%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                   
                                    <h4 class=\"small font-weight-bold\">Configuration du compte <span class=\"float-right\">Complete!</span></h4>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class=\"row\">
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-primary text-white shadow\">
                                        <div class=\"card-body\">
                                            Primary
                                            <div class=\"text-white-50 small\">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-success text-white shadow\">
                                        <div class=\"card-body\">
                                            Success
                                            <div class=\"text-white-50 small\">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-info text-white shadow\">
                                        <div class=\"card-body\">
                                            Info
                                            <div class=\"text-white-50 small\">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-warning text-white shadow\">
                                        <div class=\"card-body\">
                                            Warning
                                            <div class=\"text-white-50 small\">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-danger text-white shadow\">
                                        <div class=\"card-body\">
                                            Danger
                                            <div class=\"text-white-50 small\">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-secondary text-white shadow\">
                                        <div class=\"card-body\">
                                            Secondary
                                            <div class=\"text-white-50 small\">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-light text-black shadow\">
                                        <div class=\"card-body\">
                                            Light
                                            <div class=\"text-black-50 small\">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-dark text-white shadow\">
                                        <div class=\"card-body\">
                                            Dark
                                            <div class=\"text-white-50 small\">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"col-lg-6 mb-4\">

                            <!-- Illustrations -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                        <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\" src=\"images/undraw_Tasting_re_fv9d.png\" alt=\"...\">
                                    </div>
                                    <p>Elle ??tait consciente que les choses pouvaient mal tourner. En fait, elle s?????tait entra??n??e toute sa vie en pr??vision que les choses tourneraient mal un jour. Elle avait une confiance tranquille quand elle a commenc?? ?? voir que c?????tait le jour o?? toute sa formation serait utile et utile. ?? ce stade, elle n???avait aucune id??e ?? quel point tout irait mal ce jour-l??.
                                        </p>
                                   
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Approche de d??veloppement</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                  <!-- Bootstrap core JavaScript-->
    <script src=\"assets/css/vendor/jquery/jquery.min.js\"></script>
    <script src=\"assets/css/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"assets/css/vendor/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"assets/js/sb-admin-2.min.js\"></script>

    <!-- Page level plugins -->
    <script src=\"assets/css/vendor/chart.js/Chart.min.js\"></script>

    <!-- Page level custom scripts -->
    <script src=\"assets/js/demo/chart-area-demo.js\"></script>
    <script src=\"assets/js/demo/chart-pie-demo.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  66 => 6,  53 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content_title 'Tableau de bord ' %}

{% block main %}
 <link href=\"assets/css/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"assets/css/sb-admin-2.min.css\" rel=\"stylesheet\">
 <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-4 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    Livres</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">50</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-book fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-4 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                Genres</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">10</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-edit fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-4 col-md-6 mb-4\">
                            <div class=\"card border-left-info shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Auteurs
                                            </div>
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\">
                                                        <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-users fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    <!-- Content Row -->

                    <div class=\"row\">

                        <!-- Area Chart -->
                        <div class=\"col-xl-8 col-lg-7\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Aper??u des visiteurs</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-area\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
                                        <canvas id=\"myAreaChart\" style=\"display: block; height: 160px; width: 515px;\" width=\"772\" height=\"240\" class=\"chartjs-render-monitor\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-pie pt-4 pb-2\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
                                        <canvas id=\"myPieChart\" width=\"772\" height=\"312\" style=\"display: block; height: 208px; width: 515px;\" class=\"chartjs-render-monitor\"></canvas>
                                    </div>
                                    <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Direct
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> Social
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Content Column -->
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Project Card Example -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Projets</h6>
                                </div>
                                <div class=\"card-body\">
                                    <h4 class=\"small font-weight-bold\">Migration de serveur <span class=\"float-right\">20%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Visiteurs <span class=\"float-right\">40%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Base de donn??es <span class=\"float-right\">60%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                   
                                    <h4 class=\"small font-weight-bold\">Configuration du compte <span class=\"float-right\">Complete!</span></h4>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class=\"row\">
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-primary text-white shadow\">
                                        <div class=\"card-body\">
                                            Primary
                                            <div class=\"text-white-50 small\">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-success text-white shadow\">
                                        <div class=\"card-body\">
                                            Success
                                            <div class=\"text-white-50 small\">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-info text-white shadow\">
                                        <div class=\"card-body\">
                                            Info
                                            <div class=\"text-white-50 small\">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-warning text-white shadow\">
                                        <div class=\"card-body\">
                                            Warning
                                            <div class=\"text-white-50 small\">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-danger text-white shadow\">
                                        <div class=\"card-body\">
                                            Danger
                                            <div class=\"text-white-50 small\">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-secondary text-white shadow\">
                                        <div class=\"card-body\">
                                            Secondary
                                            <div class=\"text-white-50 small\">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-light text-black shadow\">
                                        <div class=\"card-body\">
                                            Light
                                            <div class=\"text-black-50 small\">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-dark text-white shadow\">
                                        <div class=\"card-body\">
                                            Dark
                                            <div class=\"text-white-50 small\">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"col-lg-6 mb-4\">

                            <!-- Illustrations -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                        <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\" src=\"images/undraw_Tasting_re_fv9d.png\" alt=\"...\">
                                    </div>
                                    <p>Elle ??tait consciente que les choses pouvaient mal tourner. En fait, elle s?????tait entra??n??e toute sa vie en pr??vision que les choses tourneraient mal un jour. Elle avait une confiance tranquille quand elle a commenc?? ?? voir que c?????tait le jour o?? toute sa formation serait utile et utile. ?? ce stade, elle n???avait aucune id??e ?? quel point tout irait mal ce jour-l??.
                                        </p>
                                   
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Approche de d??veloppement</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                  <!-- Bootstrap core JavaScript-->
    <script src=\"assets/css/vendor/jquery/jquery.min.js\"></script>
    <script src=\"assets/css/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"assets/css/vendor/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"assets/js/sb-admin-2.min.js\"></script>

    <!-- Page level plugins -->
    <script src=\"assets/css/vendor/chart.js/Chart.min.js\"></script>

    <!-- Page level custom scripts -->
    <script src=\"assets/js/demo/chart-area-demo.js\"></script>
    <script src=\"assets/js/demo/chart-pie-demo.js\"></script>

{% endblock %}
", "@EasyAdmin/welcome.html.twig", "C:\\Users\\rabab\\Desktop\\blogStoreProject\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\welcome.html.twig");
    }
}
