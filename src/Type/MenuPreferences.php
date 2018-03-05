<?php

namespace JouwWeb\DocData\Type;


class MenuPreferences extends AbstractObject
{
    /**
     * The id of the CSS file that should be used in the payment menu.
     *
     * @var mixed
     */
    protected $css;

    /**
     * @param mixed $css
     */
    public function setCss($css)
    {
        $this->css = $css;
    }

    /**
     * @return mixed
     */
    public function getCss()
    {
        return $this->css;
    }
}
