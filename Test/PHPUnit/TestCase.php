<?php

/**
 * TestCase class bound to Orient.
 *
 * @author Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Orient\Test\PHPUnit;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    public function assertCommandGives($expected, $got)
    {
        $message = "The raw command does not match the given SQL query";

        return $this->assertEquals($expected, $got, $message);
    }

    public function assertStatusCode($expected, $got)
    {
        $message = "The status code of the response is wrong";

        return $this->assertEquals($expected, $got, $message);
    }

    public function assertTokens($expected, $got)
    {
        $message = "The given command tokens do not match";

        return $this->assertEquals($expected, $got, $message);
    }
}
