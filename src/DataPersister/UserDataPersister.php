<?php

namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\Exception\ORMException;

class UserDataPersister implements DataPersisterInterface
{
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $userPasswordHasher;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $userPasswordHasher
    ) {
        $this->entityManager = $entityManager;
        $this->userPasswordHasher = $userPasswordHasher;
    }

    /**
     * Checks if the DataPersister supports the given data.
     *
     * @param mixed $data
     * @return bool
     */
    public function supports($data): bool
    {
        return $data instanceof User;
    }

    /**
     * Persists the User entity in the database.
     * Hashes the password if a plainPassword is provided.
     *
     * @param User $data
     * @throws ORMException
     */
    public function persist($data)
    {
        if ($data->getPlainPassword()) {
            $hashedPassword = $this->userPasswordHasher->hashPassword(
                $data,
                $data->getPlainPassword()
            );
            $data->setPassword($hashedPassword);
            $data->eraseCredentials(); // Clears the plainPassword after hashing
        }

        $this->entityManager->persist($data);
        $this->entityManager->flush();
    }

    /**
     * Removes the User entity from the database.
     *
     * @param User $data
     * @throws ORMException
     */
    public function remove($data)
    {
        $this->entityManager->remove($data);
        $this->entityManager->flush();
    }
}