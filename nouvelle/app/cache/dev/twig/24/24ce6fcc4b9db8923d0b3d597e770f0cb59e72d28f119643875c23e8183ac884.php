<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1e96e20125859b17fa6d23b9db5a5b7444e64b2acadc7e25505c264e1285eeaf extends Twig_Template
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
        $__internal_0e1bba74bab5bbe53181c2e297987a0ba2af15bc4d1e4e4352170627caed316c = $this->env->getExtension("native_profiler");
        $__internal_0e1bba74bab5bbe53181c2e297987a0ba2af15bc4d1e4e4352170627caed316c->enter($__internal_0e1bba74bab5bbe53181c2e297987a0ba2af15bc4d1e4e4352170627caed316c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0e1bba74bab5bbe53181c2e297987a0ba2af15bc4d1e4e4352170627caed316c->leave($__internal_0e1bba74bab5bbe53181c2e297987a0ba2af15bc4d1e4e4352170627caed316c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
