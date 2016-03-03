<?php
// automatically generated, do not modify

namespace MyGame\Example;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class Vec3 extends Struct
{
    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Vec3
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return float
     */
    public function GetX()
    {
        return $this->bb->getFloat($this->bb_pos + 0);
    }

    /**
     * @return float
     */
    public function GetY()
    {
        return $this->bb->getFloat($this->bb_pos + 4);
    }

    /**
     * @return float
     */
    public function GetZ()
    {
        return $this->bb->getFloat($this->bb_pos + 8);
    }

    /**
     * @return double
     */
    public function GetTest1()
    {
        return $this->bb->getDouble($this->bb_pos + 16);
    }

    /**
     * @return sbyte
     */
    public function GetTest2()
    {
        return $this->bb->getSbyte($this->bb_pos + 24);
    }

    /**
     * @return Test
     */
    public function getTest3()
    {
        $obj = new Test();
        $obj->init($this->bb_pos + 26, $this->bb);
        return $obj;
    }


    /**
     * @return int offset
     */
    public static function createVec3(FlatBufferBuilder $builder, $x, $y, $z, $test1, $test2, $test3_a, $test3_b)
    {
        $builder->prep(16, 32);
        $builder->pad(2);
        $builder->prep(2, 4);
        $builder->pad(1);
        $builder->putSbyte($test3_b);
        $builder->putShort($test3_a);
        $builder->pad(1);
        $builder->putSbyte($test2);
        $builder->putDouble($test1);
        $builder->pad(4);
        $builder->putFloat($z);
        $builder->putFloat($y);
        $builder->putFloat($x);
        return $builder->offset();
    }
}
