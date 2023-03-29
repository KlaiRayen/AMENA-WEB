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

/* colis/show.html.twig */
class __TwigTemplate_34ce6ff320c2a43d4c6b157ce3f1fa3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "colis/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "colis/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "colis/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Colis";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Colis</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdColis</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 12, $this->source); })()), "idColis", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomexpediteur</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 16, $this->source); })()), "nomexpediteur", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresseexpediteur</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 20, $this->source); })()), "adresseexpediteur", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomdestinataire</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 24, $this->source); })()), "nomdestinataire", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adressedestinataire</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 28, $this->source); })()), "adressedestinataire", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Poids</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 32, $this->source); })()), "poids", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 36, $this->source); })()), "statut", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateexpedition</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 40, $this->source); })()), "dateexpedition", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 40, $this->source); })()), "dateexpedition", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_colis_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_colis_edit", ["idColis" => twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 47, $this->source); })()), "idColis", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "colis/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "colis/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  158 => 47,  153 => 45,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Colis{% endblock %}

{% block body %}
    <h1>Colis</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdColis</th>
                <td>{{ coli.idColis }}</td>
            </tr>
            <tr>
                <th>Nomexpediteur</th>
                <td>{{ coli.nomexpediteur }}</td>
            </tr>
            <tr>
                <th>Adresseexpediteur</th>
                <td>{{ coli.adresseexpediteur }}</td>
            </tr>
            <tr>
                <th>Nomdestinataire</th>
                <td>{{ coli.nomdestinataire }}</td>
            </tr>
            <tr>
                <th>Adressedestinataire</th>
                <td>{{ coli.adressedestinataire }}</td>
            </tr>
            <tr>
                <th>Poids</th>
                <td>{{ coli.poids }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{{ coli.statut }}</td>
            </tr>
            <tr>
                <th>Dateexpedition</th>
                <td>{{ coli.dateexpedition ? coli.dateexpedition|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_colis_index') }}\">back to list</a>

    <a href=\"{{ path('app_colis_edit', {'idColis': coli.idColis}) }}\">edit</a>

    {{ include('colis/_delete_form.html.twig') }}
{% endblock %}
", "colis/show.html.twig", "C:\\Users\\aymen\\Desktop\\amena\\Amena\\templates\\colis\\show.html.twig");
    }
}