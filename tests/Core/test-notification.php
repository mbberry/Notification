<?php
/**
 * Class TestNotification
 *
 * @package notification
 */

namespace BracketSpace\Notification\Tests\Core;

use BracketSpace\Notification\Tests\Helpers;
use BracketSpace\Notification\Core\Notification;

/**
 * Notification test case.
 */
class TestNotification extends \WP_UnitTestCase {

	/**
	 * Test setter and getter
	 *
	 * @since [Next]
	 */
	public function test_setter_getter() {

		$notification = new Notification();
		$notification->set_something( true );
		$this->assertTrue( $notification->get_something() );

	}

	/**
	 * Test getter exception
	 *
	 * @since [Next]
	 */
	public function test_getter_exception() {

		$this->expectException( \Exception::class );

		$notification = new Notification();
		$this->assertTrue( $notification->get_something() );

	}

	/**
	 * Test setter exception
	 *
	 * @since [Next]
	 */
	public function test_setter_exception() {

		$this->expectException( \Exception::class );

		$notification = new Notification();
		$notification->set_something();

	}

	/**
	 * Test hash creation
	 *
	 * @since [Next]
	 */
	public function test_hash() {

		$notification = new Notification();
		$this->assertRegExp( '/notification_[a-z0-9]{13}/', $notification->get_hash() );

		$notification = new Notification( [
			'hash' => 'test-hash',
		] );
		$this->assertEquals( 'test-hash', $notification->get_hash() );

	}

	/**
	 * Test title
	 *
	 * @since [Next]
	 */
	public function test_title() {

		$notification = new Notification();
		$this->assertEmpty( $notification->get_title() );

		$notification = new Notification( [
			'title' => 'Notification title',
		] );
		$this->assertEquals( 'Notification title', $notification->get_title() );

	}

	/**
	 * Test trigger
	 *
	 * @since [Next]
	 */
	public function test_trigger() {

		$trigger      = Helpers\Registerer::register_trigger();
		$notification = new Notification( [
			'trigger' => $trigger,
		] );

		$this->assertSame( $trigger, $notification->get_trigger() );

	}

	/**
	 * Test trigger exception
	 *
	 * @since [Next]
	 */
	public function test_trigger_exception() {

		$this->expectException( \Exception::class );

		$notification = new Notification( [
			'trigger' => '',
		] );

	}

	/**
	 * Test notifications
	 *
	 * @since [Next]
	 */
	public function test_notifications() {

		$carrier      = Helpers\Registerer::register_carrier();
		$notification = new Notification( [
			'notifications' => [ $carrier ],
		] );

		$this->assertSame( [ $carrier->get_slug() => $carrier ], $notification->get_notifications() );

	}

	/**
	 * Test notifications exception
	 *
	 * @since [Next]
	 */
	public function test_notifications_exception() {

		$this->expectException( \Exception::class );

		$notification = new Notification( [
			'notifications' => [ '' ],
		] );

	}

	/**
	 * Test enabled
	 *
	 * @since [Next]
	 */
	public function test_enabled() {

		$notification = new Notification();
		$this->assertTrue( $notification->is_enabled() );

		$notification = new Notification( [
			'enabled' => true,
		] );
		$this->assertTrue( $notification->is_enabled() );

		$notification = new Notification( [
			'enabled' => false,
		] );
		$this->assertFalse( $notification->is_enabled() );

	}

	/**
	 * Test extras
	 *
	 * @since [Next]
	 */
	public function test_extras() {

		$extras = [
			'extra1' => 'string',
			'extra2' => [ 'array', 'extra' ],
			'extra3' => 123,
		];

		$notification = new Notification( [
			'extras' => $extras,
		] );

		$this->assertSame( $extras, $notification->get_extras() );

	}

	/**
	 * Test extras exception
	 *
	 * @since [Next]
	 */
	public function test_extras_exception() {

		$this->expectException( \Exception::class );

		$extras = [
			'extra' => new \stdClass(),
		];

		$notification = new Notification( [
			'extras' => $extras,
		] );

	}

	/**
	 * Test version
	 *
	 * @since [Next]
	 */
	public function test_version() {

		$ver = '1.0.0';

		$notification = new Notification( [
			'version' => $ver,
		] );
		$this->assertSame( $ver, $notification->get_version() );

		$notification = new Notification();
		$this->assertGreaterThanOrEqual( time(), $notification->get_version() );

	}

