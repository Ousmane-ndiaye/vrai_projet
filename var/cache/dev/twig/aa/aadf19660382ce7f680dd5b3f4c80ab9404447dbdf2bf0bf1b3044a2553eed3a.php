<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_15e3cac8b41070ebff04035ece6b4d630489bc4135419d985cd2a85660b856bb extends Twig_Template
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
        $__internal_53f77c58b9457c81bbf9b94fd0d569ba31ef2e43f90544c49eafac99e2e63878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f77c58b9457c81bbf9b94fd0d569ba31ef2e43f90544c49eafac99e2e63878->enter($__internal_53f77c58b9457c81bbf9b94fd0d569ba31ef2e43f90544c49eafac99e2e63878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6ab52e47e1e8e47de4d68ebd723f9b5ed71ce419cd4beeac3c6120d8bbe25474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab52e47e1e8e47de4d68ebd723f9b5ed71ce419cd4beeac3c6120d8bbe25474->enter($__internal_6ab52e47e1e8e47de4d68ebd723f9b5ed71ce419cd4beeac3c6120d8bbe25474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_53f77c58b9457c81bbf9b94fd0d569ba31ef2e43f90544c49eafac99e2e63878->leave($__internal_53f77c58b9457c81bbf9b94fd0d569ba31ef2e43f90544c49eafac99e2e63878_prof);

        
        $__internal_6ab52e47e1e8e47de4d68ebd723f9b5ed71ce419cd4beeac3c6120d8bbe25474->leave($__internal_6ab52e47e1e8e47de4d68ebd723f9b5ed71ce419cd4beeac3c6120d8bbe25474_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
