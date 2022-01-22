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

/* home/index.html.twig */
class __TwigTemplate_2fa792b7407530b7ebcd5d9f8faee5411c855072fdef31fa4b533783ec9a256c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil | Book Store";
        
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
<form method=\"POST\" onsubmit=\"list(event)\">
  <div class=\"row\">
    <div class=\"col\">
    <p>        </p>
    <label for=\"inputState\">Date min</label>
      <input  id=\"dateMin\" type=\"number\"  class=\"form-control\" placeholder=\"Date min \" >
    </div>
    <div class=\"col\">
    <p>        </p>
    <label for=\"inputState\">Date max</label>
      <input id=\"dateMax\" type=\"number\"  class=\"form-control\" placeholder=\"Date max\" >
      
    </div>
    
  </div>
</form>

<form>
  <div class=\"form-row\">
   <div class=\"form-group col-md-6\">
      <label for=\"inputState\">Note</label>
      <select id=\"inputState\" class=\"form-control\">
        \t<option selected>Note</option>
\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </select>
    </div>

  <div class=\"form-group col-md-6\">
      <label for=\"inputState\">Date de publication</label>
      <select id=\"inputState\" class=\"form-control\">
        \t<option selected>Date de publication</option>
\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 40, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 41
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "date_de_parution", [], "any", false, false, false, 41), "m/d/Y"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "date_de_parution", [], "any", false, false, false, 41), "m/d/Y"), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </select>
    </div>
    
  </div>
  </form>
  <form>

  <div class=\"form-row\">
  <div class=\"form-group col-md-6\">
      <label for=\"inputState\">Auteur</label>
      <select id=\"inputState\" class=\"form-control\">
        \t<option selected>Auteur</option>
\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 56
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "nomPrenom", [], "any", false, false, false, 56), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "      </select>
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"inputState\">Genre</label>
      <select id=\"inputState\" class=\"form-control\">
       <option selected>Genre</option>
\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 65
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 65), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
      </select>
    </div>
     </div>
  </form>


\t
    \t\t<button class=\"btn btn-primary my-6\">Filtrer</button>
        <button type=\"reset\" class=\"btn btn-secondary\">Rénitialiser</button>

    

\t
  <p> </p>


<div class=\"row \">
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 86
            echo "            <div class=\"card col-md-4\" style=\"width: 18rem;\">
           <img class=\"date\">  Paru le ";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "getDateDeParution", [], "method", false, false, false, 87), "d/m/Y"), "html", null, true);
            echo " 
           ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["livre"], "auteurs", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 89
                echo "            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "getNomPrenom", [], "method", false, false, false, 89), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "           
    

        <img class=\"card-img-top\" src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/tag-couvertures-livres-8.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 94), "html", null, true);
            echo "\"/>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 96), "html", null, true);
            echo "\"</h5>
                    <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">En savoir plus </a>
                </div>
            </div> 
            
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
</div>
    <div class=\"pagination justify-content-center px-2\">
    
      ";
        // line 106
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 106, $this->source); })()));
        echo "
    </div>
     

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "\t<script src=\"assets/js/main2.js\"></script>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 112,  280 => 111,  268 => 106,  262 => 102,  251 => 97,  247 => 96,  240 => 94,  235 => 91,  226 => 89,  222 => 88,  218 => 87,  215 => 86,  211 => 85,  191 => 67,  180 => 65,  176 => 64,  168 => 58,  157 => 56,  153 => 55,  139 => 43,  128 => 41,  124 => 40,  115 => 33,  104 => 31,  100 => 30,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title%} Accueil | Book Store{% endblock %}

{% block body %}
   
<form method=\"POST\" onsubmit=\"list(event)\">
  <div class=\"row\">
    <div class=\"col\">
    <p>        </p>
    <label for=\"inputState\">Date min</label>
      <input  id=\"dateMin\" type=\"number\"  class=\"form-control\" placeholder=\"Date min \" >
    </div>
    <div class=\"col\">
    <p>        </p>
    <label for=\"inputState\">Date max</label>
      <input id=\"dateMax\" type=\"number\"  class=\"form-control\" placeholder=\"Date max\" >
      
    </div>
    
  </div>
</form>

<form>
  <div class=\"form-row\">
   <div class=\"form-group col-md-6\">
      <label for=\"inputState\">Note</label>
      <select id=\"inputState\" class=\"form-control\">
        \t<option selected>Note</option>
\t\t{% for i in 0..20 %}
\t\t\t<option value=\"{{ i }}\">{{ i }}</option>
\t\t{% endfor %}
      </select>
    </div>

  <div class=\"form-group col-md-6\">
      <label for=\"inputState\">Date de publication</label>
      <select id=\"inputState\" class=\"form-control\">
        \t<option selected>Date de publication</option>
\t\t{% for date in dates|sort %}
\t\t\t<option value=\"{{ date.date_de_parution|date(\"m/d/Y\")}}\">{{date.date_de_parution|date(\"m/d/Y\")}}</option>
\t\t{% endfor %}
      </select>
    </div>
    
  </div>
  </form>
  <form>

  <div class=\"form-row\">
  <div class=\"form-group col-md-6\">
      <label for=\"inputState\">Auteur</label>
      <select id=\"inputState\" class=\"form-control\">
        \t<option selected>Auteur</option>
\t\t{% for auteur in auteurs %}
\t\t\t<option value=\"{{auteur.id}}\">{{auteur.nomPrenom}}</option>
\t\t{% endfor %}
      </select>
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"inputState\">Genre</label>
      <select id=\"inputState\" class=\"form-control\">
       <option selected>Genre</option>
\t\t{% for genre in genres %}
\t\t\t<option value=\"{{genre.id}}\">{{genre.nom}}</option>
\t\t{% endfor %}

      </select>
    </div>
     </div>
  </form>


\t
    \t\t<button class=\"btn btn-primary my-6\">Filtrer</button>
        <button type=\"reset\" class=\"btn btn-secondary\">Rénitialiser</button>

    

\t
  <p> </p>


<div class=\"row \">
    {% for livre in livres %}
            <div class=\"card col-md-4\" style=\"width: 18rem;\">
           <img class=\"date\">  Paru le {{ livre.getDateDeParution() | date(\"d/m/Y\")}} 
           {% for a in livre.auteurs %}
            <li>{{ a.getNomPrenom() }}</li>
            {% endfor %}
           
    

        <img class=\"card-img-top\" src=\"{{ asset('images/icons/tag-couvertures-livres-8.jpg') }}\" alt=\"{{ livre.titre }}\"/>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">\"{{ livre.titre }}\"</h5>
                    <a href=\"{{ path('show' , {'id':livre.id})}}\" class=\"btn btn-primary\">En savoir plus </a>
                </div>
            </div> 
            
    {% endfor %}

</div>
    <div class=\"pagination justify-content-center px-2\">
    
      {{ knp_pagination_render(livres) }}
    </div>
     

{% endblock %}
{% block javascripts %}
\t<script src=\"assets/js/main2.js\"></script>
 
{% endblock %}
", "home/index.html.twig", "C:\\Users\\rabab\\Desktop\\blogStoreProject\\templates\\home\\index.html.twig");
    }
}
