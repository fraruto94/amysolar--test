<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d4ac3e6ad1bf0a0a5b6cccab0dcfbfb5c929aafcbecb5c9a02a9f16ea28a670d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_d18e218c6046a55412fb4cbd882db15a964ac89686be76c3f27d3f6ad33195ea = $this->env->getExtension("native_profiler");
        $__internal_d18e218c6046a55412fb4cbd882db15a964ac89686be76c3f27d3f6ad33195ea->enter($__internal_d18e218c6046a55412fb4cbd882db15a964ac89686be76c3f27d3f6ad33195ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d18e218c6046a55412fb4cbd882db15a964ac89686be76c3f27d3f6ad33195ea->leave($__internal_d18e218c6046a55412fb4cbd882db15a964ac89686be76c3f27d3f6ad33195ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35a2a3a97afa1156f853dd78c4fbda77cc832f68b0e317c27741d1604d44ebf4 = $this->env->getExtension("native_profiler");
        $__internal_35a2a3a97afa1156f853dd78c4fbda77cc832f68b0e317c27741d1604d44ebf4->enter($__internal_35a2a3a97afa1156f853dd78c4fbda77cc832f68b0e317c27741d1604d44ebf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_35a2a3a97afa1156f853dd78c4fbda77cc832f68b0e317c27741d1604d44ebf4->leave($__internal_35a2a3a97afa1156f853dd78c4fbda77cc832f68b0e317c27741d1604d44ebf4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d61479295068745824447b66be17477ec28b23d04df46a0c480771c001686a0f = $this->env->getExtension("native_profiler");
        $__internal_d61479295068745824447b66be17477ec28b23d04df46a0c480771c001686a0f->enter($__internal_d61479295068745824447b66be17477ec28b23d04df46a0c480771c001686a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d61479295068745824447b66be17477ec28b23d04df46a0c480771c001686a0f->leave($__internal_d61479295068745824447b66be17477ec28b23d04df46a0c480771c001686a0f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b00e1ab509c49980e748eb72b62c3ca5aea4a64ce6582a05e087ab8a3ea1fe88 = $this->env->getExtension("native_profiler");
        $__internal_b00e1ab509c49980e748eb72b62c3ca5aea4a64ce6582a05e087ab8a3ea1fe88->enter($__internal_b00e1ab509c49980e748eb72b62c3ca5aea4a64ce6582a05e087ab8a3ea1fe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b00e1ab509c49980e748eb72b62c3ca5aea4a64ce6582a05e087ab8a3ea1fe88->leave($__internal_b00e1ab509c49980e748eb72b62c3ca5aea4a64ce6582a05e087ab8a3ea1fe88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
