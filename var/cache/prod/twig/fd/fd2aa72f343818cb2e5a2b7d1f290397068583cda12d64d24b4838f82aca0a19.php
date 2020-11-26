<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @admin/Setting/Shop/payment_edit.twig */
class __TwigTemplate_7ace006ecd339e2f107bebf603a9ea3eddb151d469d9b500ff1815f873edc214 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_payment"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/payment_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment_setting"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload-ui.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
";
    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/vendor/jquery.ui.widget.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.iframe-transport.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-process.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-validate.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>var bootstrapTooltip = \$.fn.tooltip.noConflict();</script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$.fn.tooltip = bootstrapTooltip;
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });

        \$(function() {
            var hideThumbnail = function() {
                if (\$('#thumb div').length > 0) {
                    \$('#icon_no_image').css('display', 'none');
                } else {
                    \$('#icon_no_image').css('display', '');
                }
            };

            var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' +
                '<a class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>' +
                '</div>';
            var payment_image = \$('#";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "').val();
            if (payment_image != '') {
                var filename = \$('#";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "').val();
                if (payment_image == '";
        // line 55
        echo twig_escape_filter($this->env, ($context["oldPaymentImage"] ?? null), "html", null, true);
        echo "') {
                    var path = '";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "save_image"), "html", null, true);
        echo "' + filename;
                } else {
                    var path = '";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "temp_image"), "html", null, true);
        echo "' + filename;
                }
                var \$img = \$(proto_img.replace(/__path__/g, path));
                \$('#";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "').val(filename);

                \$('#thumb').append(\$img);
                hideThumbnail();
            }
            hideThumbnail();

            \$('#";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image_file", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        echo "').fileupload({
                url: \"";
        // line 69
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_payment_image_add");
        echo "\",
                type: 'post',
                dataType: 'json',
                dropZone: \$('#upload-zone'),
                done: function(e, data) {
                    \$('.progress').hide();
                    var path = '";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "temp_image"), "html", null, true);
        echo "/' + data.result.filename;
                    var \$img = \$(proto_img.replace(/__path__/g, path));
                    \$('#";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
        echo "').val(data.result.filename);

                    \$('#thumb').append(\$img);
                    hideThumbnail();
                },
                fail: function(e, data) {
                    alert('";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "');
                },
                always: function(e, data) {
                    \$('.progress').hide();
                    \$('.progress .progress-bar').width('0%');
                },
                start: function(e, data) {
                    if (\$('.c-form__fileUploadThumbnail').length >= 1) {
                        \$.each(\$('.delete-image'), function(index, delete_image) {
                            delete_image.click();
                        });
                    }
                    \$('.progress').show();
                    \$('#thumb').find('div').remove();
                    \$('#";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97), "html", null, true);
        echo "').val('');
                },
                acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
                maxFileSize: 10000000,
                maxNumberOfFiles: 1,
                progressall: function(e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$('.progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                processalways: function(e, data) {
                    if (data.files.error) {
                        alert(\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                    }
                }
            });

            \$('#thumb').on('click', '.delete-image', function() {
                \$('#";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117), "html", null, true);
        echo "').val('');
                var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
                \$(thumbnail).remove();
                hideThumbnail();
            });

            // 画像アップロード
            \$('#file_upload').on('click', function() {
                \$('#";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image_file", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125), "html", null, true);
        echo "').click();
            });
        });
    </script>
";
    }

    // line 131
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "    <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" enctype=\"multipart/form-data\">
        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 133), 'widget');
        echo "
        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fixed", [], "any", false, false, false, 134), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.payment_name"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "method", [], "any", false, false, false, 144), 'widget');
        echo "
                                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "method", [], "any", false, false, false, 145), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "charge", [], "any", false, false, false, 151), 'widget');
        echo "
                                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "charge", [], "any", false, false, false, 152), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.terms_of_use"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-4\">
                                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rule_min", [], "any", false, false, false, 160), 'widget');
        echo "
                                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rule_min", [], "any", false, false, false, 161), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto text-center p-0\"><span class=\"align-middle\">";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                        <div class=\"col-4\">
                                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rule_max", [], "any", false, false, false, 165), 'widget');
        echo "
                                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rule_max", [], "any", false, false, false, 166), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.payment.logo_image"), "html", null, true);
        echo "\">
                                        <span>";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.logo_image"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        <br>";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.logo_image_size"), "html", null, true);
        echo "
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    <div class=\"progress\" style=\"display: none;\">
                                        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
                                    ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, false, 184), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                                    <div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
                                        <div class=\"media-body\">
                                            <i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
                                            ";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "
                                            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image_file", [], "any", false, false, false, 189), 'widget', ["attr" => ["accept" => "image/*", "style" => "display:none;"]]);
        echo "
                                            ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payment_image", [], "any", false, false, false, 190), 'errors');
        echo "
                                            <a class=\"btn btn-ec-regular mr-2\" onclick=\"\$('#payment_register_payment_image_file').click()\">
                                                ";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "
                                            </a>
                                        </div><!-- /.media-body -->
                                    </div><!-- /.media -->
                                </div>
                            </div>
                            ";
        // line 199
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 199), "eccube_form_options", [], "any", false, false, false, 199), "auto_render", [], "any", false, false, false, 199)) {
                // line 200
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 200), "eccube_form_options", [], "any", false, false, false, 200), "form_theme", [], "any", false, false, false, 200)) {
                    // line 201
                    echo "                                    ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 201), "eccube_form_options", [], "any", false, false, false, 201), "form_theme", [], "any", false, false, false, 201)], true);
                    // line 202
                    echo "                                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                ";
                } else {
                    // line 204
                    echo "                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>";
                    // line 205
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 205), "label", [], "any", false, false, false, 205)), "html", null, true);
                    echo "</span></div>
                                        <div class=\"col mb-2\">
                                            ";
                    // line 207
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                            ";
                    // line 208
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                        </div>
                                    </div>
                                ";
                }
                // line 212
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                        </div><!-- /.box-body -->
                    </div>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 223
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 231), 'widget');
        echo "
                                ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 232), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/payment_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 235,  469 => 232,  465 => 231,  455 => 224,  451 => 223,  439 => 213,  432 => 212,  425 => 208,  421 => 207,  416 => 205,  413 => 204,  407 => 202,  404 => 201,  401 => 200,  395 => 199,  386 => 192,  381 => 190,  377 => 189,  373 => 188,  366 => 184,  355 => 176,  351 => 175,  347 => 174,  336 => 166,  332 => 165,  327 => 163,  322 => 161,  318 => 160,  311 => 156,  304 => 152,  300 => 151,  295 => 149,  288 => 145,  284 => 144,  279 => 142,  273 => 139,  265 => 134,  261 => 133,  258 => 132,  254 => 131,  245 => 125,  234 => 117,  225 => 111,  208 => 97,  191 => 83,  182 => 77,  177 => 75,  168 => 69,  164 => 68,  154 => 61,  148 => 58,  143 => 56,  139 => 55,  135 => 54,  130 => 52,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  89 => 27,  85 => 26,  78 => 22,  73 => 21,  69 => 20,  62 => 16,  55 => 15,  50 => 11,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/payment_edit.twig", "/var/www/ec.zapto/src/Eccube/Resource/template/admin/Setting/Shop/payment_edit.twig");
    }
}
