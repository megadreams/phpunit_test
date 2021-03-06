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

	/**
	 * The basic welcome message
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
        $count = 10;
		return Response::forge(View::forge('welcome/index'));
    }


	public function action_index2()
    {
        $i = 5;
        if ($i === 1) {
            echo $i;
        } else if ($i === 2) {
            echo $i;
        } else if ($i === 3) {
            echo $i;
        } else if ($i === 4) {
            echo $i;
        } else if ($i === 5) {
            echo $i;
        } else if ($i === 6) {
            echo $i;
        }
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a ViewModel to
	 * show how to use them.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(ViewModel::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
