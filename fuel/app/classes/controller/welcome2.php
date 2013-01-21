<?php

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 * 
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{

	public function action_index3()
    {
        $data = array(
            'test' => array(
                'test_1' => 100,
                'test_2' => 200
            )
        ); 
        foreach ($data['test'] as $key => $val) 
        { 
            if ($val === 100 || $val=== false) 
            { 
                continue; 
            }
        } 
        return Response::forge(View::forge('welcome/index'));
	}
}
