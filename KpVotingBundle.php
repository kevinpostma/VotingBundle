<?php

namespace Kp\Bundle\VotingBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Sylius\Bundle\ResourceBundle\DependencyInjection\Compiler\ResolveDoctrineTargetEntitiesPass;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

class KpVotingBundle extends Bundle
{
    public static function getSupportedDrivers()
    {
        return array(
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM
        );
    }

    public function build(ContainerBuilder $container)
    {
        $interfaces = array(
            'Kp\Bundle\VotingBundle\Model\VotingInterface'         => 'kp.model.voting.class',
        );

        $container->addCompilerPass(new ResolveDoctrineTargetEntitiesPass('kp_voting', $interfaces));
    }
}
