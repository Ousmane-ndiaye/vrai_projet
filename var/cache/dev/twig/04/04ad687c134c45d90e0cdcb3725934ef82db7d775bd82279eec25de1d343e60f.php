<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ac3c8afc7485c0d9cc2d552518f6bb65ab2eff845447274c1a0b9a1dc733a9dc extends Twig_Template
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
        $__internal_1349b8c74a0d2393727095a605efdf823f72e2be0bdd21e63a866cf2ea2f6260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1349b8c74a0d2393727095a605efdf823f72e2be0bdd21e63a866cf2ea2f6260->enter($__internal_1349b8c74a0d2393727095a605efdf823f72e2be0bdd21e63a866cf2ea2f6260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_69f4e7e5d1638819486741470b4c385cafdd5b372cb99d3cb832eea2e590e96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f4e7e5d1638819486741470b4c385cafdd5b372cb99d3cb832eea2e590e96c->enter($__internal_69f4e7e5d1638819486741470b4c385cafdd5b372cb99d3cb832eea2e590e96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1349b8c74a0d2393727095a605efdf823f72e2be0bdd21e63a866cf2ea2f6260->leave($__internal_1349b8c74a0d2393727095a605efdf823f72e2be0bdd21e63a866cf2ea2f6260_prof);

        
        $__internal_69f4e7e5d1638819486741470b4c385cafdd5b372cb99d3cb832eea2e590e96c->leave($__internal_69f4e7e5d1638819486741470b4c385cafdd5b372cb99d3cb832eea2e590e96c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