	/**
	 * Test to_array
	 *
	 * @since [Next]
	 * @todo Extras API #h1k0k.
	 */
	public function test_to_array() {

		$trigger = Helpers\Registerer::register_trigger();
		$carrier = Helpers\Registerer::register_carrier();
		$carrier->enabled = true;

		$version = time() - 100;

		$notification = new Notification( [
			'hash'          => 'test-hash',
			'title'         => 'Test Title',
			'trigger'       => $trigger,
			'notifications' => [ $carrier ],
			'enabled'       => true,
			'version'       => $version,
		] );

		$data = $notification->to_array();

		$this->assertArrayHasKey( 'hash', $data );
		$this->assertArrayHasKey( 'title', $data );
		$this->assertArrayHasKey( 'trigger', $data );
		$this->assertArrayHasKey( 'notifications', $data );
		$this->assertArrayHasKey( 'enabled', $data );
		$this->assertArrayHasKey( 'extras', $data );
		$this->assertArrayHasKey( 'version', $data );

		$this->assertEquals( 'test-hash', $data['hash'] );
		$this->assertEquals( 'Test Title', $data['title'] );
		$this->assertEquals( $trigger->get_slug(), $data['trigger'] );
		$this->assertEquals( $trigger->get_slug(), $data['trigger'] );
		$this->assertArrayHasKey( $carrier->get_slug(), $data['notifications'] );
		$this->assertEquals( true, $data['enabled'] );
		$this->assertEquals( $version, $data['version'] );

	}

	/**
	 * Test create_hash
	 *
	 * @since [Next]
	 */
	public function test_create_hash() {
		$this->assertRegExp( '/notification_[a-z0-9]{13}/', Notification::create_hash() );
	}

	/**
	 * Test add_notification object
	 *
	 * @since [Next]
	 */
	public function test_add_notification_object() {

		$notification = new Notification();
		$carrier      = Helpers\Registerer::register_carrier();

		$notification->add_notification( $carrier );

		$this->assertSame( [ $carrier->get_slug() => $carrier ], $notification->get_notifications() );

	}

	/**
	 * Test add_notification existing exception
	 *
	 * @since [Next]
	 */
	public function test_add_notification_existing_exception() {

		$this->expectException( \Exception::class );

		$carrier      = Helpers\Registerer::register_carrier();
		$notification = new Notification();
		$notification->add_notification( $carrier );
		$notification->add_notification( $carrier );

	}

	/**
	 * Test add_notification not-existing exception
	 *
	 * @since [Next]
	 */
	public function test_add_notification_not_existing_exception() {

		$this->expectException( \Exception::class );

		$notification = new Notification();
		$notification->add_notification( 'this-is-not-a-carrier' );

	}

	/**
	 * Test get_notification
	 *
	 * @since [Next]
	 */
	public function test_get_notification() {

		$carrier      = Helpers\Registerer::register_carrier();
		$notification = new Notification( [
			'notifications' => [ $carrier ]
		] );

		$this->assertSame( $carrier, $notification->get_notification( $carrier->get_slug() ) );
		$this->assertNull( $notification->get_notification( 'this-is-not-a-carrier' ) );

	}

	/**
	 * Test enable_notification
	 *
	 * @since [Next]
	 */
	public function test_enable_notification() {

		$carrier      = Helpers\Registerer::register_carrier();
		$notification = new Notification( [
			'notifications' => [ $carrier ]
		] );

		$notification->enable_notification( $carrier->get_slug() );

		$this->assertSame( $carrier, $notification->get_notification( $carrier->get_slug() ) );
		$this->assertTrue( $notification->get_notification( $carrier->get_slug() )->enabled );

	}

	/**
	 * Test enable_notification and adding
	 *
	 * @since [Next]
	 */
	public function test_enable_notification_adding() {

		$carrier      = Helpers\Registerer::register_carrier();
		$notification = new Notification();
		$notification->enable_notification( $carrier->get_slug() );

		$this->assertTrue( $notification->get_notification( $carrier->get_slug() )->enabled );

	}

	/**
	 * Test disable_notification
	 *
	 * @since [Next]
	 */
	public function test_disable_notification() {

		$carrier          = Helpers\Registerer::register_carrier();
		$carrier->enabled = true;
		$notification     = new Notification( [
			'notifications' => [ $carrier ]
		] );

		$this->assertTrue( $notification->get_notification( $carrier->get_slug() )->enabled );

		$notification->disable_notification( $carrier->get_slug() );

		$this->assertFalse( $notification->get_notification( $carrier->get_slug() )->enabled );

	}

}
