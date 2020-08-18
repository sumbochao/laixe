<?php

namespace App\Helper;

/**
 * @param string $directory
 * @return array file name
 */
class Helpers {
	/**
	 * @var css
	 */
	public const CSS = '\theme\css';

	/**
	 * @var js
	 */
	public const JS = '\theme\js';

	/**
	 * @var image
	 */
	public const IMAGE = '\theme\image';

	public static function get_file_name($directory) {
		$filenames = [];
		//Get a list of file paths using the glob function.
		$files = scandir($directory);
		foreach ($files as $file) {
			if (strlen($file) > 2) {
				$filenames[] = $file;
			}
		}
		return $filenames;
	}

	public static function get_public_path() {
		$path = base_path() . '\public';
		return $path;
	}

	public static function get_asset_file_name($asset_name) {
		$folder_path = self::get_public_path() .$asset_name;
		$list = self::get_file_name($folder_path);
		return $list;
	}
}