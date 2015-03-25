<?php
class Notification
{
    // public $internal = ["direction", "params", "internal"];

    public $position = [ "v" => "top", "h" => "right"];
    public $showClose = true;
    public $timeout = 5000;
    public $style = "circle";
    public $title = null;
    public $thumbnail = null;
    public $message, $type;

    public function __construct(Array $data)
    {
        foreach($data as $attribute => $value){
            if(property_exists($this, $attributes))
                $this->{$attribute} = $value;
        }
        self::attNotifications($this);
    }

    public function __get($attribute)
    {
        if ($attribute == "message") {
            if(is_null($this->params))
                return Lang::get($this->$attribute);
            else
                return Lang::get($this->$attribute, $this->params);
        }
        else
            return $this->$attribute;

    }

    private static function attNotifications(Notification $notification)
    {
        if(Session::has("notifications")){
            Session::flash("notifications",array_add(Session::get("notifications"), $notification));
        }else{
            Session::flash("notifications", [$notification]);
        }
    }

    // public function toJson(){
    //     if(!is_string($position)){
    //         $this->position = $this->direction["v"]."-".$this->direction["h"];
    //     }

    //     foreach ((array) $this as $attribute => $value){
    //         if(is_null($value || in_array($this->internal) ) ){
    //             unset($this->{$attribute});
    //         }
    //     }

    //     foreach ($this->internal as $field) {
    //         unset($this->{$field});
    //     }


    //     return json_encode($this);
    // }

    // public getNotification(){
    //     $attributes = $this;
    //    foreach ($attributes as $attribute => $value){
    //         if(is_null($value || in_array($this->internal) ) ){
    //             unset($attributes->{$attribute});
    //         }
    //     }
    // }

}
