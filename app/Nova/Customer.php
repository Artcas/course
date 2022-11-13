<?php

namespace App\Nova;

use App\Nova\Actions\AccountActivate;
use App\Nova\Actions\AccountSuspension;
use App\Nova\Actions\SubscriptionDeactivate;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Customer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Customer::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'first_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'first_name', 'last_name', 'email'
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

            Boolean::make('Is Active')
            ->sortable(),

            Text::make('First Name')
                ->sortable()
                ->required(),

            Text::make('Last Name')
                ->sortable()
                ->required(),

            Text::make('Email')
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:customers,email')
                ->updateRules('unique:customers,email,{{resourceId}}'),


            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),

            HasMany::make('Invoices', 'invoices', 'App\Nova\Invoice'),

            HasOne::make('Subscription', 'subscription', 'App\Nova\Subscription')
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
            (new AccountSuspension())
                ->confirmText('Are you sure you want to deactivate this customer?')
                ->confirmButtonText('Deactivate')
                ->cancelButtonText("Cancel"),

            (new AccountActivate())
                ->confirmText('Are you sure you want to activate this customer?')
                ->confirmButtonText('Activate')
                ->cancelButtonText("Cancel"),
        ];
    }

}
