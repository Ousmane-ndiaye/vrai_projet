<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e8a4715959982d62a4eaa372133700d380573fa9f6c314ef5bd53288d0f741fa extends Twig_Template
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
        $__internal_4f40d075668ae066d653fdf367e80bea5139cfc8c67b6f1b36093804dcf655aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f40d075668ae066d653fdf367e80bea5139cfc8c67b6f1b36093804dcf655aa->enter($__internal_4f40d075668ae066d653fdf367e80bea5139cfc8c67b6f1b36093804dcf655aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_fa88df6e43c44d1c0b584d27bee543ebbbc469a0d0a06dc93c5d37619363a012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa88df6e43c44d1c0b584d27bee543ebbbc469a0d0a06dc93c5d37619363a012->enter($__internal_fa88df6e43c44d1c0b584d27bee543ebbbc469a0d0a06dc93c5d37619363a012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4f40d075668ae066d653fdf367e80bea5139cfc8c67b6f1b36093804dcf655aa->leave($__internal_4f40d075668ae066d653fdf367e80bea5139cfc8c67b6f1b36093804dcf655aa_prof);

        
        $__internal_fa88df6e43c44d1c0b584d27bee543ebbbc469a0d0a06dc93c5d37619363a012->leave($__internal_fa88df6e43c44d1c0b584d27bee543ebbbc469a0d0a06dc93c5d37619363a012_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
