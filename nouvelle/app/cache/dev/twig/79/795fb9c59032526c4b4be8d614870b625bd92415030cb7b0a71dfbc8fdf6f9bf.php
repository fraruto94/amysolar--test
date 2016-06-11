<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7bf552aeb2392caef773fc6344cb89c1caff271658758c656653483d94852437 extends Twig_Template
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
        $__internal_74768041c2e839b1dd6503244169fde7ae0d2bbda876ca0d5e5b9d3024c655fe = $this->env->getExtension("native_profiler");
        $__internal_74768041c2e839b1dd6503244169fde7ae0d2bbda876ca0d5e5b9d3024c655fe->enter($__internal_74768041c2e839b1dd6503244169fde7ae0d2bbda876ca0d5e5b9d3024c655fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_74768041c2e839b1dd6503244169fde7ae0d2bbda876ca0d5e5b9d3024c655fe->leave($__internal_74768041c2e839b1dd6503244169fde7ae0d2bbda876ca0d5e5b9d3024c655fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
