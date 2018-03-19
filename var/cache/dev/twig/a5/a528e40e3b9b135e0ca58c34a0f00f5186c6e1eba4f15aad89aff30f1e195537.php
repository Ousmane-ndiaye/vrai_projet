<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b568a4e5ad5ee8f8a71ee37d960e4e2d9c0e55ce8af49f736810b4afd8eae854 extends Twig_Template
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
        $__internal_a36a9a04d09fd9e4df07599db88ddcd51f2f236b62933701cbdd68a5c95d04cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36a9a04d09fd9e4df07599db88ddcd51f2f236b62933701cbdd68a5c95d04cd->enter($__internal_a36a9a04d09fd9e4df07599db88ddcd51f2f236b62933701cbdd68a5c95d04cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b7201d11ac6550120eb5b83061a54be0f0717d0483cd8399428fee68abb161c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7201d11ac6550120eb5b83061a54be0f0717d0483cd8399428fee68abb161c3->enter($__internal_b7201d11ac6550120eb5b83061a54be0f0717d0483cd8399428fee68abb161c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a36a9a04d09fd9e4df07599db88ddcd51f2f236b62933701cbdd68a5c95d04cd->leave($__internal_a36a9a04d09fd9e4df07599db88ddcd51f2f236b62933701cbdd68a5c95d04cd_prof);

        
        $__internal_b7201d11ac6550120eb5b83061a54be0f0717d0483cd8399428fee68abb161c3->leave($__internal_b7201d11ac6550120eb5b83061a54be0f0717d0483cd8399428fee68abb161c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
