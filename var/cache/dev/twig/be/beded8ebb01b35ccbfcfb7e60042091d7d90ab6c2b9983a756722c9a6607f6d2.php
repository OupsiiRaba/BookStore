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

/* base.html.twig */
class __TwigTemplate_998dcc5f03e6e4be637bea465cc1a6a2beaea65332994d1e3af1e90b6c9156d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
       
          <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
  <meta name=\"msapplication-TileImage\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/download.jpg"), "html", null, true);
        echo "\">
  <meta name=\"theme-color\" content=\"#ffffff\">
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/yeti/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

        ";
        // line 30
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
        
    </head>
    <body  id=\"tothetop\">
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary sticky-top\">
    <a class=\"navbar-brand\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Book Store</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
      aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
     <div class=\"collapse navbar-collapse px-3\" id=\"navbarColor01\">
      <ul class=\"navbar-nav mr-auto\">
           <a class=\"dropdown-item\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteurs");
        echo "\"><i class=\"fas fa-list\"></i> Liste des auteurs</a>
          <a class=\"dropdown-item\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres");
        echo "\"><i class=\"fas fa-edit\"></i> Liste des genres</a>
          </ul>
      
          <div class=\"dropdown-divider\"></div>
          
          
      <a class=\"dropdown-item\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher");
        echo "\"><i class=\"fas fa-search\"></i> Rechercher</a>
      <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"text-white px-2\"><i class=\"fas fa-sign-in-alt\"></i> Admin</a>
      
  
    </div>
  </div>
</nav>
 </header>
 
     <div class=\"container\">
    <div class=\"container \">
      ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "    </div>
  </div>

  <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary py-0\">
    <a class=\"text-white\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">ROCHDI </a>
    <p class=\"text-white pt-3 pl-1\">| &copy; ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Book Store</p>
    <p class=\"ml-auto pt-3 pr-1\"><a class=\"te
    xt-white\" href=\"#tothetop\"><i
          class=\"fas fa-chevron-circle-up fa-3x\"></i></a></p>
  </nav>

  ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "  <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
    integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\">
  </script>
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"
    integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\">
  </script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"
    integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\">
  </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 74,  245 => 73,  233 => 61,  220 => 30,  207 => 5,  198 => 84,  196 => 73,  187 => 67,  183 => 66,  177 => 62,  175 => 61,  162 => 51,  158 => 50,  149 => 44,  145 => 43,  135 => 36,  128 => 31,  125 => 30,  119 => 26,  115 => 25,  108 => 21,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
       
          <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ asset('images/icons/download.jpg') }}\">
  <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ asset('images/icons/download.jpg') }}\">
  <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('images/icons/download.jpg') }}\">
  <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('images/icons/download.jpg') }}\">
  <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('images/icons/download.jpg') }}\">
  <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ asset('images/icons/download.jpg') }}\">
  <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ asset('images/icons/download.jpg')  }}\">
  <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ asset('images/icons/download.jpg')  }}\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('images/icons/download.jpg')  }}\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"{{ asset('images/icons/download.jpg') }}\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('images/icons/download.jpg') }}\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ asset('images/icons/download.jpg')  }}\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{asset('images/icons/download.jpg')  }}\">
  <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
  <meta name=\"msapplication-TileImage\" content=\"{{ asset('images/icons/download.jpg') }}\">
  <meta name=\"theme-color\" content=\"#ffffff\">
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/yeti/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/normalize.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}   {% endblock %}

        
    </head>
    <body  id=\"tothetop\">
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary sticky-top\">
    <a class=\"navbar-brand\" href=\"{{ path(\"home\") }}\">Book Store</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
      aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
     <div class=\"collapse navbar-collapse px-3\" id=\"navbarColor01\">
      <ul class=\"navbar-nav mr-auto\">
           <a class=\"dropdown-item\" href=\"{{ path(\"auteurs\") }}\"><i class=\"fas fa-list\"></i> Liste des auteurs</a>
          <a class=\"dropdown-item\" href=\"{{ path(\"genres\") }}\"><i class=\"fas fa-edit\"></i> Liste des genres</a>
          </ul>
      
          <div class=\"dropdown-divider\"></div>
          
          
      <a class=\"dropdown-item\" href=\"{{ path(\"rechercher\") }}\"><i class=\"fas fa-search\"></i> Rechercher</a>
      <a href=\"{{ path(\"app_login\") }}\" class=\"text-white px-2\"><i class=\"fas fa-sign-in-alt\"></i> Admin</a>
      
  
    </div>
  </div>
</nav>
 </header>
 
     <div class=\"container\">
    <div class=\"container \">
      {% block body %}{% endblock %}
    </div>
  </div>

  <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary py-0\">
    <a class=\"text-white\" href=\"{{ path(\"home\") }}\">ROCHDI </a>
    <p class=\"text-white pt-3 pl-1\">| &copy; {{ 'now'|date('Y') }} - Book Store</p>
    <p class=\"ml-auto pt-3 pr-1\"><a class=\"te
    xt-white\" href=\"#tothetop\"><i
          class=\"fas fa-chevron-circle-up fa-3x\"></i></a></p>
  </nav>

  {% block javascripts %}
  <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
    integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\">
  </script>
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"
    integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\">
  </script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"
    integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\">
  </script>
  {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\rabab\\Desktop\\blogStoreProject\\templates\\base.html.twig");
    }
}
