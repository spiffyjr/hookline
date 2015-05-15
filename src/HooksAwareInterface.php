<?php
namespace Hookline;

interface HooksAwareInterface
{
    /**
     * @return HookContainer
     */
    public function hooks();
}
