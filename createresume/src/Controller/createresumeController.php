<?php

namespace Drupal\createresume\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\createresume\Form\CreateResume;

class createresumeController extends ControllerBase {

  public function createresumeList() {
    $connection = mysqli_connect('localhost', 'root', '', 'resumebuilder');

    if (!$connection) {
      die("Connection failed: " . mysqli_connect_error());
    }
   

   
    $sql = "SELECT * FROM basicdata";
    $resume = mysqli_query($connection, $sql);
    mysqli_close($connection);
    $form = \Drupal::formBuilder()->getForm(CreateResume::class);
    return [
      '#theme' => 'createresume',
      '#title' => 'Create Student Details',
      '#students' => $resume,
      '#form' => $form,
    ];
  }

}

?>