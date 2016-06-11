<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e29d2670698bb196f471286418eda6ede2b26a99af60f319a41e0dd269e04590 extends Twig_Template
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
        $__internal_883111c826392be0a6993a8200320d65b7bb6ab9d7fbcbf7987d8ab41980347c = $this->env->getExtension("native_profiler");
        $__internal_883111c826392be0a6993a8200320d65b7bb6ab9d7fbcbf7987d8ab41980347c->enter($__internal_883111c826392be0a6993a8200320d65b7bb6ab9d7fbcbf7987d8ab41980347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_883111c826392be0a6993a8200320d65b7bb6ab9d7fbcbf7987d8ab41980347c->leave($__internal_883111c826392be0a6993a8200320d65b7bb6ab9d7fbcbf7987d8ab41980347c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
