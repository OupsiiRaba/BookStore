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

/* rechercher/index.html.twig */
class __TwigTemplate_bfa50d23c93d2a57e446d32a4040136cf23d249410ae9d978045e41b1f3ba4f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rechercher/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rechercher/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Rechercher un livre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
    <h2>Votre recherche</h2>
    <div class=\"form-group\">
        ";
        // line 10
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 10, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 11
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), 'row', ["label" => "Recherche par titre", "attr" => ["placeholder" => "Veuillez entrer un mot clé...", "class" => "form-control"]]);
        echo "
            <button class=\"btn btn-primary\">rechercher</button>
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 14, $this->source); })()), 'form_end');
        echo "
    </div>
    ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "method", [], "any", false, false, false, 16) == "POST")) {
            // line 17
            echo "  <div class=\"container mt-3\">
    ";
            // line 18
            if ((twig_length_filter($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 18, $this->source); })())) == 0)) {
                // line 19
                echo "      <h5>Aucun résultat pour votre recherche.</h5>
    ";
            } else {
                // line 21
                echo "      <h4>Résultats de votre recherche</h4>
      ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 22, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                    // line 23
                    echo "        <div class=\"card mt-3 py-3 px-3\">
          <h4>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 24), "html", null, true);
                    echo "</h4>
          <p class=\"text-justify\">
            Ecrit le ";
                    // line 26
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "getDateDeParution", [], "method", false, false, false, 26), "d/m/Y"), "html", null, true);
                    echo " par    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["livre"], "auteurs", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 27
                        echo "            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getNomPrenom", [], "method", false, false, false, 27), "html", null, true);
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo " 
             dans le genre 
           
          </p>
          
          <a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Lire la suite</a>
        </div>
      
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "    ";
            }
            // line 38
            echo "  </div>
";
        }
        // line 40
        echo "
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "rechercher/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 40,  157 => 38,  154 => 37,  144 => 33,  137 => 28,  128 => 27,  122 => 26,  117 => 24,  114 => 23,  110 => 22,  107 => 21,  103 => 19,  101 => 18,  98 => 17,  96 => 16,  91 => 14,  86 => 12,  81 => 11,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

{% block title %}Rechercher un livre{% endblock %}

{% block body %}

<div class=\"container\">
    <h2>Votre recherche</h2>
    <div class=\"form-group\">
        {% form_theme searchForm 'bootstrap_4_layout.html.twig' %}
        {{ form_start(searchForm) }}
            {{ form_row(searchForm.titre, {'label': 'Recherche par titre', 'attr': {'placeholder': 'Veuillez entrer un mot clé...', 'class': 'form-control'}}) }}
            <button class=\"btn btn-primary\">rechercher</button>
        {{ form_end(searchForm) }}
    </div>
    {% if app.request.method == 'POST' %}
  <div class=\"container mt-3\">
    {% if livres | length == 0 %}
      <h5>Aucun résultat pour votre recherche.</h5>
    {% else %}
      <h4>Résultats de votre recherche</h4>
      {% for livre in livres %}
        <div class=\"card mt-3 py-3 px-3\">
          <h4>{{ livre.titre }}</h4>
          <p class=\"text-justify\">
            Ecrit le {{ livre.getDateDeParution() | date('d/m/Y') }} par    {% for a in livre.auteurs %}
            {{ a.getNomPrenom() }}
            {% endfor %} 
             dans le genre 
           
          </p>
          
          <a href=\"{{ path('show' , {'id':livre.id})}}\" class=\"btn btn-primary\">Lire la suite</a>
        </div>
      
      {% endfor %}
    {% endif %}
  </div>
{% endif %}

</div>


{% endblock %}", "rechercher/index.html.twig", "C:\\Users\\rabab\\Desktop\\blogStoreProject\\templates\\rechercher\\index.html.twig");
    }
}
