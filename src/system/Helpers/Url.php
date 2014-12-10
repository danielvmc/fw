<?php namespace System\Helpers;

/**
 * Url Helper
 *
 * @author Huynh Minh Tu
 * @version 1.0
 * @date November 17 - 2014
 */

class Url
{
    /**
     * Redirect to chosen url
     * @param  string  $url
     * @param  boolean $fullPath
     * @return mixed
     */
    public static function redirect($url = null, $fullPath = false)
    {
        if (fullPath == false) {
            $url = DIR . $url;
        }

        header('Location: '.$url);
        exit;
    }

    /**
     * Get the template path
     * @return mixed
     */
    public static function getTemplatePath()
    {
        return DIR.'src/app/Templates/'.Session::get('template').'/';
    }

    public static function autoLink($text, $custom = null)
    {
        $regex   = '@(http)?(s)?(://)?(([-\w]+\.)+([^\s]+)+[^,.\s])@';
        $replace = '';

        if ($custom === null) {
            $replace = '<a href="http$2://$4">$1$2$3$4</a>';
        } else {
            $replace = '<a href="http$2://$4">'.$custom.'</a>';
        }

        return preg_replace($regex, $replace, $text);
    }

    public static function generateSafeSlug($slug)
    {
        // transform url
        $slug = preg_replace('/[^a-zA-Z0-9]/', '-', $slug);
        $slug = strtolower($slug);

        //Removing more than one dashes
        $slug = preg_replace('/\-{2,}/', '-', $slug);

        return $slug;
    }

    public static function previous()
    {
        header('Location: '.$_SERVER['HTTP_REFERER']);
        exit;
    }
}
