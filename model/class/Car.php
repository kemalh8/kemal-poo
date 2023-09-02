<?php

class Car{

        private $id;
        private $marque;
        private $modele;
        private $energy;
        private $isAuto;
        private $image;
       

        public function __construct($id,$marque,$modele,$energy,$isAuto,$image){
            $this->id = $id;
            $this->marque = $marque;
            $this->modele = $modele;
            $this->energy = $energy;
            $this->isAuto = $isAuto;
            $this->image = $image;

        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of marque
         */ 
        public function getMarque()
        {
                return htmlspecialchars($this->marque);
        }

        /**
         * Set the value of marque
         *
         * @return  self
         */ 
        public function setMarque($marque)
        {
                $this->marque = $marque;

                return $this;
        }

        /**
         * Get the value of modele
         */ 
        public function getModele()
        {
                return htmlspecialchars($this->modele);
        }

        /**
         * Set the value of modele
         *
         * @return  self
         */ 
        public function setModele($modele)
        {
                $this->modele = $modele;

                return $this;
        }

        /**
         * Get the value of energy
         */ 
        public function getEnergy()
        {
                return htmlspecialchars($this->energy);
        }

        /**
         * Set the value of energy
         *
         * @return  self
         */ 
        public function setEnergy($energy)
        {
                $this->energy = $energy;

                return $this;
        }

        /**
         * Get the value of isAuto
         */ 
        public function getIsAuto()
        {
                return $this->isAuto;
        }

        /**
         * Set the value of isAuto
         *
         * @return  self
         */ 
        public function setIsAuto($isAuto)
        {
                $this->isAuto = $isAuto;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return htmlspecialchars($this->image);
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }
}

?>