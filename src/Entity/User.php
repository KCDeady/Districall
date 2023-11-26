<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User implements UserInterface
{
    public function getRoles(): array
    {
        return ['ROLE_USER']; // Vous pouvez ajouter d'autres rôles au besoin
    }

    public function eraseCredentials()
    {
        // Laissez cette méthode vide, sauf si vous devez effacer des données sensibles
    }

    public function getUserIdentifier(): string
    {
        return $this->email; // Utilisation de l'email comme identifiant unique de l'utilisateur
    }
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sex;

    // Getters et setters pour $id, $email, $password, $age et $sex

    // Méthodes de l'interface UserInterface à implémenter
    // ...

    // Autres méthodes si nécessaire
}
