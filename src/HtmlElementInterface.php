<?php

namespace Neutron\Html;


interface HtmlElementInterface
{
    /**
     * @return string
     */
    public function getHtml();

    /**
     * Reset data
     */
    public function clear();
}