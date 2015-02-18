<?php

/* MisdGuzzleBundle:Collector:guzzle.html.twig */
class __TwigTemplate_02eec0dbad8326f3164008c6b4bef0133212270dbc79a3b0e037663d3e489542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "    <img width=\"18\" height=\"28\" alt=\"Guzzle\"
         src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAcCAYAAABsxO8nAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAAd0SU1FB9wJFA0kAmx9x5QAAAAdaVRYdENvbW1lbnQAAAAAAENyZWF0ZWQgd2l0aCBHSU1QZC5lBwAAAsRJREFUOMvdlL1vXUUQxc+ZXV/HJCSiQRRBdOHDEYVrR5Gf3vWHrMjPtHTQ5m9IRQtI/AE0NDS2sYSc5+cPCSwUKVKE5BRBKD1ShEgsEM593pmh2Wvte3kE6kxz9652f3PmzNwLvLLBdrGwsPAGyTkRaQAYACVZkUyDweDe/wJ1Op2eiGzFGEESIQSYGcwMAODup7u7u6/9J6jb7T6cmpq6XlXVdRG5TDK6u6rqM1X9xszmRGQ2pfRrVVX3qqr6dGNj4/gF0PLy8o/T09M3tre3OZ5pbW1tXVU3U0pz/X7/59XVVQ8hIMb44ebm5sP2nAAAyQsvUf02SZAc5vebqorhcHjc6/XeHQEBeK6qk2sn/zAzkEzZr5OU0klKCSml+yOglNJTd58IOjs7g6rC3U8BwMwigGMz+0VVL7fnIgCo6pOmabCysrKVWz/j7n8COBsOhx+TRIzxBAD6/f6DxcXF70h+nlLCOOiZmUFVeyTbks7bH2PEzs7OSXtpMBh80e12ZwB8NgIys6chBLg7Wq/cHdlkmBnquva8t7W3t/eRiNwv7Yj5kpsZRKQ0Ga26lBJIfk/yfQDrnU6n0zTNkxDCKKj8VEqYmSGEgJQSjo6ObuWv4CcAKyQPyk7HfPnvdqOUKyJQ1XNluYtBRC4AuFruS87srbHt8yXxG8lHAJpSfbu6KCIY96lVV8JJXnL3d0IId0miruvZc5CI/KuMcXgI4UqM8drh4eHvuaOzZWnPW0/GSyshOU4BXCwUflAq4qTs7g4RGW9AjDFWWd0PJN8rPZqZVJaIjMxTvvy6u7fz97W7r5dzdGmSNyGEF0DufiWEMJ3XjbtXpaLZcqJLv8wMMUbUdf1mVnQHwLW6rp3ktyLy6Hyi5+fnr4rIbRF5bGZ/5Z+YAJgRkbdCCGl/f//LNtnS0tJNVf3E3R8cHBx8hVc7/gEz5WHvMjpIQQAAAABJRU5ErkJggg==\"/>
    <span class=\"sf-toolbar-status";
        // line 7
        if ((10 < twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requests")))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requests")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>HTTP Requests</b>
        <span>";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requests")), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        // line 19
        echo "    <span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/misdguzzle/images/profiler/guzzle.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
    <strong>Guzzle</strong>
    <span class=\"count\">
        <span>";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requests")), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 28
    public function block_panel($context, array $blocks = array())
    {
        // line 29
        echo "    <h2>HTTP requests</h2>

    ";
        // line 31
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requests")) == 0)) {
            // line 32
            echo "        <p>
            <em>No requests sent.</em>
        </p>
    ";
        } else {
            // line 36
            echo "        <ul class=\"alt\">
            ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requests"));
            foreach ($context['_seq'] as $context["i"] => $context["request"]) {
                // line 38
                echo "                <li class=\"";
                echo ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2 == 1)) ? ("odd") : ("even"));
                echo " ";
                if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "is_error")) {
                    echo "error";
                }
                echo "\">
                    <div>
                        <a href=\"#\" onclick=\"return explain(this);\" style=\"text-decoration: none;\" title=\"Explains\"
                           data-target-id=\"explain-";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\">
                            <img alt=\"+\" src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                echo "\"
                                 style=\"display: inline;\"/>
                            <img alt=\"-\" src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                echo "\"
                                 style=\"display: none;\"/>
                        </a>
                        <code>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "message"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "time")), "html", null, true);
                echo " ms)</code>
                    </div>

                    <div id=\"explain-";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" style=\"display:none; padding-top: 1em;\">
                        <small>
                            <strong>Request:</strong>
                        </small>
                        <pre style=\"white-space: pre-wrap; white-space: -moz-pre-wrap !important; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "request"), "html", null, true);
                echo "</pre>
                        <small>
                            <strong>Response:</strong>
                        </small>
                        <pre style=\"white-space: pre-wrap; white-space: -moz-pre-wrap !important; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;\">";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "response"), "html", null, true);
                echo "</pre>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "        </ul>
    ";
        }
        // line 64
        echo "
    <script type=\"text/javascript\">//<![CDATA[
    function explain(link) {
        \"use strict\";

        var imgs = link.children,
                target = link.getAttribute('data-target-id');

        Sfjs.toggle(target, imgs[0], imgs[1]);

        return false;
    }
    //]]></script>
