<?php 
namespace Habari;

if( !defined( 'HABARI_PATH' ) ) { 
	die('No direct access');
}

class HPO extends Theme
{
	public function action_init_theme()	{
		// Apply Format::autop() to comment content...
		Format::apply( 'autop', 'post_content_out' );
		Format::apply( 'autop', 'comment_content_out' );
		Format::apply_with_hook_params( 'more', 'post_content_excerpt', '', 30, 0 );
	}

	public function action_add_template_vars() {	
		$this->wsse = Utils::WSSE();
	}

	protected function get_menu_activeon($item) {
		$activeon = isset($item['activeon']) ? $item['activeon'] : array();
		if( isset($item['submenu']) ) {
			foreach($item['submenu'] as $submenu) {
				$activeon = array_merge($this->get_menu_activeon($submenu), $activeon);
			}
		}
		
		return $activeon;
	}
	
	public function activate_menu($menu, $get_submenu = false) {
		$likely_rating = -999;
		$likely = false;
		$likely_key = '';
		$user = User::identify();
		$stored_menus = $user->info->menus;

		foreach( $menu as $itemkey => &$item ) {
			if( isset($stored_menus[$itemkey]) ) {
				$item['href'] = $stored_menus[$itemkey];
			}
			
			if( !isset($item['activeon']) ) continue;

			$activeon = $this->get_menu_activeon($item);

			foreach( $activeon as $c_rule ) {
				$rulename = array_shift( $c_rule );
				$rule = URL::get_matched_rule();
				if( $rule->name == $rulename ) {
					$new_rating = -count(array_diff_assoc($rule->named_arg_values, $c_rule));
					if( $new_rating > $likely_rating ) {
						$likely = $itemkey;
						$likely_rating = $new_rating;
						$likely_key = $itemkey;
					}
				}
			}
		}

		if( $likely !== false ) {
			$menu[$likely]['active'] = true;
			if($get_submenu) {
				$menu = isset($menu[$likely]['submenu']) ? $menu[$likely]['submenu'] : array();
				foreach($menu as &$set) {
					$set['activate'] = $likely_key;
				}
			} else {
				echo '<script>console.log(' . json_encode($menu[$likely]) . ');</script>';
				if(!is_numeric($likely_key)) {
					$stored_menus[$likely_key] = $_SERVER['REQUEST_URI'];
					$user->info->menus = $stored_menus;
					$user->update();
				}
			}
		}


		return $menu;
	}
	
	public function menu_html($menu) {
		$out = '';
		foreach($menu as $item) {
			if(!isset($item['hidden']) && isset($item['href'])) {
				if(!isset($item['classes'])) {
					$item['classes'] = array();
				}
				
				$item['classes'][] = (isset($item['active']) && $item['active'] == true) ? 'active' : 'inactive';
				$out .= '<li><a class="' . implode(' ', $item['classes']) . '" href="' . $item['href'] . '">' . $item['label'];
				
				if(isset($item['badge']) && !empty($item['badge'])) {
					$out .= '<span class="badge badge-important">' . $item['badge'] . '</span>';
				}
				
				$out .= '</a>';
				$out .= '</li>';
			}
		}
		return $out;
	}
}
?>
