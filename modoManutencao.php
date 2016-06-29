<?php
/*
Plugin Name: Modo Manutenção
Plugin URI: http://evosix.com.br/
Description: Modo de manutenção.
Version: 1.0
Author: @aletaschner
Author URI: http://aletaschner.info/
License: GPL2
*/

if(!class_exists('ModoManutencao'))
{
	class ModoManutencao
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			add_action('get_header', array(&$this, 'ativaModoManutencao'));
		} 

		public function ativaModoManutencao(){
			if(!current_user_can( 'edit_themes' ) || !is_user_logged_in( ) ) { 			
			
				//include(plugin_dir_url(__FILE__)."/manutencao.html");

				?>
					<!DOCTYPE html>
					<html>
					<head>
						<title>Manutenção</title>
<link rel="stylesheet" href="https://use.fontawesome.com/a779d9bb18.css">
					<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<style>
		* {
			font-family: Colibri;
		}
</style>
					</head>
					<body style="margin:0; overflow:hidden; height:100vh;" id="body">

					<div style="width:100%; height:100%; text-align:center;">
						<video id="video" style="position: fixed;top: 0;left: 0; width: auto; height: auto;min-width: 100%; min-height: 100%;" poster="<?=plugin_dir_url(__FILE__)?>bg2.jpg" src="<?=plugin_dir_url(__FILE__)?>video-bg.mp4" autoplay="" loop=""></video>
							<div style="position:absolute; top: 5%; left: 25%; width:50%;">
									<div style="width:100%">
											<img style="background-color:#FFF; padding:10px; border-radius:20px; border-bottom: 1px solid #FFF; margin-bottom:5px;" src="<?=plugin_dir_url(__FILE__)?>/logo.png"><br>
											<i class="fa fa-cog fa-spin" aria-hidden="true" style="color:#FFF;"></i>
											<h4 style="color:#FFF; margin-top: 10px;"> Em construção... </h4>
											
									</div>
							</div>
							<div style="width:100%; height: 50px; position: absolute; bottom:0;background-color: #7e1317; color:#FFF; padding-left: 20px; line-height:50px; text-align:center;">
								
								<svg id="SVG" style=" height: 50px;" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="67.7332mm" height="24.5532mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 6773 2455"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 <defs>
  <style type="text/css">
   <![CDATA[
    .fil0 {fill:#FFF;stroke:#000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
   ]]>
  </style>
 </defs>
 <g id="Camada_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <path class="fil0" d="M4691 1056c0,58 -1,92 30,143 27,44 95,91 153,97 48,5 245,3 312,3 36,0 64,14 79,45 17,34 -4,102 -75,102l-501 0 0 152 504 0c50,0 93,-10 131,-35 31,-20 64,-57 81,-90 53,-100 18,-244 -101,-303 -29,-14 -50,-21 -84,-24l-106 -3c-32,0 -201,2 -217,-1 -35,-6 -65,-50 -40,-94 5,-9 10,-14 19,-20 21,-12 37,-12 68,-12l439 0c11,0 35,4 35,-7l0 -139c0,-5 -2,-7 -7,-7l-490 0c-34,0 -66,5 -90,14 -70,23 -141,101 -141,178z"/>
  <path class="fil0" d="M4245 1003c117,0 219,107 219,215 0,49 -3,63 -19,103 -15,36 -43,69 -75,92l-35 20c-42,21 -91,26 -140,15 -37,-8 -80,-34 -106,-61l-25 -31c-19,-26 -36,-66 -39,-100 -4,-45 -1,-76 17,-118 15,-35 33,-58 60,-81 6,-5 9,-8 15,-13 19,-14 51,-31 75,-36 16,-4 33,-6 52,-6zm-370 203c0,72 3,118 35,182 11,23 34,62 51,80 5,5 5,6 9,11 4,4 7,8 11,12 25,24 73,60 103,73 74,31 95,34 176,34 94,0 181,-44 245,-108 63,-63 108,-153 108,-245 0,-94 -11,-129 -48,-202 -5,-10 -10,-18 -16,-27 -22,-33 -57,-67 -88,-90l-26 -18c-11,-6 -18,-10 -30,-16 -95,-48 -223,-47 -319,-2 -21,10 -37,21 -55,33 -9,6 -18,11 -26,18 -42,41 -69,70 -96,124 -18,35 -35,88 -35,140z"/>
  <path class="fil0" d="M893 1116l0 226c0,50 45,72 82,93 26,15 156,92 171,97 47,13 71,-8 109,-31l92 -54c7,-4 13,-6 20,-10 13,-8 24,-14 38,-22 25,-14 47,-38 47,-71l0 -236c0,-18 -8,-31 -15,-43 -18,-27 -58,-42 -86,-59l-129 -74c-19,-10 -23,-15 -49,-15 -31,0 -75,29 -102,46l-38 22c-21,13 -98,53 -113,68 -17,17 -27,35 -27,63z"/>
  <path class="fil0" d="M2249 1224c0,50 12,109 34,153 39,82 82,122 158,168 11,7 20,10 32,16 39,19 99,30 157,30l351 0c5,0 7,-2 7,-7l0 -132c0,-11 -22,-7 -44,-7 -81,0 -306,4 -355,-3 -71,-9 -132,-55 -165,-117 -3,-5 -5,-12 -8,-18 -34,-78 -17,-169 39,-232 85,-96 198,-73 333,-73l178 0c10,0 21,3 21,-7l0 -139 -370 0c-86,0 -147,24 -210,65 -33,22 -47,35 -73,66 -8,9 -14,16 -21,26 -7,10 -12,19 -18,28 -13,22 -7,13 -16,31 -11,23 -18,42 -24,69 -5,25 -9,58 -9,83z"/>
  <path class="fil0" d="M231 1222c0,58 21,120 59,160 82,85 180,180 266,266 13,13 41,44 54,53 10,-7 10,-12 18,-19l47 -46c4,-5 4,-6 8,-10l28 -28c5,-5 44,-38 47,-48l-70 -71c-24,-24 -46,-46 -70,-70 -24,-24 -46,-46 -70,-70 -19,-19 -43,-63 -43,-100 0,-49 9,-89 42,-122 25,-24 47,-47 72,-72l124 -124c6,-6 14,-11 17,-20l-147 -148c-13,9 -292,291 -319,317 -30,30 -61,92 -61,152z"/>
  <path class="fil0" d="M1589 903c6,9 10,10 18,17 7,6 11,13 17,20 7,7 12,9 19,16 20,23 33,34 54,54 7,7 9,13 17,20l36 35c10,8 10,11 18,19 7,8 13,9 20,17 19,24 29,25 45,64 23,56 12,123 -26,166 -27,31 -111,110 -146,145l-72 73 150 151c12,-8 8,-12 26,-26l53 -54c26,-23 12,-12 26,-27 6,-6 9,-6 14,-11 10,-9 3,-8 25,-26l52 -54c23,-20 15,-16 26,-27 6,-5 9,-6 14,-11 16,-18 2,-6 26,-27 8,-7 8,-14 26,-27 8,-6 6,-6 12,-13 4,-5 9,-9 14,-14 66,-65 76,-166 43,-252 -10,-25 -36,-60 -54,-77l-251 -251c-10,-10 -45,-49 -55,-51 -8,5 -11,12 -18,19 -8,7 -13,9 -19,17 -7,9 -9,12 -18,19 -11,9 -14,17 -27,28 -18,14 -12,15 -27,28 -5,4 -6,4 -10,8l-27 31z"/>
  <path class="fil0" d="M5728 1598c52,0 105,1 157,0 17,0 14,-6 24,-16l198 -236 161 192c6,8 12,14 18,21l26 32c5,6 5,6 14,7 50,3 109,0 160,0 -2,-8 -28,-38 -35,-46 -12,-15 -23,-29 -36,-45l-162 -205c-7,-9 -11,-15 -18,-23 -9,-11 -30,-37 -36,-47l88 -113c7,-8 12,-15 19,-23 12,-17 24,-30 37,-47 6,-8 11,-13 18,-22l109 -138c9,-12 15,-15 16,-25l-169 0c-2,8 -2,5 -7,11l-28 34c-6,8 -12,14 -19,22l-205 250c-7,8 -12,14 -19,23l-156 195c-4,5 -6,7 -10,11l-137 175c-5,7 -6,5 -8,13z"/>
  <path class="fil0" d="M700 1791c7,11 282,283 306,307 33,33 90,69 137,69 3,0 5,-3 5,-7l0 -259c0,-9 -20,-7 -48,-22 -16,-8 -29,-16 -41,-29 -17,-17 -199,-202 -210,-208l-150 148z"/>
  <path class="fil0" d="M1201 559c28,0 72,26 91,46 6,6 9,12 15,17 7,6 12,8 18,16l51 51c8,7 9,12 16,19 7,7 12,8 18,16l52 52c8,7 10,12 16,19 7,7 12,8 18,17 26,-17 19,-21 38,-36 9,-7 11,-11 18,-19 7,-9 14,-10 21,-19 19,-21 25,-24 36,-38 9,-11 11,-6 28,-28 4,-5 6,-6 10,-11 -7,-11 -190,-191 -204,-205 -35,-35 -68,-68 -103,-103 -6,-6 -8,-7 -14,-12 -32,-27 -80,-55 -125,-55l0 272z"/>
  <path class="fil0" d="M699 661l150 151c11,-7 191,-190 209,-208 21,-21 37,-31 64,-40 9,-3 25,-3 25,-12l0 -266c-53,0 -106,33 -139,66 -24,24 -297,300 -309,308z"/>
  <path class="fil0" d="M1201 1894l0 272c36,0 83,-23 110,-43l55 -49c6,-6 6,-9 11,-14 5,-5 8,-6 14,-11 13,-13 4,-7 25,-25 11,-10 14,-17 26,-27 15,-12 17,-20 25,-26 26,-22 13,-13 25,-26 9,-9 11,-6 26,-25 9,-12 14,-9 27,-26 9,-12 17,-14 26,-25 21,-25 13,-13 25,-25 16,-17 -1,-3 25,-25l25 -28 -150 -148c-14,9 -203,206 -223,221 -18,13 -49,30 -73,31z"/>
  <path class="fil0" d="M5501 1598l148 0 0 -725c0,-6 5,-9 -5,-9l-143 0 0 734z"/>
  <path class="fil0" d="M3437 1608l5 0c2,-8 8,-15 12,-23l69 -139c5,-9 7,-17 12,-25 4,-7 8,-13 12,-23 12,-28 43,-85 59,-117 4,-9 6,-15 11,-24l72 -141c3,-5 3,-6 5,-11l54 -106c5,-8 6,-15 11,-24 5,-10 9,-15 13,-24l46 -95 -143 0 -120 233c-4,8 -8,13 -12,22 -5,9 -8,16 -12,25l-147 280c-5,9 -8,14 -12,22 -12,22 -5,18 9,47 4,9 7,16 12,25l48 96z"/>
  <path class="fil0" d="M3330 1395c9,-6 46,-79 55,-98 30,-60 32,-31 -3,-102l-52 -101c-6,-11 -11,-22 -17,-34 -6,-13 -12,-22 -18,-33l-85 -171 -146 0c1,13 95,197 98,202l83 168c8,18 81,157 84,168z"/>
  <path class="fil0" d="M2603 1296l379 0c5,0 7,-2 7,-7l0 -136 -386 0 0 143z"/>
  <path class="fil0" d="M5929 1120l66 -80c7,-9 17,-18 22,-26 -2,-10 -12,-18 -22,-31 -5,-5 -8,-10 -13,-15 -5,-6 -8,-9 -13,-15 -4,-5 -8,-11 -12,-15 -6,-8 -57,-71 -63,-73 -7,-2 -151,-1 -165,-1 2,8 6,11 11,17 45,54 93,119 139,175l25 32c6,8 20,28 26,32z"/>
 </g>
</svg>
							</div>
					</div>
					<script>
						document.getElementById("video").play();
					</script>
					</body>
					</html>
				<?
				exit();
			}
		}

		public static function activate( ) { } 
		public static function deactivate( ){ }	
		
	} 
} 

if(class_exists('ModoManutencao'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('ModoManutencao', 'activate'));
	register_deactivation_hook(__FILE__, array('ModoManutencao', 'deactivate'));

	// instantiate the plugin class
	$ModoManutencao = new ModoManutencao();

}
