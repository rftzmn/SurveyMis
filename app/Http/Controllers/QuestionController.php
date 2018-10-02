<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Answer;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         $data['question1']=Question::where('section',1)->get();
         $data['question2']=Question::where('section',2)->get();
         $data['question3']=Question::where('section',3)->get();
         $data['question4']=Question::where('section',4)->get();
         $data['question5']=Question::where('section',5)->get();
         $data['question6']=Question::where('section',6)->get();
         $data['question7']=Question::where('section',7)->get();

    
       return view('question',$data);
    }

   
    public function store(Request $request)
    {

        
        $lastanswer = Answer::orderBy('answer_id', 'DESC')->first();

        if(!$lastanswer){
            foreach ($request->all() as $key => $value) {
            $answer = new Answer();
            $answer->qsn_id     =  $key;
            $answer->answer     = $value;
            $answer->answer_id  = 1;

            $answer->save();
        }
        $data['answer'] = Answer::where('answer_id',1)->get();
    }else{
        foreach ($request->all() as $key => $value) {
            $answer = new Answer();
            $answer->qsn_id     =  $key;
            $answer->answer     = $value;
            $answer->answer_id  = $lastanswer->answer_id+1;

            $answer->save();
        }
        $id=$lastanswer->answer_id+1;
        $data['answer'] = Answer::where('answer_id',$id)->get();
        
    }
	    
        return view('result',$data);
    }
	
	public function chart(){
		$answer = Answer::distinct('answer_id')->count('answer_id');
		$qsn1 = Answer::where('qsn_id',1)->get();
		$result1='';
		foreach($qsn1 as $ww){
			$result1=(int)$result1+(int)$ww->answer;
		}
		$data['resultqsn1']=$result1/(int)$answer;
		
		$qsn2 = Answer::where('qsn_id',2)->get();
		$result2='';
		foreach($qsn2 as $ww1){
			$result2=(int)$result2+(int)$ww1->answer;
		}
		$data['resultqsn2']=$result2/(int)$answer;
		
		$qsn3 = Answer::where('qsn_id',3)->get();
		$result3='';
		foreach($qsn3 as $ww2){
			$result3=(int)$result3+(int)$ww2->answer;
		}
		$data['resultqsn3']=$result3/(int)$answer;
		
		
		$qsn4 = Answer::where('qsn_id',4)->get();
		$result4='';
		foreach($qsn4 as $ww3){
			$result4=(int)$result4+(int)$ww3->answer;
		}
		$data['resultqsn4']=$result4/(int)$answer;
		
		
		$qsn5 = Answer::where('qsn_id',5)->get();
		$result5='';
		foreach($qsn5 as $ww4){
			$result5=(int)$result5+(int)$ww4->answer;
		}
		$data['resultqsn5']=$result5/(int)$answer;
		
		$qsn6 = Answer::where('qsn_id',6)->get();
		$result6='';
		foreach($qsn6 as $ww5){
			$result6=(int)$result6+(int)$ww5->answer;
		}
		$data['resultqsn6']=$result6/(int)$answer;
		
		
		$qsn7 = Answer::where('qsn_id',7)->get();
		$result7='';
		foreach($qsn7 as $ww6){
			$result7=(int)$result7+(int)$ww6->answer;
		}
		$data['resultqsn7']=$result7/(int)$answer;
		
		
		
		$qsn8 = Answer::where('qsn_id',8)->get();
		$result8='';
		foreach($qsn8 as $ww7){
			$result8=(int)$result8+(int)$ww7->answer;
		}
		$data['resultqsn8']=$result8/(int)$answer;
		
		$qsn9 = Answer::where('qsn_id',9)->get();
		$result9='';
		foreach($qsn9 as $ww8){
			$result9=(int)$result9+(int)$ww8->answer;
		}
		$data['resultqsn9']=$result9/(int)$answer;
		
		
		
		$qsn11 = Answer::where('qsn_id',11)->get();
		$result11='';
		foreach($qsn11 as $ww9){
			$result11=(int)$result11+(int)$ww9->answer;
		}
		$data['resultqsn11']=$result11/(int)$answer;
		
		$qsn12= Answer::where('qsn_id',12)->get();
		$result12='';
		foreach($qsn12 as $ww11){
			$result12=(int)$result12+(int)$ww11->answer;
		}
		$data['resultqsn12']=$result12/(int)$answer;
		
		
		
		$qsn13 = Answer::where('qsn_id',13)->get();
		$result13='';
		foreach($qsn13 as $ww12){
			$result13=(int)$result13+(int)$ww12->answer;
		}
		$data['resultqsn13']=$result13/(int)$answer;
		
		$qsn14 = Answer::where('qsn_id',14)->get();
		$result14='';
		foreach($qsn14 as $ww13){
			$result14=(int)$result14+(int)$ww13->answer;
		}
		$data['resultqsn14']=$result14/(int)$answer;
		
		$qsn15 = Answer::where('qsn_id',15)->get();
		$result15='';
		foreach($qsn15 as $ww14){
			$result15=(int)$result15+(int)$ww14->answer;
		}
		$data['resultqsn15']=$result15/(int)$answer;
		
		$qsn16 = Answer::where('qsn_id',16)->get();
		$result16='';
		foreach($qsn16 as $ww15){
			$result16=(int)$result16+(int)$ww15->answer;
		}
		$data['resultqsn16']=$result16/(int)$answer;
		
		$qsn17 = Answer::where('qsn_id',17)->get();
		$result17='';
		foreach($qsn17 as $ww16){
			$result17=(int)$result17+(int)$ww16->answer;
		}
		$data['resultqsn17']=$result17/(int)$answer;
		
				$qsn18 = Answer::where('qsn_id',18)->get();
		$result18='';
		foreach($qsn18 as $ww17){
			$result18=(int)$result18+(int)$ww17->answer;
		}
		$data['resultqsn18']=$result18/(int)$answer;
		
		
		$qsn19 = Answer::where('qsn_id',19)->get();
		$result19='';
		foreach($qsn19 as $ww18){
			$result19=(int)$result19+(int)$ww18->answer;
		}
		$data['resultqsn19']=$result19/(int)$answer;
		
		
		$qsn20 = Answer::where('qsn_id',20)->get();
		$result20='';
		foreach($qsn20 as $ww19){
			$result20=(int)$result20+(int)$ww19->answer;
		}
		$data['resultqsn20']=$result20/(int)$answer;
		
		$qsn21 = Answer::where('qsn_id',21)->get();
		$result21='';
		foreach($qsn21 as $ww20){
			$result21=(int)$result21+(int)$ww20->answer;
		}
		$data['resultqsn21']=$result21/(int)$answer;
		
		
		$qsn22 = Answer::where('qsn_id',22)->get();
		$result22='';
		foreach($qsn22 as $ww21){
			$result22=(int)$result22+(int)$ww21->answer;
		}
		$data['resultqsn22']=$result22/(int)$answer;
		
		
		$qsn23 = Answer::where('qsn_id',23)->get();
		$result23='';
		foreach($qsn23 as $ww22){
			$result23=(int)$result23+(int)$ww22->answer;
		}
		$data['resultqsn23']=$result23/(int)$answer;
		
		$qsn24 = Answer::where('qsn_id',24)->get();
		$result24='';
		foreach($qsn24 as $ww23){
			$result24=(int)$result24+(int)$ww23->answer;
		}
		$data['resultqsn24']=$result24/(int)$answer;
		
		$qsn25 = Answer::where('qsn_id',25)->get();
		$result25='';
		foreach($qsn25 as $ww24){
			$result25=(int)$result25+(int)$ww24->answer;
		}
		$data['resultqsn25']=$result25/(int)$answer;
		
		$qsn26 = Answer::where('qsn_id',26)->get();
		$result26='';
		foreach($qsn26 as $ww25){
			$result26=(int)$result26+(int)$ww25->answer;
		}
		$data['resultqsn26']=$result26/(int)$answer;
		
		
		
		
		
		return view('chart',$data);
		
		
		
	}
		

   
}
