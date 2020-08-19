<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use LaravelFCM\Message\Exceptions\InvalidOptionsException;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Facades\FCM;

class Notification extends Model
{
    use SoftDeletes;
    protected $fillable =
        [
            'user_id',
            'order_id'
        ];
    protected $dates = ['deleted_at'];

    public function scopeToSingleDevice($query, $token = null, $title = null, $body = null, $icon, $click_action)
    {
        $optionBuilder = new OptionsBuilder();
        try {
            $optionBuilder->setTimeToLive(60 * 20);
        } catch (InvalidOptionsException $e) {
            alert($e);
        }

        $notificationBuilder = new PayloadNotificationBuilder($title);
        $notificationBuilder->setBody($body)
            ->setSound('default')
            ->setBadge($this->where('read_at', null)->count())
            ->setIcon($icon)
            ->setClickAction($click_action);

        $dataBuilder = new PayloadDataBuilder();

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        $tokens = $token;

        $downstreamResponse = FCM::sendTo($tokens, $option, $notification, $data);

        $downstreamResponse->numberSuccess();
        $downstreamResponse->numberFailure();
        $downstreamResponse->numberModification();

// return Array - you must remove all this tokens in your database
        $downstreamResponse->tokensToDelete();

// return Array (key : oldToken, value : new token - you must change the token in your database)
        $downstreamResponse->tokensToModify();

// return Array - you should try to resend the message to the tokens in the array
        $downstreamResponse->tokensToRetry();

// return Array (key:token, value:error) - in production you should remove from your database the tokens
        $downstreamResponse->tokensWithError();
    }

    public function scopeToMultiDevice($query, $model, $title = null, $body = null, $icon, $click_action)
    {
        $optionBuilder = new OptionsBuilder();
        try {
            $optionBuilder->setTimeToLive(60 * 20);
        } catch (InvalidOptionsException $e) {
            alert($e);
        }

        $notificationBuilder = new PayloadNotificationBuilder($title);
        $notificationBuilder->setBody($body)
            ->setSound('default')
            ->setBadge($this->where('read_at', null)->count())
            ->setIcon($icon)
            ->setClickAction($click_action);

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData(['badge' => $this->where('read_at', null)->count()]);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

// You must change it to get your tokens
        $tokens = $model->pluck('device_token')->toArray();
//        dd($data);

        $downstreamResponse = FCM::sendTo($tokens, $option, $notification, $data);

        $downstreamResponse->numberSuccess();
        $downstreamResponse->numberFailure();
        $downstreamResponse->numberModification();

// return Array - you must remove all this tokens in your database
        $downstreamResponse->tokensToDelete();

// return Array (key : oldToken, value : new token - you must change the token in your database)
        $downstreamResponse->tokensToModify();

// return Array - you should try to resend the message to the tokens in the array
        $downstreamResponse->tokensToRetry();

// return Array (key:token, value:error) - in production you should remove from your database the tokens present in this array
        $downstreamResponse->tokensWithError();
    }

    public function scopeRead($query)
    {
        return $this->where('read_at', null)->get();
    }

    public function scopeNumberAlert()
    {
        return $this->where('read_at', null)->count();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'order_id');
    }
}
