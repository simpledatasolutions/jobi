<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{
    public function getQuestions(Request $request)
    {
        $question_id = $request->question_id;
        $answer = $request->answer;
        $next_question_id = '';

        $query = DB::table('answers')->where('question_id', $question_id)->get();

        foreach ($query as $q) {
            if ($this->num_cond(strtolower($answer), $q->logic, strtolower($q->answer))) {
                $next_question_id = $q->next_question_id;
            }
        }

        if (!empty($next_question_id)) {
            $search = DB::table('questions')->where('question_id', $next_question_id)->get();

            $res = '<div class="form-group">
                        <label>' . $search[0]->question . '</label>
                        <input type="text" class="form-control" question-id="' . $search[0]->question_id . '" placeholder="Answer">
                    </div>';

            return $res;
        }

        return '<p>Have a nice day!</p>';
    }

    private function num_cond($var1, $op, $var2)
    {
        switch ($op) {
            case "=":
                return $var1 == $var2;
            case "!=":
                return $var1 != $var2;
            case ">=":
                return $var1 >= $var2;
            case "<=":
                return $var1 <= $var2;
            case ">":
                return $var1 >  $var2;
            case "<":
                return $var1 <  $var2;
            case "LIKE":
                if (stripos($var1, $var2) !== false) return true;
            default:
                return true;
        }
    }
}
