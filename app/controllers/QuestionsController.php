<?php
class QuestionsController extends BaseController {

  public function showQuestions()
  {
    $questions = Question::all();
    return View::make('questions.list', array('questions' => $questions));
  }

  public function showFAQ()
  {
    $questions = DB::table('questions')->where('publicar', '=', '1')->get();
   
    $categorias = [
      'n' => [0, 1, 2, 3],
      'k' => ['convenios', 'materias', 'costos', 'tramites'],
      'v' => ['Convenios', 'Materias', 'Costos', 'Tr&aacute;mites'] 
    ];
    return View::make('questions.faq', array('questions' => $questions, 
					     'categorias' => $categorias));
  }  
  public function newQuestion()
  {
    return View::make('questions.create');
  }

  public function createQuestion()
  {
 //    Question::create(Input::all());

    $data = Input::all();
    $rules = array(
      'email' => 'required',
      'universidad' => 'required|alpha',
      'pregunta' => 'required'
    );

    $validator = Validator::make($data, $rules);
    if($validator->passes()) {
      Question::create($data);
    }
    else {
      $errors = $validator->messages();
      return Redirect::to('questions/new')->withErrors($validator);
    }

    return Redirect::to('/'); // debe dirigir al home page o algo
  }

  public function updateQuestion()
  {
    $emailBool = Input::get('emailBool');
    $publicar = Input::get('publicar');
    echo "<script>
           console.log('".$publicar."see');
         </script>";
    $data = array(
      'respuesta' => Input::get('respuesta'),
      'pregunta' => Input::get('pregunta')
    );
    $id = Input::get('id');
    $input = Question::find($id);
    $input->respuesta = Input::get('respuesta');
    $input->pregunta = Input::get('pregunta');   
    if($publicar) {
      $input->publicar = Input::get('publicar');
    } else {
      $input->publicar = false;
    }
    $input->save();

    if($emailBool == true) {
	Mail::pretend();
	Mail::send('questions.mail', $data, function($message) {	  
	  $message->to(Input::get('email'), 'Yisus')->subject('Raaainbow!');
	});      
    }
    return Redirect::to('questions/list');
  }

  public function deleteQuestion($id)
  {
    echo '<script>console.log($id);</script>';
    $input = Question::find($id);
    $input->delete();
    return Redirect::to('questions/list');    
  }

  public function seeQuestion($id)
  {
    $question = Question::find($id);
    return View::make('questions.see', array('question' => $question));
  }
  
}
?>