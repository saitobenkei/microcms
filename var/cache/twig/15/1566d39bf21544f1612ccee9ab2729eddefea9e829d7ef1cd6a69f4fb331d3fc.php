<?php

/* admin.html.twig */
class __TwigTemplate_40622f95177eac2c82930e3778df7337f4cbc5b17d183d1d6b0efccc6c135baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin.html.twig", 1);
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
        // line 2
        $context["adminMenu"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "<div class=\"alert alert-success\">
    ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<div class=\"row\">
    <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"active\"><a href=\"#articles\" data-toggle=\"tab\">Articles</a></li>
            <li><a href=\"#comments\" data-toggle=\"tab\">Comments</a></li>
            <li><a href=\"#users\" data-toggle=\"tab\">Users</a></li>
        </ul>
    </div>
</div>
<div class=\"tab-content\">
    <div class=\"tab-pane fade in active adminTable\" id=\"articles\">
        ";
        // line 24
        if (($context["articles"] ?? $this->getContext($context, "articles"))) {
            // line 25
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th></th>  <!-- Actions column -->
                    </tr>
                </thead>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 35
                echo "                <tr>
                    <td><a class=\"articleTitle\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["article"], "content", array()), 60), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#articleDialog";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"articleDialog";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation needed</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Do you really want to delete this article ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                        <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirm</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </table>
        </div>
        ";
        } else {
            // line 65
            echo "        <div class=\"alert alert-warning\">No articles found.</div>
        ";
        }
        // line 67
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add article</button></a>
    </div>
    <div class=\"tab-pane fade adminTable\" id=\"comments\">
        <!-- Insérer ici le code de gestion des commentaires -->
        ";
        // line 71
        if (($context["comments"] ?? $this->getContext($context, "comments"))) {
            // line 72
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Author</th>
                        <th>Content</th>
                        <th></th>  <!-- Actions column -->
                    </tr>
                </thead>
                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 83
                echo "                <tr>
                    <td><a class=\"articleTitle\" href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "article", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "article", array()), "title", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["comment"], "content", array()), 60), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_comment_edit", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#commentDialog";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"commentDialog";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation needed</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Do you really want to delete this comment ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                        <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_comment_delete", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirm</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "            </table>
        </div>
        ";
        } else {
            // line 114
            echo "        <div class=\"alert alert-warning\">No comments found.</div>
        ";
        }
        // line 116
        echo "    </div>
    <div class=\"tab-pane fade adminTable\" id=\"users\">
        ";
        // line 118
        if (($context["users"] ?? $this->getContext($context, "users"))) {
            // line 119
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th></th>  <!-- Actions column -->
                    </tr>
                </thead>
                ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 129
                echo "                <tr>
                    <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</a></td>
                    <td>
                        ";
                // line 132
                if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                    // line 133
                    echo "                            Admin
                        ";
                } else {
                    // line 135
                    echo "                            User
                        ";
                }
                // line 137
                echo "                    </td>
                    <td>
                        <a href=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#userDialog";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"userDialog";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation needed</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Do you really want to delete this user ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                        <a href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirm</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "            </table>
        </div>
        ";
        } else {
            // line 165
            echo "        <div class=\"alert alert-warning\">No users found.</div>
        ";
        }
        // line 167
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add user</button></a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 167,  330 => 165,  325 => 162,  311 => 154,  296 => 142,  291 => 140,  287 => 139,  283 => 137,  279 => 135,  275 => 133,  273 => 132,  268 => 130,  265 => 129,  261 => 128,  250 => 119,  248 => 118,  244 => 116,  240 => 114,  235 => 111,  221 => 103,  206 => 91,  201 => 89,  197 => 88,  192 => 86,  188 => 85,  182 => 84,  179 => 83,  175 => 82,  163 => 72,  161 => 71,  153 => 67,  149 => 65,  144 => 62,  130 => 54,  115 => 42,  110 => 40,  106 => 39,  101 => 37,  95 => 36,  92 => 35,  88 => 34,  77 => 25,  75 => 24,  62 => 13,  53 => 10,  50 => 9,  46 => 8,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
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
{% set adminMenu = true %}

