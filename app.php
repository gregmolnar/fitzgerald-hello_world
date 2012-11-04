<?php
    // See the accompanying README for how to use Fitzgerald!

    include('lib/fitzgerald.php');

    class Application extends Fitzgerald {
        // Define your controller methods, remembering to return a value for the browser!
        public function get_index()
        {
        	$this->render('index', array('name' => 'Greg'));
        }
    }

    $app = new Application();

    // Define your url mappings. Take advantage of placeholders and regexes for safety.
    $app->get('/', 'get_index');

    $app->run();
?>