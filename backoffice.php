<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Gets all widget options, or only options for a specified widget if a widget id is provided.
 *
 * @param string $widget_id Optional. If provided, will only get options for that widget.
 * @return array An associative array
 */
public static function get_dashboard_widget_options( $widget_id='' )
{
    //Fetch ALL dashboard widget options from the db...
    $opts = get_option( 'dashboard_widget_options' );

    //If no widget is specified, return everything
    if ( empty( $widget_id ) )
        return $opts;

    //If we request a widget and it exists, return it
    if ( isset( $opts[$widget_id] ) )
        return $opts[$widget_id];

    //Something went wrong...
    return false;
}



?>