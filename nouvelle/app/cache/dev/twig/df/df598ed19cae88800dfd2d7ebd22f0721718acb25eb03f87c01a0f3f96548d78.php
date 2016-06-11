<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cbbef2c65ade786f2e3c821e79012ec0a0e52c9a2739640212e0d4b555d07f0d extends Twig_Template
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
        $__internal_ea0b93d90834857f17451c7c3be1b33ab0269d35dea471f3eb8d661e140d0e6d = $this->env->getExtension("native_profiler");
        $__internal_ea0b93d90834857f17451c7c3be1b33ab0269d35dea471f3eb8d661e140d0e6d->enter($__internal_ea0b93d90834857f17451c7c3be1b33ab0269d35dea471f3eb8d661e140d0e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ea0b93d90834857f17451c7c3be1b33ab0269d35dea471f3eb8d661e140d0e6d->leave($__internal_ea0b93d90834857f17451c7c3be1b33ab0269d35dea471f3eb8d661e140d0e6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
