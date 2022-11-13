<?php

namespace App\Observers;

use App\Models\Offer;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Nova;

class OfferObserver
{
    /**
     * Handle the Offer "created" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function created(Offer $offer)
    {
        Nova::whenServing(function (NovaRequest $request) use ($offer) {
            $params = [
                'process_name'  => __('tracking.user_created'),
                'data'          => $request->only('first_name', 'last_name','email'),
                'type'          => 'Create',
                'model_name'    => 'App\Models\Offer',
                'model_id'      => $offer->id,
                'causer_name'   => $request->user()->name,
                'causer_role'   => 'Admin',
                'ip_address'    => $request->ip()
            ];
            dispatch(new \App\Jobs\Tracking\TrackingLog($params));
        });
    }

    /**
     * Handle the Offer "updated" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function updated(Offer $offer)
    {
        Nova::whenServing(function (NovaRequest $request) use ($offer) {
            $data = [
                'Old Value' => [],
                'New Value' => []
            ];
            if(count($offer->getDirty()) > 0)
                foreach($offer->getDirty() as $key => $value){
                    if($key != 'updated_at') {
                        $data['Old Value'][$key] = $offer->getOriginal($key);
                        $data['New Value'][$key] = $offer[$key];
                    }
                }

            $data['Old Value'] = json_encode($data['Old Value']);
            $data['New Value'] = json_encode($data['New Value']);


            $params = [
                'process_name'  => __('tracking.user_updated'),
                'data'          => $data,
                'type'          => 'Update',
                'model_name'    => 'App\Models\Offer',
                'model_id'      => $offer->id,
                'causer_name'   => $request->user()->name,
                'causer_role'   => 'Admin',
                'ip_address'    => $request->ip()
            ];
            dispatch(new \App\Jobs\Tracking\TrackingLog($params));
        });
    }

    /**
     * Handle the Offer "deleted" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function deleted(Offer $offer)
    {
        Nova::whenServing(function (NovaRequest $request) use ($offer) {

            $params = [
                'process_name'  => __('tracking.user_deleted'),
                'data'          => null,
                'type'          => 'Delete',
                'model_name'    => 'App\Models\Offer',
                'model_id'      => $offer->id,
                'causer_name'   => $request->user()->name,
                'causer_role'   => 'Admin',
                'ip_address'    => $request->ip()
            ];
            dispatch(new \App\Jobs\Tracking\TrackingLog($params));
        });
    }

    /**
     * Handle the Offer "restored" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function restored(Offer $offer)
    {
        //
    }

    /**
     * Handle the Offer "force deleted" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function forceDeleted(Offer $offer)
    {
        //
    }
}
