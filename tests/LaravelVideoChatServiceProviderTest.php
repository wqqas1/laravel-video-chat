<?php
/**
 * Created by PhpStorm.
 * User: nyinyilwin
 * Date: 11/10/17
 * Time: 1:20 AM.
 */

namespace Wqqas1\LaravelVideoChat\Tests;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Wqqas1\LaravelVideoChat\Services\Chat;

class LaravelVideoChatServiceProviderTest extends TestCase
{
    use ServiceProviderTrait;

    public function testChatIsInjectable()
    {
        $this->assertIsInjectable(Chat::class);
    }
}
