<?php

namespace App\Test\Controller;

use App\Entity\PresArt;
use App\Repository\PresArtRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PresArtControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private PresArtRepository $repository;
    private string $path = '/pres/art/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(PresArt::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('PresArt index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'pres_art[imagePath]' => 'Testing',
            'pres_art[Nom]' => 'Testing',
            'pres_art[Taille]' => 'Testing',
            'pres_art[Description]' => 'Testing',
            'pres_art[Prix]' => 'Testing',
        ]);

        self::assertResponseRedirects('/pres/art/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new PresArt();
        $fixture->setImagePath('My Title');
        $fixture->setNom('My Title');
        $fixture->setTaille('My Title');
        $fixture->setDescription('My Title');
        $fixture->setPrix('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('PresArt');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new PresArt();
        $fixture->setImagePath('My Title');
        $fixture->setNom('My Title');
        $fixture->setTaille('My Title');
        $fixture->setDescription('My Title');
        $fixture->setPrix('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'pres_art[imagePath]' => 'Something New',
            'pres_art[Nom]' => 'Something New',
            'pres_art[Taille]' => 'Something New',
            'pres_art[Description]' => 'Something New',
            'pres_art[Prix]' => 'Something New',
        ]);

        self::assertResponseRedirects('/pres/art/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getImagePath());
        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getTaille());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getPrix());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new PresArt();
        $fixture->setImagePath('My Title');
        $fixture->setNom('My Title');
        $fixture->setTaille('My Title');
        $fixture->setDescription('My Title');
        $fixture->setPrix('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/pres/art/');
    }
}
