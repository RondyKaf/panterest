<?php 

    namespace App\Entity\Traits;

    trait Timestampable{
        public function getCreatedAt(): ?\DateTimeInterface
        {
            return $this->createdAt;
        }
    
        public function setCreatedAt(\DateTimeInterface $createdAt): static
        {
            $this->createdAt = $createdAt;
    
            return $this;
        }
    
        public function getUpdatedAt(): ?\DateTimeInterface
        {
            return $this->updatedAt;
        }
    
        public function setUpdatedAt(\DateTimeInterface $updatedAt): static
        {
            $this->updatedAt = $updatedAt;
    
            return $this;
        }
        
        #[ORM\PrePersist]
        #[ORM\PreUpdate]
        public function updateTimesTamps()
        {   
            if($this->getCreatedAt() === null){
                $this->setCreatedAt(new \DateTimeImmutable);
            }
            $this->setUpdatedAt(new \DateTimeImmutable);
        }
    }
?>