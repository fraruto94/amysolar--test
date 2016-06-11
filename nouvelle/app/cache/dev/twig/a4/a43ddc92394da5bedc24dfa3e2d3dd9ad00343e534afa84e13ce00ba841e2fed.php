<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_670f5441ed57305818402aaa300212be9f18f4d486e97707094b8032efcfc01b extends Twig_Template
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
        $__internal_4378b18801a17d556ce5f3ff104462ff9d275d06184c5683fac60317de2c5c3a = $this->env->getExtension("native_profiler");
        $__internal_4378b18801a17d556ce5f3ff104462ff9d275d06184c5683fac60317de2c5c3a->enter($__internal_4378b18801a17d556ce5f3ff104462ff9d275d06184c5683fac60317de2c5c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4378b18801a17d556ce5f3ff104462ff9d275d06184c5683fac60317de2c5c3a->leave($__internal_4378b18801a17d556ce5f3ff104462ff9d275d06184c5683fac60317de2c5c3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
