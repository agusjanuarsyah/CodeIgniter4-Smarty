<?php 

if ( ! function_exists('smarty'))
{

	/**
	 * Grabs the current RendererInterface-compatible class
	 * and tells it to render the specified view. Simply provides
	 * a convenience method that can be used in Controllers,
	 * libraries, and routed closures.
	 *
	 * NOTE: Does not provide any escaping of the data, so that must
	 * all be handled manually by the developer.
	 *
	 * @param string $name
	 * @param array  $data
	 * @param array  $options Unused - reserved for third-party extensions.
	 *
	 * @return string
	 */
	function smarty(string $view, array $data = [], array $options = [])
	{
		/**
		 * @var App\Smarty\Smarty $renderer
		 */
		$renderer = \App\Smarty\Services::smarty();

		return $renderer->setData($data)
						->view($view, $options);
	}

}