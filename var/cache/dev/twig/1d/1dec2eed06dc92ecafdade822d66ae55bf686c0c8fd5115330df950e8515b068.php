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

/* connexion/login.html.twig */
class __TwigTemplate_a5f2c180e30f710eb8854f7014c8cca21f9a22202920ea1b969b06a632c82874 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "connexion/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col text-center lead pb-3\">
     
    </div>
</div>

    <div class=\"row justify-content-md-center\">
        <div class=\"col-sm-5 mt-4 mb-5\">

            <h3>Connexion</h3>

            <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\" method=\"POST\">
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"form-group\">
                            <input placeholder=\"Adresse e-mail\" type=\"text\" name=\"_username\" class=\"form-control\" required>
                            <!-- On met bien _username ici même si c'est un email... car on a définit le critère de connexion à e-mail -->
                        </div>
                        <div class=\"form-group\">
                            <input placeholder=\"Mot de passe\" type=\"password\" name=\"_password\" class=\"form-control\" required>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Se connecter</button> <button type=\"reset\" class=\"btn btn-secondary\">Annuler</button>
                        </div>
            </form>
                    </div>
                   
                </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "connexion/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  73 => 16,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"row\">
    <div class=\"col text-center lead pb-3\">
     
    </div>
</div>

    <div class=\"row justify-content-md-center\">
        <div class=\"col-sm-5 mt-4 mb-5\">

            <h3>Connexion</h3>

            <form action=\"{{ path('connexion') }}\" method=\"POST\">
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"form-group\">
                            <input placeholder=\"Adresse e-mail\" type=\"text\" name=\"_username\" class=\"form-control\" required>
                            <!-- On met bien _username ici même si c'est un email... car on a définit le critère de connexion à e-mail -->
                        </div>
                        <div class=\"form-group\">
                            <input placeholder=\"Mot de passe\" type=\"password\" name=\"_password\" class=\"form-control\" required>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success\" href=\"{{ path('admin')}}\">Se connecter</button> <button type=\"reset\" class=\"btn btn-secondary\">Annuler</button>
                        </div>
            </form>
                    </div>
                   
                </div>

        </div>
    </div>
{% endblock %}", "connexion/login.html.twig", "C:\\Users\\rabab\\Desktop\\blogStoreProject\\templates\\connexion\\login.html.twig");
    }
}
