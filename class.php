<?php
        abstract class Animals {
            abstract function getImage();
            abstract function makeSound();
        }

        class Apor extends Animals{
            private $animalName;

            public function __construct($animalName) {
                $this->animalName = $animalName;             
            }

            public function getImage() {
                print '<img src="/Apa/apa.jpeg">';
            }

            public function makeSound() {
                print 'UUUUUAUUUUAAA';
            }
        }
        class Giraffe extends Animals{
            private $animalName;

            public function __construct($animalName) {
                $this->animalName = $animalName;             
            }

            public function getImage() {
                print '<img src="/Giraff/giraff.jpeg">';
            }

            public function makeSound() {
                print 'booo';
            }
        }
        class Tiger extends Animals{
            private $animalName;

            public function __construct($animalName) {
                $this->animalName = $animalName;             
            }

            public function getImage() {
                print '<img src="/Tiger/tiger.jpeg">';
            }

            public function makeSound() {
                print 'ROAR';
            }
        }
        class Coconut extends Animals{
            private $animalName;

            public function __construct($animalName) {
                $this->animalName = $animalName;             
            }

            public function getImage() {
                print '<img src="/Coconut/coconut.jpeg">';
            }

            public function makeSound() {
                print 'mmmmmmm';
            }
        }

    
?>


<!--- Show results--->




    