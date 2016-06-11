<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_adfd6be217124fb9509660c4a5362e6b4abbe3d4b882168d2e547aba2e8c5e36 extends Twig_Template
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
        $__internal_7f31a5c8331dab6a1ebc694cc1b55af8c151f4965621722ef46636a887e7a9b1 = $this->env->getExtension("native_profiler");
        $__internal_7f31a5c8331dab6a1ebc694cc1b55af8c151f4965621722ef46636a887e7a9b1->enter($__internal_7f31a5c8331dab6a1ebc694cc1b55af8c151f4965621722ef46636a887e7a9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7f31a5c8331dab6a1ebc694cc1b55af8c151f4965621722ef46636a887e7a9b1->leave($__internal_7f31a5c8331dab6a1ebc694cc1b55af8c151f4965621722ef46636a887e7a9b1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
