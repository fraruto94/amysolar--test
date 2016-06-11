<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a77a88fdbdd1e51863bbe5478a9e3b16a0fb363770398395bfeb20b846fe216d extends Twig_Template
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
        $__internal_df0522ed15c1ed70809f44f5c5562158876bd79c1aedf321c170f6db59e74f27 = $this->env->getExtension("native_profiler");
        $__internal_df0522ed15c1ed70809f44f5c5562158876bd79c1aedf321c170f6db59e74f27->enter($__internal_df0522ed15c1ed70809f44f5c5562158876bd79c1aedf321c170f6db59e74f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_df0522ed15c1ed70809f44f5c5562158876bd79c1aedf321c170f6db59e74f27->leave($__internal_df0522ed15c1ed70809f44f5c5562158876bd79c1aedf321c170f6db59e74f27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
