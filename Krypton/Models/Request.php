<?php
namespace Krypton\Models;

class Request implements \JsonSerializable
{
    private $HTTPMethod;
    private $Path;
    /**
     * @return mixed
     */
    public function getHTTPMethod()
    {
        return $this->HTTPMethod;
    }

    /**
     * @param mixed $HTTPMethod
     */
    public function setHTTPMethod($HTTPMethod)
    {
        $this->HTTPMethod = $HTTPMethod;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->Path;
    }

    /**
     * @param mixed $Path
     */
    public function setPath($Path)
    {
        $this->Path = $Path;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}

