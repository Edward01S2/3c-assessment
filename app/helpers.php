<?php

/**
 * Theme helpers.
 */

namespace App;

add_action('gform_pre_submission_3', function($form) {

  $score = 0;
  $content = '';
  $level = '';


  if($q1 = rgpost('input_20')) {
    $q1gw = [1, 2, 6, 8];
    if(in_array($q1, $q1gw)) {
      $content = 'gwgr';
    }
    if($q1 == '5') {
      $content = 'fo';
    }
    if($q1 == '4') {
      $content = 'rmc';
    }
    if($q1 == '3') {
      $content = 'so';
    }
    if($q1 == '7') {
      $content = 'wr';
    }

    $_POST['input_29'] = $content;
  }

  if($q2 = rgpost('input_22')) {
    switch($q2) {
      case 1: {
        $score += 0.5;
        break;
      }
      case 2: {
        $score += 1;
        break;
      }
      case 3: {
        $score += 1.5;
        break;
      }
      case 4: {
        $score += 2;
        break;
      }
    }

    $_POST['input_28'] = $score;
  }

  if($qind = rgpost('input_26')) {
    if($qind == 'none') {
      $_POST['input_26'] = 'other';
    }
  }

  //$q4 = \GFAPI::get_field( $form, 23 );

  if($q4 = \GFAPI::get_field( $form, 23 ) ) {
    $q4v = $q4->get_value_submission( array() );
    $q4v = array_filter( $q4v );

    $count = count($q4v);

    if($count <= 5) {
      if($q2 == '1') {
        $dsn = 2;
      }
      else {
        $dsn = 1;
      }
    }
    if($count > 5 && $count <= 8) {
      if($q2 <= 3) {
        $dsn = 2;
      }
    }
    if($count > 8) {
      if($q2 <= 3) {
        $dsn = 3;
      }
    }

    $_POST['input_27'] = $dsn;

    foreach($q4v as $k => $v) {

      switch($v) {
        case 1: {
          $score += 1.5;
          break;
        }
        case 2: {
          $score += 1.5;
          break;
        }
        case 3: {
          $score += 1.5;
          break;
        }
        case 4: {
          $score += 1;
          break;
        }
        case 5: {
          $score += 1;
          break;
        }
        case 6: {
          $score += 2;
          break;
        }
        case 7: {
          $score += 2;
          break;
        }
        case 8: {
          $score += 1;
          break;
        }
        case 9: {
          $score += 2.5;
          break;
        }
        case 10: {
          $score += 1.5;
          break;
        }
        case 11: {
          $score += 1;
          break;
        }
        case 12: {
          $score += 2.5;
          break;
        }
        case 13: {
          $score += 1.5;
          break;
        }
        case 14: {
          $score += 1.5;
          break;
        }
        case 15: {
          $score += 2.5;
          break;
        }
        case 16: {
          $score += 3;
          break;
        }
      }
    }
  
    //error_log( print_r($q4v, true ) );
  }

  if($q5 = rgpost('input_24')) {
    $score += $q5;

    if($q5 <= 3) { 
      $level = '1';
    }
    if($q5 > 3 && $q5 <= 7) {
      $level = '2';
    }
    if($q5 > 7) {
      $level = '3';
    }

    $_POST['input_30'] = $level;
  }

  $_POST['input_28'] = round($score, 0);


}, 10, 1);

add_filter( 'gform_confirmation', function ( $confirmation, $form, $entry ) {
  //error_log(print_r($confirmation['redirect'], true));
  //error_log(print_r($form, true));
  if( $form['id'] == '3' ) {

    $level = '';
    $content = '';
    $industry = '';
    $score = '';

    foreach ( $form['fields'] as $field ) {
      //$field_value = $field->get_value_export( $entry, $field->id, true );

      if($field->id == '29') { //First Question
        $content = rgar($entry, $field->id);
      }
 
      if($field->id == '30') { //Question 4     
        $level = rgar($entry, $field->id);
      }

      if($field->id == '26') { //Question 4
        $industry = rgar($entry, $field->id);
      }

      if($field->id == '28') { //Question 4
        $score = rgar($entry, $field->id);
      }
    }

    //error_log( print_r( 'Confirmff: ' . $confirmation, true ) );

  $confirmation = array( 'redirect' => '/result' );
  $confirmation['redirect'] = add_query_arg( array( 'con' => $content, 'ind' => $industry, 'sc' => $score, 'lvl' => $level), $confirmation['redirect'] );

  //   // error_log( print_r( 'Confirm: ' . $confirmation['redirect'], true ) );
  }

  return $confirmation;

}, 11, 3 );