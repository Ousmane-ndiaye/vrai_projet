<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
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
        $__internal_4c0e24e95f10511b8790ef53db01b85d9bdf1f16b692400895e85fdd01e86051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0e24e95f10511b8790ef53db01b85d9bdf1f16b692400895e85fdd01e86051->enter($__internal_4c0e24e95f10511b8790ef53db01b85d9bdf1f16b692400895e85fdd01e86051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f2f461d0f26075b68ae23d3fa1f2339ea1fb7af18a6326349b49e90804aa9d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f461d0f26075b68ae23d3fa1f2339ea1fb7af18a6326349b49e90804aa9d42->enter($__internal_f2f461d0f26075b68ae23d3fa1f2339ea1fb7af18a6326349b49e90804aa9d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4c0e24e95f10511b8790ef53db01b85d9bdf1f16b692400895e85fdd01e86051->leave($__internal_4c0e24e95f10511b8790ef53db01b85d9bdf1f16b692400895e85fdd01e86051_prof);

        
        $__internal_f2f461d0f26075b68ae23d3fa1f2339ea1fb7af18a6326349b49e90804aa9d42->leave($__internal_f2f461d0f26075b68ae23d3fa1f2339ea1fb7af18a6326349b49e90804aa9d42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
