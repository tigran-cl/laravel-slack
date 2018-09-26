<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Slack Webhook URL
    |--------------------------------------------------------------------------
    |
    | Incoming Webhooks are a simple way to post messages from external sources
    | into Slack. You can read more about it and how to create yours
    | here: https://api.slack.com/incoming-webhooks
    |
    | Add channels to this array that you'll pass in as the recipient in the Slack::to($recipient) function.
    | ex. #bostonlogger => env(BOSTONLOGGER_WEBHOOK_URL, '')
    |
    */

    'slack_webhook_urls' => [],

    /*
    |--------------------------------------------------------------------------
    | Default Channel
    |--------------------------------------------------------------------------
    |
    | If no recipient is specified the message will delivered to this channel.
    | You can set a default user by using '@' instead of '#'
    |
    */

    'default_channel' => '#general',

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | The username that this integration will post as.
    | Leave null to use Slack's default.
    |
    */

    'application_name' => env('APP_NAME', null),

    /*
    |--------------------------------------------------------------------------
    | Application Image
    |--------------------------------------------------------------------------
    |
    | The user image that is used for messages from this integration.
    | Leave null to use Slack's default.
    | It should be a valid URL.
    |
    */

    'application_image' => null,

];
