<?php
if (! function_exists('remove_index_from_url')) {
    /**
     * Remove index.php from url
     * 
     * @param string $url
     * 
     * @return string
     */
    function remove_index_from_url($url)
    {
        return str_replace('/index.php', '', $url);
    }
}

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