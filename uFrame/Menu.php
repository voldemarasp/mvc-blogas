<?php

namespace uFrame;

use uFrame\Log;
use uFrame\Database;

class Menu {

	public static function show() {

		$log = new Log();

		$db = new Database($log);

		$menuList = $db->select("SELECT * FROM pages ORDER BY id");

		foreach ($menuList as $menu) {
			// echo "<li><a href='/" . CONFIG['site_path']; . "/'" . $menu['title'] . ">" . $menu['title'] . "</a></li>";
			if ($menu['title'] == "Blog") {
			echo "<li><a href='http://localhost/Projektas/Objektinis%20MVC%20Blogas/Blog'>" . $menu['title'] . "</a></li>";
			} else {
			echo "<li><a href='http://localhost/Projektas/Objektinis MVC Blogas/Page/show/" . $menu['title'] . "'>" . $menu['title'] . "</a></li>";
			}

		}
	}

}