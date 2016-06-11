<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a9dbad41026e8b3a12828672261216ed2a2b6115a154cb5cd2650aa83c3621dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6f6cd2c4a17d61df31c432aa50ab5d81d8d44ec14feba624a3b47a6e823acc1 = $this->env->getExtension("native_profiler");
        $__internal_a6f6cd2c4a17d61df31c432aa50ab5d81d8d44ec14feba624a3b47a6e823acc1->enter($__internal_a6f6cd2c4a17d61df31c432aa50ab5d81d8d44ec14feba624a3b47a6e823acc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a6f6cd2c4a17d61df31c432aa50ab5d81d8d44ec14feba624a3b47a6e823acc1->leave($__internal_a6f6cd2c4a17d61df31c432aa50ab5d81d8d44ec14feba624a3b47a6e823acc1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
