<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once("adb.php");

/**
 * Description of student_has_assignement_class
 *
 * @author Kingston
 */
class student_has_assignement_class extends adb {

   function student_has_assignement_class() {
      adb::adb();
   }

   function parent_unsign_off($sign, $student_id, $given_hw_id) {
      $query = "Update mw_hw_tracker_student_has_assignment set completed = $sign, date_modified = now()
 where  given_hw_id = $given_hw_id and student_id=$student_id";
//        print $query;
//        print mysql_error();
      return $this->query($query);
   }

   function parent_sign_off($sign, $student_id, $given_hw_id) {
      $query = "Update mw_hw_tracker_student_has_assignment set completed = $sign, date_modified = now()
 where  given_hw_id = $given_hw_id and student_id=$student_id";
//        print $query;
//        print mysql_error();
      return $this->query($query);
   }

}
