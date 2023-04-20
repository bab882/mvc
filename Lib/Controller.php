<?php

/**
 * Load model and vue
 */

class Controller
{
    // Load model
    public function model($model)
    {
        // Require model file
        require_once MODEL . $model . '.php';

        // Instantiate model
        return new $model();
    }

    // Load view
    public function view($view, $data = [])
    {
        // Check for view file
        if (file_exists(VUE . $view . '.php')) {
            require_once VUE . $view . '.php';
        } else {
            // View does not exist
            die('View does not exist');
        }
    }
}