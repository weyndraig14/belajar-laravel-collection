<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CollectionTest extends TestCase
{
    public function testCollection(): void
    {
        $colection = collect([1, 2, 3]);
        $this->assertEqualsCanonicalizing([1, 2, 3], $colection->all());
    }
}
