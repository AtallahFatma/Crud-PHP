<?php
/**
 * Created by PhpStorm.
 * User: FAT3665
 * Date: 15/05/2017
 * Time: 11:03
 */

namespace AppBundle\Command;

use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand;
use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symfony\Component\Filesystem\Filesystem;



class GenerateAdminCommand extends GenerateDoctrineCrudCommand
{
    protected $generator;

    protected function configure()
    {
        parent::configure();
        $this->setName('viseo:generate:crud');
        $this->setDescription('Viseo CRUD generator');
    }

    protected function getGenerator(BundleInterface $bundle = null)
    {
        if (null === $this->generator)
        {
           // chdir(__DIR__);
           // $this->container->get('twig.loader')->addPath('../../../../web/templates/', $namespace = '__main__');

            $this->generator = new DoctrineCrudGenerator($this->getContainer()->get('filesystem'), __DIR__.'/../Resources/skeleton/crud');

            $this->generator = $this->createGenerator();
           $this->generator->setSkeletonDirs($this->getSkeletonDirs($bundle));

           // $this->generator = new DoctrineCrudGenerator(new FileSystem, __DIR__.'/Resources/skeleton/crud');
            $this->setGenerator($this->generator);
        }

        return $this->generator;
    }
}