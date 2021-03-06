<?php

// src/Wiki/WikiMaireBundle/DataFixtures/ORM/LoadUserData.php

namespace Wiki\WikiMaireBundle\DataFixtures\ORM;

use Application\Sonata\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        // Get our userManager, you must implement `ContainerAwareInterface`
        $userManager = $this->getUserManager();

        // Creation de User et des details
        $user1 = $userManager->createUser();
        $user1->setUsername('admin');
        $user1->setPlainPassword('admin');
        $user1->setEnabled(true);
        $user1->setEmail('admin1@email.com');
        $user1->setRoles(array('ROLE_SUPER_ADMIN'));
        $user1->setFirstname('Admin');
        $user1->setLastname('Admin');
        $user1->setPhone('0768298272');
        $user1->setAdressemairie('18 Rue de la Gare');


        // Creation de User et des details
        $user2 = $userManager->createUser();
        $user2->setUsername('tra');
        $user2->setPlainPassword('tra');
        $user2->setEnabled(true);
        $user2->setEmail('admin2@email.com');
        $user2->setRoles(array('ROLE_USER'));
        $user2->setFirstname('traore');
        $user2->setLastname('Mahamadou');
        $user2->setPhone('0768298272');
        $user2->setAdressemairie('18 Rue de la Gare');

        // Creation de User et des details
        $user3 = $userManager->createUser();
        $user3->setUsername('bekele');
        $user3->setPlainPassword('bekele');
        $user3->setEnabled(true);
        $user3->setEmail('mahamadoutraore1@gmail.com');
        $user3->setRoles(array('ROLE_USER'));
        $user3->setFirstname('traore');
        $user3->setLastname('Mahamadou');
        $user3->setPhone('0768298272');
        $user3->setAdressemairie('18 Rue de la Gare');


        // Creation de User et des details
        $user4 = $userManager->createUser();
        $user4->setUsername('celine');
        $user4->setPlainPassword('celine');
        $user4->setEnabled(true);
        $user4->setEmail('admin4@email.com');
        $user4->setRoles(array('ROLE_USER'));
        $user4->setFirstname('Celine');
        $user4->setCommune($manager->merge($this->getReference('commune-poulx')));
        $user4->setLastname('Langlade');
        $user4->setPhone('0768298272');
        $user4->setAdressemairie('18 Rue de la Gare');
        $this->setReference('user-celine', $user4);

        // Creation de User et des details
        $user5 = $userManager->createUser();
        $user5->setUsername('canonball');
        $user5->setPlainPassword('canonball');
        $user5->setEnabled(true);
        $user5->setEmail('admin5@email.com');
        $user5->setRoles(array('ROLE_USER'));
        $user5->setFirstname('Pascal');
        $user5->setLastname('Emeriaud');
        $user5->setPhone('0768298272');
        $user5->setAdressemairie('18 Rue de la Gare');


        // Maires
        $user6 = $userManager->createUser();
        $user6->setUsername('olivier');
        $user6->setEmail('mairie-longuevile-sur-scie@wanadoo.fr');
        $user6->setEnabled(true);
        $user6->setPlainPassword('olivier');
        $user6->setFirstname('Olivier');
        $user6->setCommune($manager->merge($this->getReference('commune-1')));
        $user6->setLastname('Bureaux');
        $user6->setAdressemairie('18 Rue de la Gare');
        $this->setReference('user-olivier', $user6);

        $user7 = $userManager->createUser();
        $user7->setUsername('gilbert');
        $user7->setEmail('mairie-village-les-loges@wanadoo.fr');
        $user7->setEnabled(true);
        $user7->setPlainPassword('gilbert');
        $user7->setFirstname('Gilbert');
        $user7->setCommune($manager->merge($this->getReference('commune-2')));
        $user7->setLastname('Mabille');
        $user7->setAdressemairie('18 Rue de la Gare');
        $this->setReference('user-gilbert', $user7);


        // Mise a jour des utilisateurs
        $userManager->updateUser($user1, true);
        $userManager->updateUser($user2, true);
        $userManager->updateUser($user3, true);
        $userManager->updateUser($user4, true);
        $userManager->updateUser($user5, true);
        $userManager->updateUser($user6, true);
        $userManager->updateUser($user7, true);


    }

    public function getSecurityManager()
    {
        return $this->container->get('security.encoder_factory');
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @return \Sonata\UserBundle\Model\UserManagerInterface
     */
    public function getUserManager()
    {
        return $this->container->get('fos_user.user_manager');
    }

    public function getOrder()
    {
        return 2; // ordre d'appel
    }
}
