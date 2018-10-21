<?php

/**
 * @author DevMcC <sinbox.c@gmail.com>
 *
 * @param mixed $if
 * @param mixed $add
 * @param bool $sanitize
 *
 * @return string
 */
function __runIfAdd($if, $add, bool $sanitize = true)
{
    if (!$if) {
        return '';
    }

    return $sanitize ? e($add) : $add;
}
