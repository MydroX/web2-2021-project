<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\DocBlock\Tags\Since;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("question:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("question:read")
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("question:read")
     */
    private $image;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups("question:read")
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups("question:read")
     */
    private $help;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("question:read")
     */
    private $successPath;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("question:read")
     */
    private $errorPath;

    /**
     * @ORM\Column(type="text")
     * @Groups("question:read")
     */
    private $answer;

    /**
     * @ORM\ManyToOne(targetEntity=Section::class, inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     * @Groups("question:read")
     */
    private $section;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getHelp(): ?string
    {
        return $this->help;
    }

    public function setHelp(?string $help): self
    {
        $this->help = $help;

        return $this;
    }

    public function getSuccessPath(): ?string
    {
        return $this->successPath;
    }

    public function setSuccessPath(string $successPath): self
    {
        $this->successPath = $successPath;

        return $this;
    }

    public function getErrorPath(): ?string
    {
        return $this->errorPath;
    }

    public function setErrorPath(string $errorPath): self
    {
        $this->errorPath = $errorPath;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getSection(): ?Section
    {
        return $this->section;
    }

    public function setSection(?Section $section): self
    {
        $this->section = $section;

        return $this;
    }
}
