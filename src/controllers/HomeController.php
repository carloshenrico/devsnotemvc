<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\HeaderHandlers;
use src\handlers\NoteHandlers;
use src\models\Note;

class HomeController extends Controller {


    public function __construct()
    {
        HeaderHandlers::headerPermission();
    }

    public function getList(){
        $notes = Note::select()->get();
        $array['result'] = $notes;
        echo json_encode($array, JSON_UNESCAPED_UNICODE);
    }
    
    public function get($id){
        if(is_numeric($id['id'])){
            echo NoteHandlers::read($id);
        }else{
            $array['error'] = 'Apenas número';
            echo json_encode($array, JSON_UNESCAPED_UNICODE);
        }
    }



    public function add(){

        $title = filter_input(INPUT_POST, 'title');
        $body = filter_input(INPUT_POST, 'body');

        if($title && $body){

            Note::insert(['title' => $title, 'body' => $body])->execute();
            $array['result'] = [
                'title' => $title,
                'body' => $body
            ];
            echo json_encode($array, JSON_UNESCAPED_UNICODE);
            

        }else{
            $array['error'] = 'Campos [title] ou [body] estão vazios';
            echo json_encode($array, JSON_UNESCAPED_UNICODE);
        }
    }

    public function update($id){
        $array['oi'] = 'oi';
        echo json_encode($array);
        exit;
        $title = filter_input(INPUT_POST, 'title');
        $body = filter_input(INPUT_POST, 'body');

        if(is_numeric($id['id'])){
            NoteHandlers::updateId($id, $title, $body);
        }else{
            $array['error'] = 'Apenas número';
            echo json_encode($array, JSON_UNESCAPED_UNICODE);
        }
    }
    public function delete($id){
        print_r($id);
    }

}