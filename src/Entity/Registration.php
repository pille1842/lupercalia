<?php

namespace App\Entity;

use App\Repository\RegistrationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RegistrationRepository::class)]
class Registration
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Length(max: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Email()]
    #[Assert\Length(max: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Length(max: 255)]
    private ?string $lastName = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $nickName = null;

    #[ORM\Column(length: 3)]
    #[Assert\NotBlank()]
    #[Assert\Length(max: 3)]
    #[Assert\Choice(choices: ['NON','OTH','ALE','BAD','BUN','FRA','GER','MAR','RHE','TEU','VIC'])]
    private ?string $fraternity = null;

    #[ORM\Column]
    private ?bool $participateBegruessungsabend = null;

    #[ORM\Column]
    private ?bool $participateKulturbummel = null;

    #[ORM\Column]
    private ?bool $participateAbendessen = null;

    #[ORM\Column]
    private ?bool $participateFestkommers = null;

    #[ORM\Column]
    private ?bool $participateFruehschoppen = null;

    #[ORM\Column]
    #[Assert\PositiveOrZero()]
    private ?int $guestsBegruessungsabend = null;

    #[ORM\Column]
    #[Assert\PositiveOrZero()]
    private ?int $guestsKulturbummel = null;

    #[ORM\Column]
    #[Assert\PositiveOrZero()]
    private ?int $guestsAbendessen = null;

    #[ORM\Column]
    #[Assert\PositiveOrZero()]
    private ?int $guestsFestkommers = null;

    #[ORM\Column]
    #[Assert\PositiveOrZero()]
    private ?int $guestsFruehschoppen = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'registrations')]
    private ?User $createdBy = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $userAgent = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ipAddress = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hostname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $referrer = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notesInternal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    public function setNickName(?string $nickName): self
    {
        $this->nickName = $nickName;

        return $this;
    }

    public function getFraternity(): ?string
    {
        return $this->fraternity;
    }

    public function setFraternity(string $fraternity): self
    {
        $this->fraternity = $fraternity;

        return $this;
    }

    public function isParticipateBegruessungsabend(): ?bool
    {
        return $this->participateBegruessungsabend;
    }

    public function setParticipateBegruessungsabend(bool $participateBegruessungsabend): self
    {
        $this->participateBegruessungsabend = $participateBegruessungsabend;

        return $this;
    }

    public function isParticipateKulturbummel(): ?bool
    {
        return $this->participateKulturbummel;
    }

    public function setParticipateKulturbummel(bool $participateKulturbummel): self
    {
        $this->participateKulturbummel = $participateKulturbummel;

        return $this;
    }

    public function isParticipateAbendessen(): ?bool
    {
        return $this->participateAbendessen;
    }

    public function setParticipateAbendessen(bool $participateAbendessen): self
    {
        $this->participateAbendessen = $participateAbendessen;

        return $this;
    }

    public function isParticipateFestkommers(): ?bool
    {
        return $this->participateFestkommers;
    }

    public function setParticipateFestkommers(bool $participateFestkommers): self
    {
        $this->participateFestkommers = $participateFestkommers;

        return $this;
    }

    public function isParticipateFruehschoppen(): ?bool
    {
        return $this->participateFruehschoppen;
    }

    public function setParticipateFruehschoppen(bool $participateFruehschoppen): self
    {
        $this->participateFruehschoppen = $participateFruehschoppen;

        return $this;
    }

    public function getGuestsBegruessungsabend(): ?int
    {
        return $this->guestsBegruessungsabend;
    }

    public function setGuestsBegruessungsabend(int $guestsBegruessungsabend): self
    {
        $this->guestsBegruessungsabend = $guestsBegruessungsabend;

        return $this;
    }

    public function getGuestsKulturbummel(): ?int
    {
        return $this->guestsKulturbummel;
    }

    public function setGuestsKulturbummel(int $guestsKulturbummel): self
    {
        $this->guestsKulturbummel = $guestsKulturbummel;

        return $this;
    }

    public function getGuestsAbendessen(): ?int
    {
        return $this->guestsAbendessen;
    }

    public function setGuestsAbendessen(int $guestsAbendessen): self
    {
        $this->guestsAbendessen = $guestsAbendessen;

        return $this;
    }

    public function getGuestsFestkommers(): ?int
    {
        return $this->guestsFestkommers;
    }

    public function setGuestsFestkommers(int $guestsFestkommers): self
    {
        $this->guestsFestkommers = $guestsFestkommers;

        return $this;
    }

    public function getGuestsFruehschoppen(): ?int
    {
        return $this->guestsFruehschoppen;
    }

    public function setGuestsFruehschoppen(int $guestsFruehschoppen): self
    {
        $this->guestsFruehschoppen = $guestsFruehschoppen;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?User $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    public function setHostname(?string $hostname): self
    {
        $this->hostname = $hostname;

        return $this;
    }

    public function getReferrer(): ?string
    {
        return $this->referrer;
    }

    public function setReferrer(?string $referrer): self
    {
        $this->referrer = $referrer;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getNotesInternal(): ?string
    {
        return $this->notesInternal;
    }

    public function setNotesInternal(?string $notesInternal): self
    {
        $this->notesInternal = $notesInternal;

        return $this;
    }
}
