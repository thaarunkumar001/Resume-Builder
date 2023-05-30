<?php
namespace Drupal\createresume\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CreateResume extends FormBase
{
    public function getFormId()
    {
        return 'resume_create';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['name'] = [ 
            '#type' => 'textfield', 
            '#title' => $this->t('Enter Name'), 
            '#required' => TRUE, ]; 
        $form['email'] = [ 
            '#type' => 'email', 
            '#title' => $this->t('Enter email'), 
            '#required' => TRUE, ]; 
        $form['phone'] = [ 
            '#type' => 'number', 
            '#title' => $this->t('Enter phone no'), 
            '#required' => TRUE, ]; 
        $form['address'] = [ 
                '#type' => 'textarea', 
                '#title' => $this->t('Enter address'), 
                '#required' => TRUE, ]; 
                    $form['postgraduation'] = [ 
                        '#type' => 'number', 
                        '#title' => $this->t('Postgraduation Percentage'), 
                        '#required' => FALSE, ];
                        $form['undergraduate'] = [ 
                            '#type' => 'number', 
                            '#title' => $this->t('Undergraduate Percentage'), 
                            '#required' => FALSE, ];
                            $form['tentn'] = [ 
                                '#type' => 'number', 
                                '#title' => $this->t('10th Percentage'), 
                                '#required' => FALSE, ];
                                $form['internship'] = [ 
                                    '#type' => 'textarea', 
                                    '#title' => $this->t('Internship Details'), 
                                    '#required' => FALSE, ];
                                    $form['skills'] = [ 
                                        '#type' => 'textarea', 
                                        '#title' => $this->t('Skills'), 
                                        '#required' => FALSE, ];
        // $form['details'] = [
        //     '#type' => 'select',
        //     '#title' => $this->t('Details'),
        //     '#options' => [
        //       'basic' => $this->t('Basic Details'),
        //       'education' => $this->t('Educational Qualification'),
        //       'others' => $this->t('Others'),
        //     ],
        //     '#default_value' => '',
        //     '#attributes' => ['class' => ['details-select']],
        //     '#ajax' => [
        //       'callback' => '::toggleFieldsets',
        //       'wrapper' => 'form-wrapper',
        //       'method' => 'replace',
        //     ],
        //   ];
      
        //   $form['form_wrapper'] = [
        //     '#type' => 'container',
        //     '#attributes' => ['id' => 'form-wrapper'],
        //   ];
      
        //   $form['form_wrapper']['basic_details'] = [
        //     '#type' => 'fieldset',
        //     '#title' => $this->t('Basic Details'),
        //     '#states' => [
        //       'visible' => [
        //         ':input[name="details"]' => ['value' => 'basic'],
        //       ],
        //     ],
        //   ];
      
        //   $form['form_wrapper']['basic_details']['name'] = [
        //     '#type' => 'textfield',
        //     '#title' => $this->t('Enter Name'),
        //     '#required' => TRUE,
        //   ];
      
        //   $form['form_wrapper']['basic_details']['email'] = [
        //     '#type' => 'email',
        //     '#title' => $this->t('Enter email'),
        //     '#required' => TRUE,
        //   ];
      
        //   $form['form_wrapper']['basic_details']['phone'] = [
        //     '#type' => 'tel',
        //     '#title' => $this->t('Enter phone no'),
        //     '#required' => TRUE,
        //   ];
      
        //   $form['form_wrapper']['education_qualification'] = [
        //     '#type' => 'fieldset',
        //     '#title' => $this->t('Educational Qualification'),
        //     '#states' => [
        //       'visible' => [
        //         ':input[name="details"]' => ['value' => 'education'],
        //       ],
        //     ],
        //   ];
      
        //   $form['form_wrapper']['education_qualification']['postgraduation'] = [
        //     '#type' => 'number',
        //     '#title' => $this->t('Postgraduation Percentage'),
        //     '#required' => FALSE,
        //   ];
      
        //   $form['form_wrapper']['education_qualification']['undergraduate'] = [
        //     '#type' => 'number',
        //     '#title' => $this->t('Undergraduate Percentage'),
        //     '#required' => FALSE,
        //   ];
      
        //   $form['form_wrapper']['education_qualification']['tentn'] = [
        //     '#type' => 'number',
        //     '#title' => $this->t('10th Percentage'),
        //     '#required' => FALSE,
        //   ];
      
        //   $form['form_wrapper']['others'] = [
        //     '#type' => 'fieldset',
        //     '#title' => $this->t('Others'),
        //     '#states' => [
        //       'visible' => [
        //         ':input[name="details"]' => ['value' => 'others'],
        //       ],
        //     ],
        //   ];
      
        //   $form['form_wrapper']['others']['internship'] = [
        //     '#type' => 'textarea',
        //     '#title' => $this->t('Internship Details'),
        //     '#required' => FALSE,
        //   ];
      
        //   $form['form_wrapper']['others']['skills'] = [
        //     '#type' => 'textarea',
        //     '#title' => $this->t('Skills'),
        //     '#required' => FALSE,
        //   ];
      
          $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
          ];
      
          return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // Retrieve form values using $form_state->getValue()
        $name = $form_state->getValue('name');
        $email = $form_state->getValue('email');
        $phone = $form_state->getValue('phone');
        $address = $form_state->getValue('address');
        $educationqualification = $form_state->getValue('educationqualification');
        $postgraduation = $form_state->getValue('postgraduation');
        $undergraduate = $form_state->getValue('undergraduate');
        $tenth = $form_state->getValue('tenth');
        $internship = $form_state->getValue('internship');
        $skills = $form_state->getValue('skills');
//         $name = $form_state->getValue(['form_wrapper','basic_details', 'name']);
// $email = $form_state->getValue(['form_wrapper','basic_details', 'email']);
// $phone = $form_state->getValue(['form_wrapper','basic_details', 'phone']);
// $address = $form_state->getValue(['form_wrapper','basic_details', 'address']);

// $postgraduation = $form_state->getValue(['form_wrapper','educational_qualification', 'postgraduation']);
// $undergraduate = $form_state->getValue(['form_wrapper','educational_qualification', 'undergraduate']);
// $tenth = $form_state->getValue(['form_wrapper','educational_qualification', 'tentn']);

// $internship = $form_state->getValue(['form_wrapper','others', 'internship']);
// $skills = $form_state->getValue(['form_wrapper','others', 'skills']);


        // Connect to the database
        $connection = mysqli_connect('localhost', 'root', '', 'resumebuilder');

        // Check if the connection was successful
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Process the form submission
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Get the form data
            
            // $employeeName = mysqli_real_escape_string($connection, $_POST["employeeName"]);
            // $employeeSalary = mysqli_real_escape_string($connection, $_POST["employeeSalary"]);
        
            // Insert the data into the database
            $sql = "INSERT INTO basicdata(rname, remail, phone,raddress,postgraduation,graduation,tenthmark,InternshipDetails,skills) VALUES ('$name', '$email','$phone','$address','$postgraduation','$undergraduate','$tenth','$internship','$skills')";
        
            if (mysqli_query($connection, $sql)) {
              $this->messenger()->addStatus($this->t('Employee added successfully.'));
            } else {
              $this->messenger()->addError($this->t('Failed to add employee.'));
            }
          }
}
}

