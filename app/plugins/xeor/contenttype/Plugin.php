<?php namespace Xeor\ContentType;

use Event;
use Response;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'xeor.contenttype::lang.plugin.name',
            'description' => 'xeor.contenttype::lang.plugin.description',
            'author' => 'Sozonov Alexey',
            'icon' => 'icon-file-code-o'
        ];
    }

    public function boot()
    {
        Event::listen('backend.form.extendFields', function ($formWidget) {
            if ($formWidget->model instanceof \Cms\Classes\Page) {
                $formWidget->addFields(
                    [
                        'settings[contentType]' => [
                            'tab' => 'xeor.contenttype::lang.settings.tab',
                            'type' => 'dropdown',
                            'default' => 'html',
                            'options' => [
                                'html' => 'html',
                                'json' => 'json',
                                'xml' => 'xml',
                                'txt' => 'text',
                                'pdf' => 'pdf',
                                'js' => 'javascript',
                                'css' => 'css',
                            ],
                            'span' => 'left',
                            'comment' => 'xeor.contenttype::lang.settings.content_type_comment'
                        ],
                        'settings[customContentType]' => [
                            'tab' => 'xeor.contenttype::lang.settings.tab',
                            'placeholder' => 'xeor.contenttype::lang.settings.custom_content_type_placeholder',
                            'span' => 'right',
                            'comment' => 'xeor.contenttype::lang.settings.custom_content_type_comment',
                        ],
                    ],
                    'primary'
                );
            }
        });

        Event::listen('cms.page.display', function ($controller, $url, $page, $result) {

            if (!is_string($result))
                return $result;

            $type = null;
            $headers = [];
            $types = array(
                'html' => 'text/html',
                'json' => 'application/json',
                'css' => 'text/css',
                'js' => 'application/javascript',
                'pdf' => 'application/pdf',
                'txt' => 'text/plain',
                'xml' => 'application/xml'
            );

            $statusCode = 200;
            if (!$page)
                $statusCode = 404;

            if (isset($page->settings['contentType']) && !empty($page->settings['contentType']))
                $type = $types[$page->settings['contentType']];

            if (isset($page->settings['customContentType']) && !empty($page->settings['customContentType']))
                $type = $page->settings['customContentType'];

            if (!is_null($type))
                $headers = ['Content-Type' => $type];

            return Response::make($result, $statusCode, $headers);

        });
    }

}