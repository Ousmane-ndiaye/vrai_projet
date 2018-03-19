<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_744c421e1e08f50138d3bbccba9c4a78f28b416ceaa0f4f9657b3d6a934e1471 extends Twig_Template
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
        $__internal_b760c2610af479ae3f676fd48af133a69d75dfe9888597cf127db22408a1fce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b760c2610af479ae3f676fd48af133a69d75dfe9888597cf127db22408a1fce6->enter($__internal_b760c2610af479ae3f676fd48af133a69d75dfe9888597cf127db22408a1fce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4fe287fbeb575d23e723029f12a03dcb5d0fd0488b47b14d8afd45f1c78bf490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe287fbeb575d23e723029f12a03dcb5d0fd0488b47b14d8afd45f1c78bf490->enter($__internal_4fe287fbeb575d23e723029f12a03dcb5d0fd0488b47b14d8afd45f1c78bf490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b760c2610af479ae3f676fd48af133a69d75dfe9888597cf127db22408a1fce6->leave($__internal_b760c2610af479ae3f676fd48af133a69d75dfe9888597cf127db22408a1fce6_prof);

        
        $__internal_4fe287fbeb575d23e723029f12a03dcb5d0fd0488b47b14d8afd45f1c78bf490->leave($__internal_4fe287fbeb575d23e723029f12a03dcb5d0fd0488b47b14d8afd45f1c78bf490_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
