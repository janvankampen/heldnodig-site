<?php

/**
 * Value type wrapping validation logic for zipcode.
 */
class Zipcode {
    public static $ZipcodeValidationRegex = '/^[0-9]{4}[a-zA-Z]{2}$/';
    var $code;

    public function __ctor($code) {
        // Disabled for now, don't want to cause a 'merge' conflict with upcoming validation changes yet.
        // if(!self::IsValid($code)){
        //     throw new InvalidArgumentException('Code should be 4 numbers + 2 letters!');
        // }
        $this->code = $code;
    }

    public function getCode(){
        return $this->code;
    }

    /**
     * Mere stub, Wether this should really belong here can be questioned. But wanted to
     * prevent HeldNodig becoming even an bigger monolith.
     */
    public static function ToCity(){
        return null;
    }

    public static function IsValid($code) {
        if(!is_string($code)) return false;
        return preg_match(self::$ZipcodeValidationRegex, $code);
    }
}