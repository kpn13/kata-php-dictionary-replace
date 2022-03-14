<?php

namespace Test;

use App\DictionaryReplacer;
use PHPUnit\Framework\TestCase;

class DictionaryReplacerTest extends TestCase
{
    public function test_should_return_empty_for_empty_string()
    {
        $result = DictionaryReplacer::replace('', ['foo' => 'bar']);

        $this->assertEquals('', $result);
    }

    public function test_should_return_same_for_empty_dictionary()
    {
        $result = DictionaryReplacer::replace('foo', []);

        $this->assertEquals('foo', $result);
    }

    public function test_should_replace_one_word_with_dictionary()
    {
        $result = DictionaryReplacer::replace('\$temp\$', ['temp' => 'temporary']);

        $this->assertEquals('temporary', $result);
    }

    public function test_should_replace_words_with_dictionary()
    {
        $result = DictionaryReplacer::replace('\$temp\$ here comes the name \$name\$', ['temp' => 'temporary', 'name' => 'John Doe']);

        $this->assertEquals('temporary here comes the name John Doe', $result);
    }
}
