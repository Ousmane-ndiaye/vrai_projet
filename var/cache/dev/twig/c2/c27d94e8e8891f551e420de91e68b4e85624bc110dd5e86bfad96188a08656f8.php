<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61b100ff6a710e164c89f9845f6798c10697c95178c5d56a54670bba33507761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b100ff6a710e164c89f9845f6798c10697c95178c5d56a54670bba33507761->enter($__internal_61b100ff6a710e164c89f9845f6798c10697c95178c5d56a54670bba33507761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_8d9abd18a2b56767e7fcb3a05f376df368a91d5739dee3a12d5b93431185016e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9abd18a2b56767e7fcb3a05f376df368a91d5739dee3a12d5b93431185016e->enter($__internal_8d9abd18a2b56767e7fcb3a05f376df368a91d5739dee3a12d5b93431185016e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_61b100ff6a710e164c89f9845f6798c10697c95178c5d56a54670bba33507761->leave($__internal_61b100ff6a710e164c89f9845f6798c10697c95178c5d56a54670bba33507761_prof);

        
        $__internal_8d9abd18a2b56767e7fcb3a05f376df368a91d5739dee3a12d5b93431185016e->leave($__internal_8d9abd18a2b56767e7fcb3a05f376df368a91d5739dee3a12d5b93431185016e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c7e71498c244a5022f5d5550e6d1c06d05d2afcfa2f60974550bcb0403ae8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7e71498c244a5022f5d5550e6d1c06d05d2afcfa2f60974550bcb0403ae8cb->enter($__internal_6c7e71498c244a5022f5d5550e6d1c06d05d2afcfa2f60974550bcb0403ae8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8950e963a824ba396bfdfffb9949e836290495569d16f07036d7a883877f8756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8950e963a824ba396bfdfffb9949e836290495569d16f07036d7a883877f8756->enter($__internal_8950e963a824ba396bfdfffb9949e836290495569d16f07036d7a883877f8756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8950e963a824ba396bfdfffb9949e836290495569d16f07036d7a883877f8756->leave($__internal_8950e963a824ba396bfdfffb9949e836290495569d16f07036d7a883877f8756_prof);

        
        $__internal_6c7e71498c244a5022f5d5550e6d1c06d05d2afcfa2f60974550bcb0403ae8cb->leave($__internal_6c7e71498c244a5022f5d5550e6d1c06d05d2afcfa2f60974550bcb0403ae8cb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2701c83de24131eb801e9b55b3b48962f2cbae71e454fbf0f4a1e1dc4df475e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2701c83de24131eb801e9b55b3b48962f2cbae71e454fbf0f4a1e1dc4df475e->enter($__internal_f2701c83de24131eb801e9b55b3b48962f2cbae71e454fbf0f4a1e1dc4df475e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb7812f90d5e5572a361264b0b723937980bc6ac838ba3151fc5d78842ccc125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7812f90d5e5572a361264b0b723937980bc6ac838ba3151fc5d78842ccc125->enter($__internal_bb7812f90d5e5572a361264b0b723937980bc6ac838ba3151fc5d78842ccc125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bb7812f90d5e5572a361264b0b723937980bc6ac838ba3151fc5d78842ccc125->leave($__internal_bb7812f90d5e5572a361264b0b723937980bc6ac838ba3151fc5d78842ccc125_prof);

        
        $__internal_f2701c83de24131eb801e9b55b3b48962f2cbae71e454fbf0f4a1e1dc4df475e->leave($__internal_f2701c83de24131eb801e9b55b3b48962f2cbae71e454fbf0f4a1e1dc4df475e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_28d782c0bba226b4a2259a07229a6fd8513a5af827144ac574fb307fc648ede2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d782c0bba226b4a2259a07229a6fd8513a5af827144ac574fb307fc648ede2->enter($__internal_28d782c0bba226b4a2259a07229a6fd8513a5af827144ac574fb307fc648ede2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55d03ec03d145115c58de1e76b613810f8a21933d1348da3ffc597f3f3addaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d03ec03d145115c58de1e76b613810f8a21933d1348da3ffc597f3f3addaa0->enter($__internal_55d03ec03d145115c58de1e76b613810f8a21933d1348da3ffc597f3f3addaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55d03ec03d145115c58de1e76b613810f8a21933d1348da3ffc597f3f3addaa0->leave($__internal_55d03ec03d145115c58de1e76b613810f8a21933d1348da3ffc597f3f3addaa0_prof);

        
        $__internal_28d782c0bba226b4a2259a07229a6fd8513a5af827144ac574fb307fc648ede2->leave($__internal_28d782c0bba226b4a2259a07229a6fd8513a5af827144ac574fb307fc648ede2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
