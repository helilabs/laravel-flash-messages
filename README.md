#Flash Messages Class Helper
This a helper class to add flash messages functionality to laravel

### What are flash messages?
Flash Messages are ordinary messages that can be available for 1 request only per user

### Why bother?
yii has a great flash functionality but laravel hasn't, so i tried to look for a flash library for laravel and i ended up using [laracasts flash library](https://github.com/laracasts/flash). When I used it i found a little problem. YOU CANNOT CREATE TWO FLASH MESSAGES for one request for example if you want to send an info flsh message to user and another success flash message in the same time simply you can't cause the library will overrid the first one.

### Installation
* in your `composer file` add
```
"helilabs/laravel-flash-messages" : "0.1.0"
```
* open config/app.php and add the following 
    * in `providers` add `'Helilabs\FlashMessages\FlashMessagesServiceProvider'`
    * in `aliases` add `'Flash' => 'Helilabs\FlashMessages\FlashMessagesFacade'`

### Usage
to set a new flash message use;
```php
Flash::setType('info|success|warning|danger')->setMessage('Message Here')->create();
```

to get all flash messages use `{{ Flash::get() }}`