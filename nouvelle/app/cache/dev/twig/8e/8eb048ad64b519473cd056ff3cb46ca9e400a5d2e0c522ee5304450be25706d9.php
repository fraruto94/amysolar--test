<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_71479c449631a70c56567f0f325fa1e902f14a66edbb3b0e97dc1668d5686d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a618c483c6029f76dd9e93e924005fda5ee6f0d3750bc69e4940f4fd0883d8e3 = $this->env->getExtension("native_profiler");
        $__internal_a618c483c6029f76dd9e93e924005fda5ee6f0d3750bc69e4940f4fd0883d8e3->enter($__internal_a618c483c6029f76dd9e93e924005fda5ee6f0d3750bc69e4940f4fd0883d8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a618c483c6029f76dd9e93e924005fda5ee6f0d3750bc69e4940f4fd0883d8e3->leave($__internal_a618c483c6029f76dd9e93e924005fda5ee6f0d3750bc69e4940f4fd0883d8e3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74947a852fcf87b8a8ae12928f8b5e1dd545dafca6d690700ef33f8854be004b = $this->env->getExtension("native_profiler");
        $__internal_74947a852fcf87b8a8ae12928f8b5e1dd545dafca6d690700ef33f8854be004b->enter($__internal_74947a852fcf87b8a8ae12928f8b5e1dd545dafca6d690700ef33f8854be004b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_74947a852fcf87b8a8ae12928f8b5e1dd545dafca6d690700ef33f8854be004b->leave($__internal_74947a852fcf87b8a8ae12928f8b5e1dd545dafca6d690700ef33f8854be004b_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_47e24400e2445c7e4e563b7e90d1a3f11c6a3747d120d17cb42f8dfa95b342e1 = $this->env->getExtension("native_profiler");
        $__internal_47e24400e2445c7e4e563b7e90d1a3f11c6a3747d120d17cb42f8dfa95b342e1->enter($__internal_47e24400e2445c7e4e563b7e90d1a3f11c6a3747d120d17cb42f8dfa95b342e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_47e24400e2445c7e4e563b7e90d1a3f11c6a3747d120d17cb42f8dfa95b342e1->leave($__internal_47e24400e2445c7e4e563b7e90d1a3f11c6a3747d120d17cb42f8dfa95b342e1_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
