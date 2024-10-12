<?php

if (! function_exists('os_date')) {
    /**
     * Replace OstiumDate object creation into callable function
     * 
     * @return \OstiumDate
     */
    function os_date()
    {
        return new \OstiumDate();
    }
}

if (! function_exists('wp')) {
    /**
     * A shortcut to WpAdapter
     * 
     * @return \WpAdapter
     */
    function wp()
    {
        return new \WpAdapter(env('wordpress_url'));
    }
}