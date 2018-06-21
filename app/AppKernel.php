<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            // Uncomment if doctrine is enabled
            //new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new SimpleBus\SymfonyBridge\SimpleBusCommandBusBundle(),
            new BlockCypher\AppCommon\Infrastructure\ApiBundle\BlockCypherAppCommonInfrastructureApiBundle(),
            new BlockCypher\AppCommon\Infrastructure\AppCommonBundle\BlockCypherAppCommonInfrastructureAppCommonBundle(),
            new BlockCypher\AppCommon\Infrastructure\LayoutBundle\BlockCypherAppCommonInfrastructureLayoutBundle(),
            new BlockCypher\AppExplorer\Infrastructure\AppExplorerBundle\BlockCypherAppExplorerInfrastructureAppExplorerBundle(),
            new BlockCypher\AppWallet\Infrastructure\AppWalletBundle\BlockCypherAppWalletInfrastructureAppWalletBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir() . '/config/config_' . $this->getEnvironment() . '.yml');
    }

    public function getCacheDir()
    {
        // Using releases in prod
        if ($this->environment == 'prod') {
            return $this->rootDir.'/../../../shared/app/cache/'.$this->environment;
        } else {
            return $this->rootDir.'/cache/'.$this->environment;
        }
    }

    public function getLogDir()
    {
        // Using releases in prod
        if ($this->environment == 'prod') {
            return $this->rootDir . '/../../../shared/app/logs';
        } else {
            return $this->rootDir.'/logs';
        }
    }
}
