<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ec866e4cab0d5b88d15113d0b091965424871ecde7ee47ddf6fc94f1eba234ba extends Twig_Template
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
        $__internal_403ad767a086c2604dbf7b26c70acd60fd01635a470c12539abaafdc7f2d998b = $this->env->getExtension("native_profiler");
        $__internal_403ad767a086c2604dbf7b26c70acd60fd01635a470c12539abaafdc7f2d998b->enter($__internal_403ad767a086c2604dbf7b26c70acd60fd01635a470c12539abaafdc7f2d998b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_403ad767a086c2604dbf7b26c70acd60fd01635a470c12539abaafdc7f2d998b->leave($__internal_403ad767a086c2604dbf7b26c70acd60fd01635a470c12539abaafdc7f2d998b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
