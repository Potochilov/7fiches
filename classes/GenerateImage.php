<?php
//src: classes/GenerateImage.php
namespace classes;

use GDText\Box;
use GDText\Color;

class GenerateImage {
	public string $test_name;
	public object $box;
	public string $img;

	public function __construct( $image_text ) {
		$im              = imagecreatetruecolor( 700, 300 );
		$backgroundColor = imagecolorallocate( $im, 0, 0, 0 );

		imagefill( $im, 0, 0, $backgroundColor );
		$this->box = new Box( $im );

		// include font
		$this->box->setFontFace( __DIR__ . '/../fonts/Prisma.otf' );
		$this->box->setFontSize( 60 );
		$this->box->setFontColor( new Color( 148, 212, 1 ) );
		$this->box->setTextShadow( new Color( 0, 255, 0, 50 ), 0, - 2 );
		$this->box->setBox( 20, 20, 700, 300 );
		$this->box->setTextAlign( 'center', 'center' );
		$this->box->draw( $image_text );

		ob_start();
		imagepng( $im );
		$image_variable = ob_get_contents();
		ob_end_clean();

		$this->img = "<img src='data:image/png;base64," . base64_encode( $image_variable ) . "'>";
	}
}
