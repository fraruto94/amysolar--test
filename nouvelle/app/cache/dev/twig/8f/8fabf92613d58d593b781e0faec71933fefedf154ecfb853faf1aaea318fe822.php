<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8b93a3dbf44188d803cde36a5f327e7c99458fd35008370ba10d7b88147fb669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_969f9f508a64f3159158f1d58f5dc35e14c9d0169b988f12851b18d849b1f757 = $this->env->getExtension("native_profiler");
        $__internal_969f9f508a64f3159158f1d58f5dc35e14c9d0169b988f12851b18d849b1f757->enter($__internal_969f9f508a64f3159158f1d58f5dc35e14c9d0169b988f12851b18d849b1f757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_969f9f508a64f3159158f1d58f5dc35e14c9d0169b988f12851b18d849b1f757->leave($__internal_969f9f508a64f3159158f1d58f5dc35e14c9d0169b988f12851b18d849b1f757_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c7dc45108f0ab82ce2237cab2eea460f4a768719b7753f62456bc7bebecb19e = $this->env->getExtension("native_profiler");
        $__internal_9c7dc45108f0ab82ce2237cab2eea460f4a768719b7753f62456bc7bebecb19e->enter($__internal_9c7dc45108f0ab82ce2237cab2eea460f4a768719b7753f62456bc7bebecb19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9c7dc45108f0ab82ce2237cab2eea460f4a768719b7753f62456bc7bebecb19e->leave($__internal_9c7dc45108f0ab82ce2237cab2eea460f4a768719b7753f62456bc7bebecb19e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_904dd9829ebb9980fcd7ccdd52578b63acc4232242ac88ee574cff4cf92d0808 = $this->env->getExtension("native_profiler");
        $__internal_904dd9829ebb9980fcd7ccdd52578b63acc4232242ac88ee574cff4cf92d0808->enter($__internal_904dd9829ebb9980fcd7ccdd52578b63acc4232242ac88ee574cff4cf92d0808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_904dd9829ebb9980fcd7ccdd52578b63acc4232242ac88ee574cff4cf92d0808->leave($__internal_904dd9829ebb9980fcd7ccdd52578b63acc4232242ac88ee574cff4cf92d0808_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4350176c356eef019cd49b265f2d3c005258f2dba799627ac4ac8c6f3376f54 = $this->env->getExtension("native_profiler");
        $__internal_f4350176c356eef019cd49b265f2d3c005258f2dba799627ac4ac8c6f3376f54->enter($__internal_f4350176c356eef019cd49b265f2d3c005258f2dba799627ac4ac8c6f3376f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f4350176c356eef019cd49b265f2d3c005258f2dba799627ac4ac8c6f3376f54->leave($__internal_f4350176c356eef019cd49b265f2d3c005258f2dba799627ac4ac8c6f3376f54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
