<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_80d3f562e6e53eed0a837ee0788d084340cd97f7ad450ea6e16bf5030572441b extends Twig_Template
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
        $__internal_1b72ed468f69674e89d441b59e76cd14960e2349b8032306244081c34303e31d = $this->env->getExtension("native_profiler");
        $__internal_1b72ed468f69674e89d441b59e76cd14960e2349b8032306244081c34303e31d->enter($__internal_1b72ed468f69674e89d441b59e76cd14960e2349b8032306244081c34303e31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1b72ed468f69674e89d441b59e76cd14960e2349b8032306244081c34303e31d->leave($__internal_1b72ed468f69674e89d441b59e76cd14960e2349b8032306244081c34303e31d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_08482500591ce0ba096db488b234907ff0f7664e2564ecb16b7956a017d9302f = $this->env->getExtension("native_profiler");
        $__internal_08482500591ce0ba096db488b234907ff0f7664e2564ecb16b7956a017d9302f->enter($__internal_08482500591ce0ba096db488b234907ff0f7664e2564ecb16b7956a017d9302f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_08482500591ce0ba096db488b234907ff0f7664e2564ecb16b7956a017d9302f->leave($__internal_08482500591ce0ba096db488b234907ff0f7664e2564ecb16b7956a017d9302f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
