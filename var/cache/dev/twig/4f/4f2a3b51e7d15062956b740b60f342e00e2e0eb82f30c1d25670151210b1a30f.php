<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_592e8f8412ccbe3048199d3164834fc70e57b6dab8d3604c10b287881c004b04 extends Twig_Template
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
        $__internal_f2feb805ded2301427c95304449e102339e60c6cfcb46466c403d26697e8ae6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2feb805ded2301427c95304449e102339e60c6cfcb46466c403d26697e8ae6a->enter($__internal_f2feb805ded2301427c95304449e102339e60c6cfcb46466c403d26697e8ae6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a5657713ef3a7cf44850b01bb5bba6375f871d4badede409fd4cda47baadb096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5657713ef3a7cf44850b01bb5bba6375f871d4badede409fd4cda47baadb096->enter($__internal_a5657713ef3a7cf44850b01bb5bba6375f871d4badede409fd4cda47baadb096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f2feb805ded2301427c95304449e102339e60c6cfcb46466c403d26697e8ae6a->leave($__internal_f2feb805ded2301427c95304449e102339e60c6cfcb46466c403d26697e8ae6a_prof);

        
        $__internal_a5657713ef3a7cf44850b01bb5bba6375f871d4badede409fd4cda47baadb096->leave($__internal_a5657713ef3a7cf44850b01bb5bba6375f871d4badede409fd4cda47baadb096_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
