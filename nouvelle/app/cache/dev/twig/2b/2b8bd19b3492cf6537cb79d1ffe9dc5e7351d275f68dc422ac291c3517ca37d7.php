<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c669db45998ace564895dd9608dcc545341e878ad174b56d9c9a22968d42b39c extends Twig_Template
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
        $__internal_7f87557480a680b29209a716fae4b89f305987b00a69eaa7087b00ddae5c5904 = $this->env->getExtension("native_profiler");
        $__internal_7f87557480a680b29209a716fae4b89f305987b00a69eaa7087b00ddae5c5904->enter($__internal_7f87557480a680b29209a716fae4b89f305987b00a69eaa7087b00ddae5c5904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7f87557480a680b29209a716fae4b89f305987b00a69eaa7087b00ddae5c5904->leave($__internal_7f87557480a680b29209a716fae4b89f305987b00a69eaa7087b00ddae5c5904_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
