<?php

namespace App\Observers;

use App\Models\user;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Nova;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function created(user $user)
    {
        Nova::whenServing(function (NovaRequest $request) use ($user) {
            $params = [
                'process_name'  => __('tracking.user_created'),
                'data'          => $request->only('first_name', 'last_name','email'),
                'type'          => 'Create',
                'model_name'    => 'App\Models\User',
                'model_id'      => $user->id,
                'causer_name'   => $request->user()->name,
                'causer_role'   => 'Admin',
                'ip_address'    => $request->ip()
            ];
            dispatch(new \App\Jobs\Tracking\TrackingLog($params));
        });
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function updated(user $user)
    {
        Nova::whenServing(function (NovaRequest $request) use ($user) {
            $data = [
                'Old Value' => [],
                'New Value' => []
            ];
            if(count($user->getDirty()) > 0)
                foreach($user->getDirty() as $key => $value){
                    if($key != 'updated_at') {
                        $data['Old Value'][$key] = $user->getOriginal($key);
                        $data['New Value'][$key] = $user[$key];
                    }
                }

            $data['Old Value'] = json_encode($data['Old Value']);
            $data['New Value'] = json_encode($data['New Value']);


            $params = [
                'process_name'  => __('tracking.user_updated'),
                'data'          => $data,
                'type'          => 'Update',
                'model_name'    => 'App\Models\User',
                'model_id'      => $user->id,
                'causer_name'   => $request->user()->name,
                'causer_role'   => 'Admin',
                'ip_address'    => $request->ip()
            ];
            dispatch(new \App\Jobs\Tracking\TrackingLog($params));
        });
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function deleted(user $user)
    {
        Nova::whenServing(function (NovaRequest $request) use ($user) {

            $params = [
                'process_name'  => __('tracking.user_deleted'),
                'data'          => null,
                'type'          => 'Delete',
                'model_name'    => 'App\Models\User',
                'model_id'      => $user->id,
                'causer_name'   => $request->user()->name,
                'causer_role'   => 'Admin',
                'ip_address'    => $request->ip()
            ];
            dispatch(new \App\Jobs\Tracking\TrackingLog($params));
        });
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function restored(user $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function forceDeleted(user $user)
    {
        //
    }
}
