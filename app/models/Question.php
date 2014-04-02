<?php
class Question extends Eloquent {
  protected $table = 'questions';
  protected $fillable = array('pregunta', 'carrera', 'tematica', 'universidad', 'email');
}
?>