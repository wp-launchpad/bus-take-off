<?php

namespace LaunchpadBusTakeOff\Tests\Unit\inc\Commands\MakeCommandCommand;

use Mockery;
use LaunchpadBusTakeOff\Commands\MakeCommandCommand;
use LaunchpadCLI\Services\ClassGenerator;
use League\Flysystem\Filesystem;
use LaunchpadCLI\Entities\Configurations;


use LaunchpadBusTakeOff\Tests\Unit\TestCase;

/**
 * @covers \LaunchpadBusTakeOff\Commands\MakeCommandCommand::execute
 */
class Test_execute extends TestCase {

    /**
     * @var ClassGenerator
     */
    protected $class_generator;

    /**
     * @var Filesystem
     */
    protected $filesystem;

    /**
     * @var Configurations
     */
    protected $configurations;

    /**
     * @var MakeCommandCommand
     */
    protected $makecommandcommand;

    public function set_up() {
        parent::set_up();
        $this->class_generator = Mockery::mock(ClassGenerator::class);
        $this->filesystem = Mockery::mock(Filesystem::class);
        $this->configurations = Mockery::mock(Configurations::class);

        $this->makecommandcommand = new MakeCommandCommand($this->class_generator, $this->filesystem, $this->configurations);
    }

    /**
     * @dataProvider configTestData
     */
    public function testShouldDoAsExpected( $config )
    {
        $this->makecommandcommand->execute();

    }
}
