<?php

namespace App\Nova;

use App\Nova\Actions\SubscriptionActivate;
use App\Nova\Actions\SubscriptionDeactivate;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Subscription extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Subscription::class;

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

            Text::make('Status')
                ->readonly(),

            Number::make('Price')
                ->readonly(),

            Date::make('Trial ends', 'trial_ends_at')
                ->readonly(),

            Date::make('Subscriptions ends', 'ends_at')
                ->readonly(),

            BelongsTo::make('Customer', 'customer', 'App\Nova\Customer')
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
        return [
            (new SubscriptionDeactivate())
                ->confirmText('Are you sure you want to deactivate this customer subscription?')
                ->confirmButtonText('Deactivate')
                ->cancelButtonText("Cancel"),

            (new SubscriptionActivate())
                ->confirmText('Are you sure you want to activate this customer subscription?')
                ->confirmButtonText('Activate')
                ->cancelButtonText("Cancel"),
        ];
    }

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }
}
