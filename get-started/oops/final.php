<?php
  class finalkey 
  {
      public function ftest() {
          echo finalkey::test();
      }
      final function moreTesting() {
          echo finalkey::moreTesting(). "called";
      }
  }
  class fkeyClass extends finalkey 
  {
      public function moreTesting() {
          echo childClass::moreTesting();
      }
  }
