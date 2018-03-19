<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e36cc2d1e5b1ef6c3bcd5a752e528a6427402c3d616a37af426dc1280df0edb8 extends Twig_Template
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
        $__internal_ed0c730f12b431c85863ac3219ee5c103073a561769211b133a9077cd068c665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0c730f12b431c85863ac3219ee5c103073a561769211b133a9077cd068c665->enter($__internal_ed0c730f12b431c85863ac3219ee5c103073a561769211b133a9077cd068c665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_934652774207f7ac0a06f94eb6f818c2e62bac1341f83f23282c47703d1ef606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934652774207f7ac0a06f94eb6f818c2e62bac1341f83f23282c47703d1ef606->enter($__internal_934652774207f7ac0a06f94eb6f818c2e62bac1341f83f23282c47703d1ef606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ed0c730f12b431c85863ac3219ee5c103073a561769211b133a9077cd068c665->leave($__internal_ed0c730f12b431c85863ac3219ee5c103073a561769211b133a9077cd068c665_prof);

        
        $__internal_934652774207f7ac0a06f94eb6f818c2e62bac1341f83f23282c47703d1ef606->leave($__internal_934652774207f7ac0a06f94eb6f818c2e62bac1341f83f23282c47703d1ef606_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
