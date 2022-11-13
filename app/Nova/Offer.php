<?php

namespace App\Nova;

use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Offer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Offer::class;

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

            Text::make('Coupon Code Title', 'coupon_title')
                ->rules('required'),

            Text::make('Coupon Code', 'coupon_code')
                ->rules('required'),

            Select::make('Coupon Code Type', 'coupon_type')->options([
                'percentage' => 'Percentage',
                'flat_rate'  => 'Fixed Amount',
            ])->rules('required')->displayUsing(function ($name) {
                if ($name == 'percentage')
                    return 'Percentage';
                else
                    return 'USD';
            }),

            NovaDependencyContainer::make([
                Number::make('Amount', 'flat_rate')
                    ->sortable()
            ])->dependsOn('coupon_type', 'flat_rate')->showOnIndex(),

            NovaDependencyContainer::make([
                Number::make('Percent', 'percentage')
                    ->sortable()
            ])->dependsOn('coupon_type', 'percentage')->showOnIndex(),


            DateTime::make('From Date', 'available_from')
                ->rules('required')
                ->format('MM/DD/YYYY HH:mm'),

            DateTime::make('Valid Until', 'available_to')
                ->rules('required')
                ->format('MM/DD/YYYY HH:mm')
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
}
