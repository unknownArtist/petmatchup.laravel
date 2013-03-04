<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}
	public function imageCrop($image)
	{
		$img = Input::file($image);
        $ext = File::extension($img['name']);
        if ($img['size'] != 0) {
            $imageName = "image".rand().date(time()).".".$ext;
            try {
                $success = Resizer::open($img)
                    ->resize(400, 400, 'auto')
                    ->save($_SERVER['DOCUMENT_ROOT'] . "/" . "img/" . $imageName, 90);

                if ($success) {
                    try {
                        
                        return $imageName;
                    } catch (Sentry\SentryException $e) {
                        
                        return false;
                    }
                } else {
                    return false;
                }
            } catch (Exception $e) {
            	return false;
            }
        }
        return false;
	}

}