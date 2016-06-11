<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_60a74e4ae62da685be12403deb5ff5e9be0917c6d1a296dbc1dfca0be4ec5459 extends Twig_Template
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
        $__internal_5010f83801f894a49cf312ef82b2a8b0319d16db8db68f7ceeb832bd7939a5d5 = $this->env->getExtension("native_profiler");
        $__internal_5010f83801f894a49cf312ef82b2a8b0319d16db8db68f7ceeb832bd7939a5d5->enter($__internal_5010f83801f894a49cf312ef82b2a8b0319d16db8db68f7ceeb832bd7939a5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5010f83801f894a49cf312ef82b2a8b0319d16db8db68f7ceeb832bd7939a5d5->leave($__internal_5010f83801f894a49cf312ef82b2a8b0319d16db8db68f7ceeb832bd7939a5d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
