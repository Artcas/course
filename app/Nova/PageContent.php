<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaFlexibleContent\Flexible;

class PageContent extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\PageContent::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Meta Keywords', 'meta_title')
                ->rules('required'),

            Textarea::make('Meta Description')
                ->rules('required'),

            Text::make('Page Title')
                ->rules('required'),


            Flexible::make('Content')
                ->addLayout('Top Section Content', 'wysiwyg', [
                    Text::make('Title'),
                    Markdown::make('Content'),
                    Text::make('Button Text'),
                    Text::make('Button Url'),
                    Image::make('Left Image')
                ])
                ->addLayout('Box with Icon', 'box_with_icon', [
                    Text::make('Box 1 green title'),
                    Text::make('Box 1 number'),
                    Text::make('Box 1 small text'),
                    Image::make('Box 1 icon'),
                    Text::make('Box 2 green title'),
                    Text::make('Box 2 number'),
                    Text::make('Box 2 small text'),
                    Image::make('Box 2 icon'),
                    Text::make('Box 3 green title'),
                    Text::make('Box 3 number'),
                    Text::make('Box 3 small text'),
                    Image::make('Box 3 icon'),
                ])
                ->addLayout('Testimonials', 'testimonials', [
                    Text::make('Green Title'),

                    Image::make('Icon 1'),
                    Text::make('title 1'),
                    Textarea::make('Description 1'),
                    Image::make('Icon 2'),
                    Text::make('title 2'),
                    Textarea::make('Description 2'),
                    Image::make('Icon 3'),
                    Text::make('title 3'),
                    Textarea::make('Description 3'),
                    Image::make('Icon 4'),
                    Text::make('title 4'),
                    Textarea::make('Description 4'),
                    Image::make('Icon 5'),
                    Text::make('title 5'),
                    Textarea::make('Description 5'),
                    Image::make('Icon 6'),
                    Text::make('title 6'),
                    Textarea::make('Description 6'),
                ])
                ->addLayout('Shop Section', 'shop_section', [
                    Text::make('Title'),
                    Image::make('Left Image'),
                    Flexible::make('Laptop Slider', 'laptop-slider')
                        ->addLayout('Slider', 'laptop-slider-content', [
                            Image::make('Slider Image'),
                            Text::make('Subtitle'),
                            Textarea::make('Content'),
                        ]),
                    //
                    Text::make('Green Title'),
                    Text::make('Gray Subtitle'),

                    //
                    Text::make('Price Left Box Title 1'),
                    Text::make('Price Left Box Title 2'),
                    KeyValue::make('Price Left Box Points'),
                    Text::make('Price Middle Box Title'),
                    KeyValue::make('Price Middle Box Points'),
                    Text::make('Price Right Box Title 1'),
                    Text::make('Price Right Box Title 2'),
                    KeyValue::make('Price Right Box Points'),
                    Text::make('Price Button Text'),
                    Text::make('Price Button Url')
                ])

                ->addLayout('Feedback', 'feedback', [
                    Text::make('Feedback Green title'),
                    Text::make('Feedback Icon title'),
                    Textarea::make('Feedback text'),
                    Text::make('Blue title'),
                    Text::make('Button text'),
                    Text::make('Button Url')
                ])
                ->addLayout('Footer Social', 'footer_social', [
                    Text::make('Social text'),
                    Text::make('Snapchat Url'),
                    Text::make('Twitter Url'),
                    Text::make('Youtube Url'),
                    Text::make('Instagram Url')
                ])

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    public static $displayInNavigation = true;


}
