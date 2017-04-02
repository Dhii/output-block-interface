<?php

namespace Dhii\Block\FuncTest;

use Dhii\Block\BlockInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Block\BlockInterface}.
 *
 * @since [*next-version*]
 */
class BlockInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Block\\BlockInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return BlockInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->__toString(function() {
                return 'foobar';
            })
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'Subject is not a valid instance.'
        );

        $this->assertInstanceOf(
            'Dhii\\Util\\String\\StringableInterface',
            $subject,
            'Subject is not a valid StringableInterface instance.'
        );
    }

    public function testCanBeCastToString()
    {
        $subject = $this->createInstance();
        $string  = (string) $subject;

        $this->assertEquals('foobar', $string, 'Subject did not cast to string "foobar".');
    }
}
