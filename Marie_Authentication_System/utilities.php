<?php
/**
* @param required_fields_array, n array containing the list of all required fields
* @return array, containing all error messages
*/
function check_empty_fields(required_fields_array) {
  //initialize an array to store error messages
  $form_errors = array();

  //loop through the required fields array and populair the form error array
  foreach($required_fields_array as $name_of_field) {
    if(!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL){
      $form_errors[] = $name_of_field . "est un champ requis";
    }
  }

  return $form_errors;
}



/**
* @param $form_errors_array, the array holding all
* errors which we want to loop through
* @return string, list containing all error messages
*/

function show_errors($form_errors) {
  $errors = "";

  //loop through error array and display all items in a list
  foreach($form_errors_array as $the_error) {
    $errors .="<li> {$the_error} </li>";
  }
$errors .= "</ul></p>"
return $errors;

}
