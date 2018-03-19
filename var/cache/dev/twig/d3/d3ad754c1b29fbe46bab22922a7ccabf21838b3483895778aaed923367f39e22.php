<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_e391a44d3cbfc372272726a85d0c0a4275add8fa68d81579f7cc3f9c4219838f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e391a44d3cbfc372272726a85d0c0a4275add8fa68d81579f7cc3f9c4219838f->enter($__internal_e391a44d3cbfc372272726a85d0c0a4275add8fa68d81579f7cc3f9c4219838f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_cffcd23c456399bee4d455f656b33862c9b9a2b249317a66b449f54baedc7984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffcd23c456399bee4d455f656b33862c9b9a2b249317a66b449f54baedc7984->enter($__internal_cffcd23c456399bee4d455f656b33862c9b9a2b249317a66b449f54baedc7984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e391a44d3cbfc372272726a85d0c0a4275add8fa68d81579f7cc3f9c4219838f->leave($__internal_e391a44d3cbfc372272726a85d0c0a4275add8fa68d81579f7cc3f9c4219838f_prof);

        
        $__internal_cffcd23c456399bee4d455f656b33862c9b9a2b249317a66b449f54baedc7984->leave($__internal_cffcd23c456399bee4d455f656b33862c9b9a2b249317a66b449f54baedc7984_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
