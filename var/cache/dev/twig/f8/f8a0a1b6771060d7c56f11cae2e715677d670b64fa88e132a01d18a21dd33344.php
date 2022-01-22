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

/* auteurs/index.html.twig */
class __TwigTemplate_ae0059fa138f476552af4a3edc5eb3f24b2ea1d9cefb17839f4c4f5a2611566d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteurs/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auteurs/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Auteurs | Book Store 
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h3 class=\"pb-3\">Liste des auteurs</h3>
    <div class=\"table-responsive-sm\">
      <table class=\"table table-hover\">
        <thead>
   
        <th>Image</th>
          <th>Nom et prénom</th>
          <th>Sexe</th>
          <th>Date de naissance</th>
          <th>Nationnalité</th>
        </thead>
        <tbody>
          ";
        // line 22
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 23
            echo "            <tr>
              <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/5809888.png"), "html", null, true);
            echo "\"  width=\"40\" height=\"40\"class=\"img-fluid float-left mr-4 img-list\" alt=\"\"></td>
              <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "getNomPrenom", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
              <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "sexe", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
              <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "getDateDeNaissance", [], "method", false, false, false, 27), "d/m/Y"), "html", null, true);
            echo "</td>
              <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "nationalite", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
      </table>
    </div>

    

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "auteurs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  95 => 23,  90 => 22,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

  {% block title %}
    Auteurs | Book Store 
  {% endblock %}

  {% block body %}

    <h3 class=\"pb-3\">Liste des auteurs</h3>
    <div class=\"table-responsive-sm\">
      <table class=\"table table-hover\">
        <thead>
   
        <th>Image</th>
          <th>Nom et prénom</th>
          <th>Sexe</th>
          <th>Date de naissance</th>
          <th>Nationnalité</th>
        </thead>
        <tbody>
          {# on boucle tous les auteurs avec for #}
          {% for auteur in auteurs %}
            <tr>
              <td><img src=\"{{ asset('images/icons/5809888.png') }}\"  width=\"40\" height=\"40\"class=\"img-fluid float-left mr-4 img-list\" alt=\"\"></td>
              <td>{{ auteur.getNomPrenom() }}</td>
              <td>{{ auteur.sexe }}</td>
              <td>{{ auteur.getDateDeNaissance() | date(\"d/m/Y\") }}</td>
              <td>{{ auteur.nationalite }}</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>

    

  {% endblock %}
", "auteurs/index.html.twig", "C:\\Users\\rabab\\Desktop\\blogStoreProject\\templates\\auteurs\\index.html.twig");
    }
}
