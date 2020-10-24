<?php

namespace src\handlers;

use src\models\Note;

class NoteHandlers{

    public static function read($id){
        $anotacao = Note::select()->where('id', $id)->one();
        if($anotacao > 0){
            $array['error'] = [
                $anotacao
            ];
            echo json_encode($array, JSON_UNESCAPED_UNICODE);
        }else{
            $array = [];
            $array['error'] = 'Não existe uma anotação com esse ID';
            echo json_encode($array, JSON_UNESCAPED_UNICODE);
        }
    }


    public function updateId($id, $title, $body){
        $anotacao = Note::select()->where('id', $id)->one();

        if($anotacao > 0){

            if(!empty($title)){
                $title = $anotacao['title'];
            }
            if(!empty($body)){
                $body = $anotacao['body'];
            }

            Note::update()
            ->set(['title' => $title, 'body' => $body])
            ->where('id', $id)
            ->execute();

        }else{
            $array['error'] = $array['error'] = 'Não existe uma anotação com esse ID';
            echo json_encode($array, JSON_UNESCAPED_UNICODE);
        }
    }

}