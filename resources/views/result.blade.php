@extends('common')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <div class="card-body text-center">
        <h1>Thanks For Survey</h1>
        <p>Your survey Result</p>
        <table class="table">
        <tr>
        	 <td>Question</td>
            <td>Answer</td>
          </tr>
           @foreach($answer as $answer)
           @if($answer->qsn_id!="_token")
          <tr>
            <td>{{ (@App\Question::find($answer->qsn_id)->question)?@App\Question::find($answer->qsn_id)->question:$answer->qsn_id}}</td>
            <td>{{$answer->answer}}</td>
          </tr>
          @endif
           @endforeach
        </table>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
  
</section>
@endsection