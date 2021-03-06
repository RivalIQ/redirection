<?php

class MatchesTest extends WP_UnitTestCase {
	public function testRemoveNewline() {
		$match = new Red_Match();

		$this->assertEquals( $match->sanitize_url( "/some/url\nsomethingelse1" ), '/some/url' );
		$this->assertEquals( $match->sanitize_url( "/some/url\rsomethingelse2" ), '/some/url' );
		$this->assertEquals( $match->sanitize_url( "/some/url\r\nsomethingelse3" ), '/some/url' );
	}
}
