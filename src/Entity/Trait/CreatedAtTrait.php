<?php

namespace App\Entity\Trait ;

    use Doctrine\ORM\Mapping as ORM;
    trait CreatedAtTrait
    {
        #[ORM\Column(type: 'datetime_immutable', options: ['default' => 'CURRENT_TIMESTAMP'])]
        private ?\DateTimeImmutable $Created_at = null;

        public function getCreatedAt(): ?\DateTimeImmutable
        {
            return $this->Created_at;
        }

        public function setCreatedAt(\DateTimeImmutable $Created_at): self
        {
            $this->Created_at = $Created_at;

            return $this;
        }
    }  

