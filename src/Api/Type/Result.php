<?php

namespace Pyramid\Api\Type;

class Result
{

    /**
     * @var <anyXML>
     */
    protected $schema = null;

    /**
     * @var <anyXML>
     */
    protected $any = null;

    /**
     * @return <anyXML>
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param <anyXML> $schema
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->schema = $schema;
        return $this;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param <anyXML> $any
     * @return $this
     */
    public function setAny($any)
    {
        $this->any = $any;
        return $this;
    }


}

