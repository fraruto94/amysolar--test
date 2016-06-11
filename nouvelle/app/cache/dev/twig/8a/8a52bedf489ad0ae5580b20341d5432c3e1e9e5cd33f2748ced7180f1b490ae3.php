<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8ba7a1ccca13c54b8e7afad603098d204f68e5e00fdead6eb09750b5e381d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6919f5b65cd51a62a3dd5d405ecfd21dbec593d0c3a049bcec375d076b984fda = $this->env->getExtension("native_profiler");
        $__internal_6919f5b65cd51a62a3dd5d405ecfd21dbec593d0c3a049bcec375d076b984fda->enter($__internal_6919f5b65cd51a62a3dd5d405ecfd21dbec593d0c3a049bcec375d076b984fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6919f5b65cd51a62a3dd5d405ecfd21dbec593d0c3a049bcec375d076b984fda->leave($__internal_6919f5b65cd51a62a3dd5d405ecfd21dbec593d0c3a049bcec375d076b984fda_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_acc4c514fb50c02d9acc8469df65462d1e822ed682307318a6aaac85fe0b2b1b = $this->env->getExtension("native_profiler");
        $__internal_acc4c514fb50c02d9acc8469df65462d1e822ed682307318a6aaac85fe0b2b1b->enter($__internal_acc4c514fb50c02d9acc8469df65462d1e822ed682307318a6aaac85fe0b2b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_acc4c514fb50c02d9acc8469df65462d1e822ed682307318a6aaac85fe0b2b1b->leave($__internal_acc4c514fb50c02d9acc8469df65462d1e822ed682307318a6aaac85fe0b2b1b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
