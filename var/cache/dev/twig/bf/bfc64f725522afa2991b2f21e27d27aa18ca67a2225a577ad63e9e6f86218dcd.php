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

/* show/index.html.twig */
class __TwigTemplate_1990c129c08b9e03adf0d74fe463164704df3aa6838d5974e98d71bb05f55ae8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "show/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Détails | Book Store ";
        
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
<div class=\"container\">
 <h1 class=\"title p-1\">\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        echo "\"</h1>
    <div class=\"img-fluid\">
        <img width=\"85%\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/tag-couvertures-livres-8.jpg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        echo "\"/>
    </div>
    <div class=\"content\">

     <li class=\"list-group-item list-group-item-active\"> Date de parution du livre : ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 12, $this->source); })()), "getDateDeParution", [], "method", false, false, false, 12), "d/m/Y"), "html", null, true);
        echo "</li>
     <li class=\"list-group-item list-group-item-info\"> Titre du livre: \"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
        echo "\"</li>
     <li class=\"list-group-item list-group-item-warning\"> ISBN      : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 14, $this->source); })()), "isbn", [], "any", false, false, false, 14), "html", null, true);
        echo "</li>
     <li class=\"list-group-item list-group-item-info\"> Nombre de pages : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 15, $this->source); })()), "getNombrePages", [], "method", false, false, false, 15), "html", null, true);
        echo "</li>
     <li class=\"list-group-item list-group-item-warning\">Evaluation du livre  : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 16, $this->source); })()), "note", [], "any", false, false, false, 16), "html", null, true);
        echo "</li>
     <li class=\"list-group-item list-group-item-info\">  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 17, $this->source); })()), "auteurs", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 18
            echo "            Auteurs du livre: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getNomPrenom", [], "method", false, false, false, 18), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "     </li>
     <li class=\"list-group-item list-group-item-active\">  
          
             ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 23, $this->source); })()), "genre", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 24
            echo "           Genre du livre: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "getNom", [], "method", false, false, false, 24), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </li>
 </div>   
   
 </div>   
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "show/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 26,  133 => 24,  129 => 23,  124 => 20,  115 => 18,  111 => 17,  107 => 16,  103 => 15,  99 => 14,  95 => 13,  91 => 12,  82 => 8,  77 => 6,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title%} Détails | Book Store {% endblock %}
{% block body %}

<div class=\"container\">
 <h1 class=\"title p-1\">\"{{ livre.titre }}\"</h1>
    <div class=\"img-fluid\">
        <img width=\"85%\" src=\"{{ asset('images/icons/tag-couvertures-livres-8.jpg') }}\" alt=\"{{ livre.titre }}\"/>
    </div>
    <div class=\"content\">

     <li class=\"list-group-item list-group-item-active\"> Date de parution du livre : {{ livre.getDateDeParution() | date(\"d/m/Y\")}}</li>
     <li class=\"list-group-item list-group-item-info\"> Titre du livre: \"{{ livre.titre }}\"</li>
     <li class=\"list-group-item list-group-item-warning\"> ISBN      : {{ livre.isbn }}</li>
     <li class=\"list-group-item list-group-item-info\"> Nombre de pages : {{ livre. getNombrePages() }}</li>
     <li class=\"list-group-item list-group-item-warning\">Evaluation du livre  : {{ livre.note }}</li>
     <li class=\"list-group-item list-group-item-info\">  {% for a in livre.auteurs %}
            Auteurs du livre: {{ a.getNomPrenom() }}
            {% endfor %}
     </li>
     <li class=\"list-group-item list-group-item-active\">  
          
             {% for g in livre.genre %}
           Genre du livre: {{ g.getNom() }}
            {% endfor %}
            </li>
 </div>   
   
 </div>   
 {% endblock  %}", "show/index.html.twig", "C:\\Users\\rabab\\Desktop\\blogStoreProject\\templates\\show\\index.html.twig");
    }
}
