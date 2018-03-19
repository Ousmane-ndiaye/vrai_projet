<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b5d43fe3e85ca92b0ff46e869f5e860176ac738f3de27fed1fd1a33b641008e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e68baa1505843f36e399e41374ce30f889c86ef3164686efb8bf8f758a098e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e68baa1505843f36e399e41374ce30f889c86ef3164686efb8bf8f758a098e8->enter($__internal_2e68baa1505843f36e399e41374ce30f889c86ef3164686efb8bf8f758a098e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_717d9642a164c70d027aa6d5122766b71cf4b376a934c7ce5f329764f33e9f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717d9642a164c70d027aa6d5122766b71cf4b376a934c7ce5f329764f33e9f5c->enter($__internal_717d9642a164c70d027aa6d5122766b71cf4b376a934c7ce5f329764f33e9f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e68baa1505843f36e399e41374ce30f889c86ef3164686efb8bf8f758a098e8->leave($__internal_2e68baa1505843f36e399e41374ce30f889c86ef3164686efb8bf8f758a098e8_prof);

        
        $__internal_717d9642a164c70d027aa6d5122766b71cf4b376a934c7ce5f329764f33e9f5c->leave($__internal_717d9642a164c70d027aa6d5122766b71cf4b376a934c7ce5f329764f33e9f5c_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fab5de1e13b1e3e110b74ac45eb484d0ed67e6c05ca55be1d908da13b2bd19a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab5de1e13b1e3e110b74ac45eb484d0ed67e6c05ca55be1d908da13b2bd19a9->enter($__internal_fab5de1e13b1e3e110b74ac45eb484d0ed67e6c05ca55be1d908da13b2bd19a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6e34b7f083d668e003557c54ea7b33c6e1efd0c47a945a5a448728bfa266bc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e34b7f083d668e003557c54ea7b33c6e1efd0c47a945a5a448728bfa266bc9a->enter($__internal_6e34b7f083d668e003557c54ea7b33c6e1efd0c47a945a5a448728bfa266bc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6e34b7f083d668e003557c54ea7b33c6e1efd0c47a945a5a448728bfa266bc9a->leave($__internal_6e34b7f083d668e003557c54ea7b33c6e1efd0c47a945a5a448728bfa266bc9a_prof);

        
        $__internal_fab5de1e13b1e3e110b74ac45eb484d0ed67e6c05ca55be1d908da13b2bd19a9->leave($__internal_fab5de1e13b1e3e110b74ac45eb484d0ed67e6c05ca55be1d908da13b2bd19a9_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b73242064a2f0729c924423630e9a68958af11d637e7a13f5b3a6f5bbbc5b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b73242064a2f0729c924423630e9a68958af11d637e7a13f5b3a6f5bbbc5b99->enter($__internal_4b73242064a2f0729c924423630e9a68958af11d637e7a13f5b3a6f5bbbc5b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4cc89988e795783295951f4666d6f8b360387c170fd14e182f1d8ff7b94c52c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc89988e795783295951f4666d6f8b360387c170fd14e182f1d8ff7b94c52c6->enter($__internal_4cc89988e795783295951f4666d6f8b360387c170fd14e182f1d8ff7b94c52c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4cc89988e795783295951f4666d6f8b360387c170fd14e182f1d8ff7b94c52c6->leave($__internal_4cc89988e795783295951f4666d6f8b360387c170fd14e182f1d8ff7b94c52c6_prof);

        
        $__internal_4b73242064a2f0729c924423630e9a68958af11d637e7a13f5b3a6f5bbbc5b99->leave($__internal_4b73242064a2f0729c924423630e9a68958af11d637e7a13f5b3a6f5bbbc5b99_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
