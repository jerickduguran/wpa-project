<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

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
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
			new Symfony\Bundle\AsseticBundle\AsseticBundle(),
			new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
			new Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle(),
			new FOS\UserBundle\FOSUserBundle(),
			new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'), 

			//Sonata Admin Dependencies
			new Sonata\CoreBundle\SonataCoreBundle(),
			new Sonata\BlockBundle\SonataBlockBundle(),
			new Knp\Bundle\MenuBundle\KnpMenuBundle(),			
			new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
			
			new Sonata\SeoBundle\SonataSeoBundle(),
			new Sonata\PageBundle\SonataPageBundle(),
            new Sonata\CacheBundle\SonataCacheBundle(),	
            new Sonata\NotificationBundle\SonataNotificationBundle(),	
			new Sonata\MediaBundle\SonataMediaBundle(),	
			new Sonata\NewsBundle\SonataNewsBundle(),	
			
			new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
			new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
			new Sonata\FormatterBundle\SonataFormatterBundle(),

			
			new Sonata\ClassificationBundle\SonataClassificationBundle(),
            new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
            new Application\Sonata\AdminBundle\ApplicationSonataAdminBundle(),
            new Application\Sonata\PageBundle\ApplicationSonataPageBundle(),
            new Application\Sonata\NotificationBundle\ApplicationSonataNotificationBundle(),
			new Application\Sonata\ClassificationBundle\ApplicationSonataClassificationBundle(),
			new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
			
			new JMS\SerializerBundle\JMSSerializerBundle(),
			
			#FOS
			new FOS\OAuthServerBundle\FOSOAuthServerBundle(),
            new FOS\RestBundle\FOSRestBundle(),
			
			new Sonata\IntlBundle\SonataIntlBundle(),
			
			//SonataAdminBundle
			new Sonata\AdminBundle\SonataAdminBundle(),

            new AppBundle\AppBundle(),
            new WPA\APIBundle\WPAAPIBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
