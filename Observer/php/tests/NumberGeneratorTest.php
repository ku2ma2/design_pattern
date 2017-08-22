<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/NumberGenerator.php';

class testObserver implements \SplObserver
{
    public $name = '';
    public function __constract($name)
    {
        $this->name = $name;
    }
    public function update(\SplSubject $subject)
    {
        echo $this->name;
    }
}

/**
 * Observer NumberGenerator Test
 */
final class ObserverNumberGeneratorTest extends TestCase
{
    public function test_attach_detach_見つからない場合は例外を返す()
    {
        $expected = 'OBSERVER';
        $obs1 = new testObserver('OBSERVER_01');
        $obs2 = new testObserver('OBSERVER_02');

        $stub = $this->getMockForAbstractClass(\Observer\NumberGenerator::class);
        $this->assertEquals(null, $stub->attach($obs1));

        try {
            $stub->detach($obs2);
        } catch (Exception $e) {
            $this->assertEquals('Observerが見つかりません', $e->getMessage());
        }
    }
}
