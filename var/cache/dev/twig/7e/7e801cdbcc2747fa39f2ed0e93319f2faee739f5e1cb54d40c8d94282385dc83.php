<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d8add65daa6b4b2b35f02ed7c4b0ab966cc0d9d0bcaa1ee841fb5270089c261e extends Twig_Template
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
        $__internal_4ab45b0c5526c8665b9daa9014ed848e16cb03347e26d832af80b34d2f5f196a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab45b0c5526c8665b9daa9014ed848e16cb03347e26d832af80b34d2f5f196a->enter($__internal_4ab45b0c5526c8665b9daa9014ed848e16cb03347e26d832af80b34d2f5f196a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_6a6a93bc41e1b4a5f7fbd2c59deb4cdce40582aef718a1d59b797661af9bdb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6a93bc41e1b4a5f7fbd2c59deb4cdce40582aef718a1d59b797661af9bdb6c->enter($__internal_6a6a93bc41e1b4a5f7fbd2c59deb4cdce40582aef718a1d59b797661af9bdb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4ab45b0c5526c8665b9daa9014ed848e16cb03347e26d832af80b34d2f5f196a->leave($__internal_4ab45b0c5526c8665b9daa9014ed848e16cb03347e26d832af80b34d2f5f196a_prof);

        
        $__internal_6a6a93bc41e1b4a5f7fbd2c59deb4cdce40582aef718a1d59b797661af9bdb6c->leave($__internal_6a6a93bc41e1b4a5f7fbd2c59deb4cdce40582aef718a1d59b797661af9bdb6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
