<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Directory.php';
require_once dirname(__DIR__) . '/File.php';

/**
 * Visitor ListVisitor Test
 */
final class VisitorListVisitorTest extends TestCase
{
    public function test_construct_FileとDirectoryを使った統合テスト()
    {
        $expected = 'example.txt';

        $file = new File($name = 'example.txt', $size = 1000);
        $actual = $file->getName();

        $this->assertEquals($expected, $actual);
        return $file;
    }
}