{% block title %}Administration{% endblock %}

{% block content %}
<h2 class=\"text-center\">{{ block('title') }}</h2>
{% for flashMessage in app.session.flashbag.get('success') %}
<div class=\"alert alert-success\">
    {{ flashMessage }}
</div>
{% endfor %}
<div class=\"row\">
    <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"active\"><a href=\"#articles\" data-toggle=\"tab\">Articles</a></li>
            <li><a href=\"#comments\" data-toggle=\"tab\">Comments</a></li>
            <li><a href=\"#users\" data-toggle=\"tab\">Users</a></li>
        </ul>
    </div>
</div>
<div class=\"tab-content\">
    <div class=\"tab-pane fade in active adminTable\" id=\"articles\">
        {% if articles %}
        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th></th>  <!-- Actions column -->
                    </tr>
                </thead>
                {% for article in articles %}
                <tr>
                    <td><a class=\"articleTitle\" href=\"{{ path('article', { 'id': article.id }) }}\">{{ article.title }}</a></td>
                    <td>{{ article.content | truncate(60) }}</td>
                    <td>
                        <a href=\"{{ path('admin_article_edit', { 'id': article.id }) }}\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#articleDialog{{ article.id }}\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"articleDialog{{ article.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation needed</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Do you really want to delete this article ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                        <a href=\"{{ path('admin_article_delete', { 'id': article.id }) }}\" class=\"btn btn-danger\">Confirm</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                {% endfor %}
            </table>
        </div>
        {% else %}
        <div class=\"alert alert-warning\">No articles found.</div>
        {% endif %}
        <a href=\"{{ path('admin_article_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add article</button></a>
    </div>
    <div class=\"tab-pane fade adminTable\" id=\"comments\">
        <!-- Insérer ici le code de gestion des commentaires -->
        {% if comments %}
        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Author</th>
                        <th>Content</th>
                        <th></th>  <!-- Actions column -->
                    </tr>
                </thead>
                {% for comment in comments %}
                <tr>
                    <td><a class=\"articleTitle\" href=\"{{ path('article', { 'id': comment.article.id }) }}\">{{ comment.article.title }}</a></td>
                    <td>{{ comment.author.username }}</td>
                    <td>{{ comment.content | truncate(60) }}</td>
                    <td>
                        <a href=\"{{ path('admin_comment_edit', { 'id': comment.id }) }}\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#commentDialog{{ comment.id }}\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"commentDialog{{ comment.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation needed</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Do you really want to delete this comment ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                        <a href=\"{{ path('admin_comment_delete', { 'id': comment.id }) }}\" class=\"btn btn-danger\">Confirm</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                {% endfor %}
            </table>
        </div>
        {% else %}
        <div class=\"alert alert-warning\">No comments found.</div>
        {% endif %}
    </div>
    <div class=\"tab-pane fade adminTable\" id=\"users\">
        {% if users %}
        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th></th>  <!-- Actions column -->
                    </tr>
                </thead>
                {% for user in users %}
                <tr>
                    <td>{{ user.username }}</a></td>
                    <td>
                        {% if user.role == 'ROLE_ADMIN' %}
                            Admin
                        {% else %}
                            User
                        {% endif %}
                    </td>
                    <td>
                        <a href=\"{{ path('admin_user_edit', { 'id': user.id }) }}\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#userDialog{{ user.id }}\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"userDialog{{ user.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation needed</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Do you really want to delete this user ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                        <a href=\"{{ path('admin_user_delete', { 'id': user.id }) }}\" class=\"btn btn-danger\">Confirm</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                {% endfor %}
            </table>
        </div>
        {% else %}
        <div class=\"alert alert-warning\">No users found.</div>
        {% endif %}
        <a href=\"{{ path('admin_user_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add user</button></a>
    </div>
</div>
{% endblock %}
", "admin.html.twig", "C:\\Users\\HP Pavilion\\Desktop\\microCMS\\views\\admin.html.twig");
    }
}
