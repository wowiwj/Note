<?php
namespace App\Helpers\Traits;
use App\Models\Subscription;

trait Subscribable
{

    public function subscribe($userId = null){

        $this->subscriptions()->firstOrCreate([
            'user_id' => $userId ?: auth()->id()
        ]);
    }

    public function unsubscribe($userId = null){

        $this->subscriptions()
            ->where('user_id',$userId ?: auth()->id())
            ->delete();

    }

    /**
     * Determine if the current type has been subscribed.
     *
     * @return boolean
     */
    public function isSubscribed()
    {
        return !! $this->subscriptions()->where('user_id', auth()->id())->count();
    }

    /**
     * Fetch the subscribe status as a property.
     *
     * @return bool
     */
    public function getIsSubscribedAttribute()
    {
        return $this->subscriptions()->where('user_id', auth()->id())->exists();
    }

    /**
     * Get the number of subscriptions for the reply.
     *
     * @return integer
     */
    public function getSubscriptionsCountAttribute()
    {
        return $this->subscriptions()->count();
    }


    public function subscriptions(){

        return $this->morphMany(Subscription::class,'subscribable');
    }

}