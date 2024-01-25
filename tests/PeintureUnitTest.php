<?php

namespace App\Tests;

use App\Entity\User;
use App\Entity\Peinture;
use App\Entity\Categorie;
use DateTime;
use PHPUnit\Framework\TestCase;

class PeintureUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $peinture = new Peinture();
        $datetime = new DateTime();
        $categorie = new Categorie();
        $user = new User();
        
        $peinture   ->setNom("nom")
                    ->setLargeur(20.20)
                    ->setHauteur(20.20)
                    ->setEnVente(true)
                    ->setDateRealisation($datetime)
                    ->setCreatedAt($datetime)
                    ->setDecription("description")
                    ->setPortfolio(true)
                    ->setSlug("slug")
                    ->setFile("file")
                    ->addCategorie($categorie)
                    ->setPrix(20.20)
                    ->setUser($user);

        $this->assertTrue($peinture->getNom() === 'nom');
        $this->assertTrue($peinture->getLargeur() == 20.20);
        $this->assertTrue($peinture->getHauteur() == 20.20);
        $this->assertTrue($peinture->isEnVente() === true);
        $this->assertTrue($peinture->getDateRealisation() === $datetime);
        $this->assertTrue($peinture->getCreatedAt() === $datetime);               
        $this->assertTrue($peinture->getDecription() === 'description');               
        $this->assertTrue($peinture->isPortfolio() === true);               
        $this->assertTrue($peinture->getSlug() === 'slug');               
        $this->assertTrue($peinture->getFile() === 'file');               
        $this->assertTrue($peinture->getPrix() == 20.20);               
        $this->assertTrue($peinture->getUser() === $user);               
        $this->assertContains($categorie, $peinture->getCategorie());               
    }

    public function testIsFalse()
    {
        $peinture = new Peinture();
        $datetime = new DateTime();
        $categorie = new Categorie();
        $user = new User();
        
        $peinture   ->setNom("nom")
                    ->setLargeur(20.20)
                    ->setHauteur(20.20)
                    ->setEnVente(true)
                    ->setDateRealisation($datetime)
                    ->setCreatedAt($datetime)
                    ->setDecription("description")
                    ->setPortfolio(true)
                    ->setSlug("slug")
                    ->setFile("file")
                    ->addCategorie($categorie)
                    ->setPrix(20.20)
                    ->setUser($user);

        $this->assertFalse($peinture->getNom() === 'false');
        $this->assertFalse($peinture->getLargeur() == 22.20);
        $this->assertFalse($peinture->getHauteur() == 22.20);
        $this->assertFalse($peinture->isEnVente() === false);
        $this->assertFalse($peinture->getDateRealisation() === new DateTime());
        $this->assertFalse($peinture->getCreatedAt() === new DateTime());               
        $this->assertFalse($peinture->getDecription() === 'false');               
        $this->assertFalse($peinture->isPortfolio() === false);               
        $this->assertFalse($peinture->getSlug() === 'false');               
        $this->assertFalse($peinture->getFile() === 'false');               
        $this->assertFalse($peinture->getPrix() == 22.20);               
        $this->assertFalse($peinture->getUser() === new User());               
        $this->assertNotContains(new Categorie(), $peinture->getCategorie()); 
    }

    public function testIsEmpty()
    {
        $peinture = new Peinture();

        $this->assertEmpty($peinture->getNom());
        $this->assertEmpty($peinture->getLargeur());
        $this->assertEmpty($peinture->getHauteur());
        $this->assertEmpty($peinture->isEnVente());
        $this->assertEmpty($peinture->getDateRealisation());
        $this->assertEmpty($peinture->getCreatedAt());               
        $this->assertEmpty($peinture->getDecription());               
        $this->assertEmpty($peinture->isPortfolio());               
        $this->assertEmpty($peinture->getSlug());               
        $this->assertEmpty($peinture->getFile());               
        $this->assertEmpty($peinture->getPrix());               
        $this->assertEmpty($peinture->getUser());               
        $this->assertEmpty($peinture->getCategorie()); 
    }
    
}
