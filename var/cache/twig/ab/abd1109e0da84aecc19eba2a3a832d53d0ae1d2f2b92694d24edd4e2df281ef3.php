<?php

/* article.html.twig */
class __TwigTemplate_5d494a76de94a4ecad9cfcfe089951092f86b38f6c6a6c11e8d1f2bcad51fddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<p>
    <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</p>

    <h3>Comments</h3>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 12
            echo "        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
            echo "</strong> said : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "<br>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "        No comments yet.
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <h3>Add a comment</h3>
    ";
        // line 18
        if (($context["commentForm"] ?? $this->getContext($context, "commentForm"))) {
            // line 19
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock(($context["commentForm"] ?? $this->getContext($context, "commentForm")), 'form_start');
            echo "
            <div class=\"form-group\">
                ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["commentForm"] ?? $this->getContext($context, "commentForm")), "content", array()), 'errors');
            echo "
                ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["commentForm"] ?? $this->getContext($context, "commentForm")), "content", array()), 'widget', array("attr" => array("rows" => "4", "class" => "form-control", "placeholder" => "Enter your comment")));
            // line 26
            echo "
            </div>
            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Publish comment\" />
            </div>
        ";
            // line 31
            echo             $this->env->getExtension('form')->renderer->renderBlock(($context["commentForm"] ?? $this->getContext($context, "commentForm")), 'form_end');
            echo "
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 33
                echo "            <div class=\"alert alert-success\">
                ";
                // line 34
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo " \">Log in</a> to add comments.
    ";
        }
        // line 40
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  121 => 38,  118 => 37,  109 => 34,  106 => 33,  102 => 32,  98 => 31,  91 => 26,  89 => 22,  85 => 21,  79 => 19,  77 => 18,  73 => 16,  66 => 14,  56 => 12,  51 => 11,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}{{ article.title }}{% endblock %}

{% block content %}
<p>
    <h2>{{ article.title }}</h2>
    <p>{{ article.content }}</p>

    <h3>Comments</h3>
    {% for comment in comments %}
        <strong>{{ comment.author.username }}</strong> said : {{ comment.content }}<br>
    {% else %}
        No comments yet.
    {% endfor %}

    <h3>Add a comment</h3>
    {% if commentForm %}
        {{ form_start(commentForm) }}
            <div class=\"form-group\">
                {{ form_errors(commentForm.content) }}
                {{ form_widget(commentForm.content, { 'attr':  {
                    'rows': '4',
                    'class': 'form-control',
                    'placeholder': 'Enter your comment'
                }}) }}
            </div>
            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Publish comment\" />
            </div>
        {{ form_end(commentForm) }}
        {% for flashMessage in app.session.flashbag.get('success') %}
            <div class=\"alert alert-success\">
                {{ flashMessage }}
            </div>
        {% endfor %}
    {% else %}
        <a href=\"{{ path('login') }} \">Log in</a> to add comments.
    {% endif %}
</p>
{% endblock %}
", "article.html.twig", "C:\\Users\\HP Pavilion\\Desktop\\microCMS\\views\\article.html.twig");
    }
}
