<?php
/**
 * Created by xiyusullos.
 * Created at 2017-03-22 14:13
 *
 * @author    xiyusullos <i@xy-jit.cc>
 * @copyright Copyright (C) 2017 xiyusullos.
 * @license   MIT
 */

namespace xiyusullos\Test;


use PHPUnit\Framework\TestCase;
use xiyusullos\Nullable;

class A
{
    // use Nullable;

    public $a = null;

    function __construct($a = 'a')
    {
        $this->a = $a;
    }
}

class B extends A
{
    public $b = null;

    function __construct($a = 'a', $b = 'b')
    {
        parent::__construct($a);

        $this->b = $b;
    }
}

class Obj extends B
{
    public $a;

    function __construct($a = 'a', $b = 'b')
    {
        parent::__construct($a, $b);

        $this->a = new A();
    }
}

class NullableTest extends TestCase
{
    public function testNotExistAttribute()
    {
        $obj = new Obj('a', 'b', 123);
        $this->assertEquals('a', $obj->a->a);
        $this->assertEquals('b', $obj->b);
        $this->assertEquals('', $obj->a->abc);
        $this->assertEquals('', $obj->abc);
    }

}