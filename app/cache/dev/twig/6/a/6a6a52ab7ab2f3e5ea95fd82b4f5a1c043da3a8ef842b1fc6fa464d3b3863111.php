<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_6a6a52ab7ab2f3e5ea95fd82b4f5a1c043da3a8ef842b1fc6fa464d3b3863111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f8adc20dcde3a2cfc55b23268e0303a1e8f9658a332c3266548561d2b0feb81 = $this->env->getExtension("native_profiler");
        $__internal_4f8adc20dcde3a2cfc55b23268e0303a1e8f9658a332c3266548561d2b0feb81->enter($__internal_4f8adc20dcde3a2cfc55b23268e0303a1e8f9658a332c3266548561d2b0feb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f8adc20dcde3a2cfc55b23268e0303a1e8f9658a332c3266548561d2b0feb81->leave($__internal_4f8adc20dcde3a2cfc55b23268e0303a1e8f9658a332c3266548561d2b0feb81_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b64dedd0f1e33d1cd7dc2b32190483e9bf0033e42b8ee487e2b4966384f6f619 = $this->env->getExtension("native_profiler");
        $__internal_b64dedd0f1e33d1cd7dc2b32190483e9bf0033e42b8ee487e2b4966384f6f619->enter($__internal_b64dedd0f1e33d1cd7dc2b32190483e9bf0033e42b8ee487e2b4966384f6f619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <svg width=\"13\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 13 28\" enable-background=\"new 0 0 13 28\" xml:space=\"preserve\"><g><rect x=\"3\" y=\"11\" fill=\"#BCBCBB\" width=\"7\" height=\"9\"/></g><g><path fill=\"#3F3F3F\" d=\"M11 6V21H2V6H0V22c0 0.6 0.4 1 1 1h11c0.6 0 1-0.4 1-1V6H11z\"/></g></svg>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/memory.html.twig", 16)->display(array_merge($context, array("link" => false)));
        
        $__internal_b64dedd0f1e33d1cd7dc2b32190483e9bf0033e42b8ee487e2b4966384f6f619->leave($__internal_b64dedd0f1e33d1cd7dc2b32190483e9bf0033e42b8ee487e2b4966384f6f619_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  60 => 13,  56 => 11,  53 => 10,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
