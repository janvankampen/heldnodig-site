<?php

/**
 * Value type wrapping validation logic for zipcode.
 */
class Zipcode
{
    public CONST NL_ZIP_VALIDATION_REGEX = '/^[0-9]{4}[a-zA-Z]{2}$/';
    private $code;

    public function __construct(string $code)
    {
        // Disabled for now, don't want to cause a 'merge' conflict with upcoming validation changes yet.
        // if(!self::IsValid($code)){
        //     throw new InvalidArgumentException('Code should be 4 numbers + 2 letters!');
        // }
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    /**
     * Mere stub, Wether this should really belong here can be questioned. But wanted to
     * prevent HeldNodig becoming even an bigger monolith.
     */
    public function toCity()
    {
        return null;
    }

    /**
     * @param string The string to validate
     * @return bool True if a valid format like 1234AB
     */
    public static function isValid(string $code)
    {
        if (!is_string($code)) {
            return false;
        }
        return preg_match(self::NL_ZIP_VALIDATION_REGEX, $code);
    }
}