";
    }

    public function getTemplateName()
    {
        return "MisdGuzzleBundle:Collector:guzzle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  129 => 44,  124 => 42,  56 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  398 => 129,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  362 => 110,  360 => 109,  337 => 103,  322 => 101,  314 => 99,  305 => 95,  294 => 90,  268 => 85,  264 => 84,  252 => 80,  247 => 78,  214 => 69,  177 => 65,  169 => 60,  132 => 51,  128 => 49,  107 => 36,  254 => 92,  240 => 86,  238 => 85,  230 => 82,  221 => 77,  219 => 76,  217 => 75,  204 => 72,  171 => 64,  138 => 54,  135 => 47,  78 => 21,  71 => 17,  209 => 82,  193 => 73,  149 => 51,  133 => 42,  103 => 32,  95 => 28,  86 => 24,  57 => 11,  48 => 8,  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  457 => 153,  454 => 244,  448 => 240,  444 => 149,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  402 => 130,  400 => 214,  397 => 213,  393 => 126,  383 => 207,  376 => 205,  365 => 111,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  295 => 178,  285 => 89,  273 => 96,  205 => 108,  201 => 106,  179 => 69,  159 => 61,  93 => 28,  77 => 20,  51 => 10,  34 => 5,  31 => 4,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  199 => 67,  196 => 92,  188 => 102,  182 => 66,  173 => 65,  68 => 30,  62 => 15,  28 => 3,  357 => 123,  344 => 119,  341 => 105,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  297 => 179,  291 => 102,  263 => 95,  258 => 81,  243 => 88,  231 => 83,  224 => 71,  212 => 78,  202 => 94,  190 => 76,  187 => 70,  174 => 65,  143 => 50,  136 => 71,  122 => 43,  117 => 39,  112 => 35,  104 => 32,  85 => 25,  75 => 19,  58 => 25,  44 => 9,  161 => 63,  158 => 80,  154 => 58,  151 => 59,  140 => 55,  125 => 44,  121 => 50,  118 => 49,  100 => 39,  87 => 28,  49 => 9,  46 => 7,  27 => 3,  91 => 27,  88 => 25,  63 => 15,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 198,  363 => 126,  358 => 151,  353 => 193,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  309 => 97,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 176,  283 => 88,  281 => 114,  276 => 111,  274 => 97,  269 => 94,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  235 => 74,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 68,  189 => 71,  184 => 101,  175 => 65,  170 => 96,  166 => 95,  163 => 62,  155 => 47,  152 => 46,  144 => 49,  127 => 35,  109 => 38,  94 => 31,  82 => 22,  76 => 34,  61 => 13,  39 => 6,  36 => 5,  79 => 23,  72 => 17,  69 => 16,  54 => 10,  47 => 9,  42 => 7,  40 => 7,  37 => 10,  22 => 1,  164 => 59,  157 => 58,  145 => 74,  139 => 49,  131 => 52,  120 => 41,  115 => 39,  111 => 37,  108 => 36,  106 => 33,  101 => 32,  98 => 31,  92 => 27,  83 => 33,  80 => 21,  74 => 14,  66 => 11,  60 => 13,  55 => 24,  52 => 10,  50 => 10,  41 => 8,  32 => 4,  29 => 3,  462 => 202,  453 => 151,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 122,  380 => 206,  373 => 156,  361 => 195,  355 => 106,  351 => 192,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  312 => 98,  303 => 106,  300 => 180,  298 => 91,  289 => 113,  286 => 112,  278 => 86,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  246 => 90,  241 => 77,  233 => 87,  229 => 73,  226 => 84,  220 => 70,  216 => 79,  213 => 78,  207 => 75,  203 => 78,  200 => 72,  197 => 104,  194 => 68,  191 => 67,  185 => 74,  181 => 65,  178 => 66,  176 => 64,  172 => 64,  168 => 62,  165 => 83,  162 => 59,  156 => 62,  153 => 77,  150 => 54,  147 => 58,  141 => 48,  134 => 54,  130 => 41,  123 => 61,  119 => 42,  116 => 41,  113 => 48,  105 => 37,  102 => 36,  99 => 31,  96 => 32,  90 => 29,  84 => 40,  81 => 23,  73 => 20,  70 => 19,  67 => 18,  64 => 14,  59 => 14,  53 => 12,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
