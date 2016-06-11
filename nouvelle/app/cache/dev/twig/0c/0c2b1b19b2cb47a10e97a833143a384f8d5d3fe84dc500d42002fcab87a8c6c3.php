<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_b5a26019c0ee98a3edad88e5691790b6dc05dbe2b72569f095a0257d6b3ea2eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66ea5de129fd49bb78faeae679cdd201e146567a46938dc3a95d98185914647e = $this->env->getExtension("native_profiler");
        $__internal_66ea5de129fd49bb78faeae679cdd201e146567a46938dc3a95d98185914647e->enter($__internal_66ea5de129fd49bb78faeae679cdd201e146567a46938dc3a95d98185914647e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66ea5de129fd49bb78faeae679cdd201e146567a46938dc3a95d98185914647e->leave($__internal_66ea5de129fd49bb78faeae679cdd201e146567a46938dc3a95d98185914647e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f705b44ac284ee8e07bbf38db4a2292873f0fcebdc34c5af87a8f3cd6bf186b = $this->env->getExtension("native_profiler");
        $__internal_8f705b44ac284ee8e07bbf38db4a2292873f0fcebdc34c5af87a8f3cd6bf186b->enter($__internal_8f705b44ac284ee8e07bbf38db4a2292873f0fcebdc34c5af87a8f3cd6bf186b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8f705b44ac284ee8e07bbf38db4a2292873f0fcebdc34c5af87a8f3cd6bf186b->leave($__internal_8f705b44ac284ee8e07bbf38db4a2292873f0fcebdc34c5af87a8f3cd6bf186b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c26e587df84aabf21134202f55b2bcd5cbbe5394838b3cfa5ce69e86631430d0 = $this->env->getExtension("native_profiler");
        $__internal_c26e587df84aabf21134202f55b2bcd5cbbe5394838b3cfa5ce69e86631430d0->enter($__internal_c26e587df84aabf21134202f55b2bcd5cbbe5394838b3cfa5ce69e86631430d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  ";
        // line 11
        echo "  <h1>choix du client</h1>

  <hr>

  ";
        // line 16
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 18
        echo "
";
        
        $__internal_c26e587df84aabf21134202f55b2bcd5cbbe5394838b3cfa5ce69e86631430d0->leave($__internal_c26e587df84aabf21134202f55b2bcd5cbbe5394838b3cfa5ce69e86631430d0_prof);

    }

    // line 16
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_85faf23670cc83f7860de984472b22a32a2da425f3564307177516176ce5d8ed = $this->env->getExtension("native_profiler");
        $__internal_85faf23670cc83f7860de984472b22a32a2da425f3564307177516176ce5d8ed->enter($__internal_85faf23670cc83f7860de984472b22a32a2da425f3564307177516176ce5d8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 17
        echo "  ";
        
        $__internal_85faf23670cc83f7860de984472b22a32a2da425f3564307177516176ce5d8ed->leave($__internal_85faf23670cc83f7860de984472b22a32a2da425f3564307177516176ce5d8ed_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  78 => 16,  70 => 18,  67 => 16,  61 => 11,  58 => 9,  52 => 8,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>choix du client</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
