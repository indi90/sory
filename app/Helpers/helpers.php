<?php

/**
 * Check whether current url is match with given url
 *
 * @param $url
 * @param string $active
 * @param string $disactive
 * @return string
 */
function is_active($url, $active = 'active', $disactive = '')
{
    return strpos(request()->url(), $url) !== false ? $active : $disactive;
}

/**
 * Get current authed user
 *
 * @return mixed
 */
function user()
{
    return auth()->user();
}