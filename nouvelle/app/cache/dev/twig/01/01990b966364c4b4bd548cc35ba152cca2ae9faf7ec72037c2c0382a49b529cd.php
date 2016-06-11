<?php

/* base.html.twig */
class __TwigTemplate_510b3787df0238f80f00f29058d54702c19b623aff5b099220cfc3e209b249ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1df6cafd26c4fb83d67bfcc553a4b2a3271ab77313c63aaf48369074c52af42c = $this->env->getExtension("native_profiler");
        $__internal_1df6cafd26c4fb83d67bfcc553a4b2a3271ab77313c63aaf48369074c52af42c->enter($__internal_1df6cafd26c4fb83d67bfcc553a4b2a3271ab77313c63aaf48369074c52af42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1df6cafd26c4fb83d67bfcc553a4b2a3271ab77313c63aaf48369074c52af42c->leave($__internal_1df6cafd26c4fb83d67bfcc553a4b2a3271ab77313c63aaf48369074c52af42c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_290deb30d604cb2f98be2dae0bf31adaee7472db271738c73119dd0892ca43df = $this->env->getExtension("native_profiler");
        $__internal_290deb30d604cb2f98be2dae0bf31adaee7472db271738c73119dd0892ca43df->enter($__internal_290deb30d604cb2f98be2dae0bf31adaee7472db271738c73119dd0892ca43df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_290deb30d604cb2f98be2dae0bf31adaee7472db271738c73119dd0892ca43df->leave($__internal_290deb30d604cb2f98be2dae0bf31adaee7472db271738c73119dd0892ca43df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b494412c0546db8b1e6719ca9d18d3e4da480ec16f5185fb187cbabcd13d39c1 = $this->env->getExtension("native_profiler");
        $__internal_b494412c0546db8b1e6719ca9d18d3e4da480ec16f5185fb187cbabcd13d39c1->enter($__internal_b494412c0546db8b1e6719ca9d18d3e4da480ec16f5185fb187cbabcd13d39c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b494412c0546db8b1e6719ca9d18d3e4da480ec16f5185fb187cbabcd13d39c1->leave($__internal_b494412c0546db8b1e6719ca9d18d3e4da480ec16f5185fb187cbabcd13d39c1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2decf01d22e66e03881592b67e8a88dac1510d9026d4408819e64ac72c760b83 = $this->env->getExtension("native_profiler");
        $__internal_2decf01d22e66e03881592b67e8a88dac1510d9026d4408819e64ac72c760b83->enter($__internal_2decf01d22e66e03881592b67e8a88dac1510d9026d4408819e64ac72c760b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2decf01d22e66e03881592b67e8a88dac1510d9026d4408819e64ac72c760b83->leave($__internal_2decf01d22e66e03881592b67e8a88dac1510d9026d4408819e64ac72c760b83_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3dab2d9ef27195c1acafe15b75ac769c6259755e7f0270de484dba15ef78ffa3 = $this->env->getExtension("native_profiler");
        $__internal_3dab2d9ef27195c1acafe15b75ac769c6259755e7f0270de484dba15ef78ffa3->enter($__internal_3dab2d9ef27195c1acafe15b75ac769c6259755e7f0270de484dba15ef78ffa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3dab2d9ef27195c1acafe15b75ac769c6259755e7f0270de484dba15ef78ffa3->leave($__internal_3dab2d9ef27195c1acafe15b75ac769c6259755e7f0270de484dba15ef78ffa3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
