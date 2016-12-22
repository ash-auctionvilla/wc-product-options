<?php 

if (!defined('ABSPATH'))
  exit;


add_action( 'tf_create_options', 'wp_expert_custom_options', 150 );

function wp_expert_custom_options() {
    

	$titan = TitanFramework::getInstance( 'wc-product-options' );
	$section = $titan->createAdminPanel( array(
		    'name' => __( 'WooCommerce Product Options', 'wc-product-options' ),
		    'icon'	=> 'dashicons-networking'
		) );

	$tab = $section->createTab( array(
    		'name' => 'Color List'
		) );

	$default_data = "IndianRed | #CD5C5C
LightCoral | #F08080
Salmon | #FA8072
DarkSalmon | #E9967A
LightSalmon | #FFA07A
Crimson | #DC143C
Red | #FF0000
FireBrick | #B22222
DarkRed | #8B0000
Pink | FFC0CB
LightPink | FFB6C1
HotPink | FF69B4
DeepPink | FF1493
MediumVioletRed | C71585
PaleVioletRed | DB7093
LightSalmon | FFA07A
Coral | FF7F50
Tomato | FF6347
OrangeRed | FF4500
DarkOrange | FF8C00
Orange | FFA500
Gold | FFD700
Yellow | FFFF00
LightYellow | FFFFE0
LemonChiffon | FFFACD
LightGoldenrodYellow | FAFAD2
PapayaWhip | FFEFD5
Moccasin | FFE4B5
PeachPuff | FFDAB9
PaleGoldenrod | EEE8AA
Khaki | F0E68C
DarkKhaki | BDB76B
Lavender | E6E6FA
Thistle | D8BFD8
Plum | DDA0DD
Violet | EE82EE
Orchid | DA70D6
Fuchsia | FF00FF
Magenta | FF00FF
MediumOrchid | BA55D3
MediumPurple | 9370DB
RebeccaPurple | 663399
BlueViolet | 8A2BE2
DarkViolet | 9400D3
DarkOrchid | 9932CC
DarkMagenta | 8B008B
Purple | 800080
Indigo | 4B0082
SlateBlue | 6A5ACD
DarkSlateBlue | 483D8B
MediumSlateBlue | 7B68EE
GreenYellow | ADFF2F
Chartreuse | 7FFF00
LawnGreen | 7CFC00
Lime | 00FF00
LimeGreen | 32CD32
PaleGreen | 98FB98
LightGreen | 90EE90
MediumSpringGreen | 00FA9A
SpringGreen | 00FF7F
MediumSeaGreen | 3CB371
SeaGreen | 2E8B57
ForestGreen | 228B22
Green | 008000
DarkGreen | 006400
YellowGreen | 9ACD32
OliveDrab | 6B8E23
Olive | 808000
DarkOliveGreen | 556B2F
MediumAquamarine | 66CDAA
DarkSeaGreen | 8FBC8B
LightSeaGreen | 20B2AA
DarkCyan | 008B8B
Teal | 008080
Aqua | 00FFFF
Cyan | 00FFFF
LightCyan | E0FFFF
PaleTurquoise | AFEEEE
Aquamarine | 7FFFD4
Turquoise | 40E0D0
MediumTurquoise | 48D1CC
DarkTurquoise | 00CED1
CadetBlue | 5F9EA0
SteelBlue | 4682B4
LightSteelBlue | B0C4DE
PowderBlue | B0E0E6
LightBlue | ADD8E6
SkyBlue | 87CEEB
LightSkyBlue | 87CEFA
DeepSkyBlue | 00BFFF
DodgerBlue | 1E90FF
CornflowerBlue | 6495ED
MediumSlateBlue | 7B68EE
RoyalBlue | 4169E1
Blue | 0000FF
MediumBlue | 0000CD
DarkBlue | 00008B
Navy | 000080
MidnightBlue | 191970
Cornsilk | FFF8DC
BlanchedAlmond | FFEBCD
Bisque | FFE4C4
NavajoWhite | FFDEAD
Wheat | F5DEB3
BurlyWood | DEB887
Tan | D2B48C
RosyBrown | BC8F8F
SandyBrown | F4A460
Goldenrod | DAA520
DarkGoldenrod | B8860B
Peru | CD853F
Chocolate | D2691E
SaddleBrown | 8B4513
Sienna | A0522D
Brown | A52A2A
Maroon | 800000
White | FFFFFF
Snow | FFFAFA
HoneyDew | F0FFF0
MintCream | F5FFFA
Azure | F0FFFF
AliceBlue | F0F8FF
GhostWhite | F8F8FF
WhiteSmoke | F5F5F5
SeaShell | FFF5EE
Beige | F5F5DC
OldLace | FDF5E6
FloralWhite | FFFAF0
Ivory | FFFFF0
AntiqueWhite | FAEBD7
Linen | FAF0E6
LavenderBlush | FFF0F5
MistyRose | FFE4E1
Gainsboro | DCDCDC
LightGray | D3D3D3
Silver | C0C0C0
DarkGray | A9A9A9
Gray | 808080
DimGray | 696969
LightSlateGray | 778899
SlateGray | 708090
DarkSlateGray | 2F4F4F
Black | 000000";

		$tab->createOption(['name' => 'Color Name | Hexadecimal Value', 'id' => 'color_list_opt', 'type' => 'textarea', 'desc' => 'Color Name | Hexadecimal Value', 'default' => $default_data]);

	/*			$tab = $section->createTab( array(
    		'name' => 'Product Field Options'
		) );

		$tab->createOption([
			'name' => 'Availibility Options', 
			'id' => 'availability_opts', 
			'type' => 'textarea', 
			'desc' => 'Availibility Value|Availibility Title'
			]);

		$tab->createOption([
			'name' => 'Durations', 
			'id' => 'var_price_opts', 
			'type' => 'textarea', 
			'desc' => 'Default Durations'
			]);


*/
		$section->createOption( array(
  			  'type' => 'save',
		) );


		/////////////New

/*		$embroidery_sub = $section->createAdminPanel(array('name' => 'Embroidering Pricing'));


		$embroidery_tab = $embroidery_sub->createTab( array(
    		'name' => 'Profiles'
		) );


		$wp_expert_custom_options['embroidery_tab'] = $embroidery_tab;

		return $wp_expert_custom_options;
*/
}


 ?>