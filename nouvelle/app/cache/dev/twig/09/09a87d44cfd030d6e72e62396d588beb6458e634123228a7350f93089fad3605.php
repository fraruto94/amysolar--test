<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5c6c4c83cca787d861518f863d7c02d523bc8c4d94d949b0e3a8032ca8f17051 extends Twig_Template
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
        $__internal_cb40345db846e9fad1e8302d5b4b870add47c08cd478691366484499f8c3bfb4 = $this->env->getExtension("native_profiler");
        $__internal_cb40345db846e9fad1e8302d5b4b870add47c08cd478691366484499f8c3bfb4->enter($__internal_cb40345db846e9fad1e8302d5b4b870add47c08cd478691366484499f8c3bfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cb40345db846e9fad1e8302d5b4b870add47c08cd478691366484499f8c3bfb4->leave($__internal_cb40345db846e9fad1e8302d5b4b870add47c08cd478691366484499f8c3bfb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
