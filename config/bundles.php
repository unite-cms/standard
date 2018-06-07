<?php

return [

    # unite cms core bundle needs to be registered at first position
    UniteCMS\CoreBundle\UniteCMSCoreBundle::class => ['all' => true],

    # All core bundles
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    JMS\SerializerBundle\JMSSerializerBundle::class => ['all' => true],
    Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle::class => ['all' => true],
    Knp\Bundle\PaginatorBundle\KnpPaginatorBundle::class => ['all' => true],

    # unite cms bundles for standard installation
    UniteCMS\CollectionFieldBundle\UniteCMSCollectionFieldBundle::class => ['all' => true],
    UniteCMS\StorageBundle\UniteCMSStorageBundle::class => ['all' => true],
    UniteCMS\WysiwygFieldBundle\UniteCMSWysiwygFieldBundle::class => ['all' => true],

    # Dev and Test bundles
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true],
    Symfony\Bundle\WebServerBundle\WebServerBundle::class => ['dev' => true],
];
