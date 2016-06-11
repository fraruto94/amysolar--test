<?php

/* ::base.html.twig */
class __TwigTemplate_44c71d832fc9d1d61a36b3d97bb7c6a27bd7b5740b8a54553bae92da22b85599 extends Twig_Template
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
        $__internal_240e42da148d3e64e1cb58844def17110f5cce43af9daee022dfe1d43e5b47c7 = $this->env->getExtension("native_profiler");
        $__internal_240e42da148d3e64e1cb58844def17110f5cce43af9daee022dfe1d43e5b47c7->enter($__internal_240e42da148d3e64e1cb58844def17110f5cce43af9daee022dfe1d43e5b47c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_240e42da148d3e64e1cb58844def17110f5cce43af9daee022dfe1d43e5b47c7->leave($__internal_240e42da148d3e64e1cb58844def17110f5cce43af9daee022dfe1d43e5b47c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d29f5eff37dbf8506c518efc30604cfd9d110ba3dd132b28e4837b099fbca9b = $this->env->getExtension("native_profiler");
        $__internal_4d29f5eff37dbf8506c518efc30604cfd9d110ba3dd132b28e4837b099fbca9b->enter($__internal_4d29f5eff37dbf8506c518efc30604cfd9d110ba3dd132b28e4837b099fbca9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4d29f5eff37dbf8506c518efc30604cfd9d110ba3dd132b28e4837b099fbca9b->leave($__internal_4d29f5eff37dbf8506c518efc30604cfd9d110ba3dd132b28e4837b099fbca9b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a5d23c679c5b239db98ddc24bbc2a62e4420d97d190ea2a3a9dd5ebad8a62bf = $this->env->getExtension("native_profiler");
        $__internal_4a5d23c679c5b239db98ddc24bbc2a62e4420d97d190ea2a3a9dd5ebad8a62bf->enter($__internal_4a5d23c679c5b239db98ddc24bbc2a62e4420d97d190ea2a3a9dd5ebad8a62bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4a5d23c679c5b239db98ddc24bbc2a62e4420d97d190ea2a3a9dd5ebad8a62bf->leave($__internal_4a5d23c679c5b239db98ddc24bbc2a62e4420d97d190ea2a3a9dd5ebad8a62bf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dbb434cc8339aa68f04c762d907945b54d03bc027501a4b2cce18d5d8dcce67 = $this->env->getExtension("native_profiler");
        $__internal_6dbb434cc8339aa68f04c762d907945b54d03bc027501a4b2cce18d5d8dcce67->enter($__internal_6dbb434cc8339aa68f04c762d907945b54d03bc027501a4b2cce18d5d8dcce67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6dbb434cc8339aa68f04c762d907945b54d03bc027501a4b2cce18d5d8dcce67->leave($__internal_6dbb434cc8339aa68f04c762d907945b54d03bc027501a4b2cce18d5d8dcce67_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28a8c53c28207f7b0e23c84719a648321703afa363cf39833744d0d45d6e2fe0 = $this->env->getExtension("native_profiler");
        $__internal_28a8c53c28207f7b0e23c84719a648321703afa363cf39833744d0d45d6e2fe0->enter($__internal_28a8c53c28207f7b0e23c84719a648321703afa363cf39833744d0d45d6e2fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_28a8c53c28207f7b0e23c84719a648321703afa363cf39833744d0d45d6e2fe0->leave($__internal_28a8c53c28207f7b0e23c84719a648321703afa363cf39833744d0d45d6e2fe0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
