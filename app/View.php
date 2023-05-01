<?php


namespace app;


class View implements \Countable, \ArrayAccess
{
    protected $data = [];

    public function __get($name){
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function render($template){
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;

    }


    /**
     * @inheritDoc
     */
    public function count()
    {
       return count($this->data);
    }

    /**
     * @inheritDoc
     */
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    /**
     * @inheritDoc
     */
    public function offsetGet($offset)
    {
        return $this->data[$offset] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }
}