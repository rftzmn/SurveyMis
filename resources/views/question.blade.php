@extends('common')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <div class="card-body text-center">
        <h1>Technostress in Primary and Secondary level Teacher</h1>
        <p>Instructions : Please read each descriptive statement carefully and indicate your choice by circling the appropriate number (on a 7-point scale given below), that is, the number that best describes how you feel about the statements</p>
        <table class="table" border="1px solid">
          <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Strongly Disagree</td>
            <td>Disagree</td>
            <td>Slightly Disagree</td>
            <td>Neutral</td>
            <td>Slightly Agree</td>
            <td>Agree</td>
            <td>Strongly Agree</td>
          </tr>
        </table>
        <P>Perceived ease of use refers to the degree to which a person believes that using a particular system would be free of effort.</P>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="container-fluid">
 <form role="form" method="post" action="{{url('save')}}" >
 {!! csrf_field() !!}
<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card-primary">
              <div class="card-header">
                <h3 class="card-title">Work Overload</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              @foreach($question1 as $question)
              <div class="table-responsive">
              <table class="table" style="table-layout:revert; overflow: hidden;">
              	<tr>
              		<td style="width:50%">
              			<label for="exampleInputEmail1">{{$question->question}}</label>
              		</td>
              		 @for($i=1; $i<=7;$i++)
              	 	<td>
              	 	 <input type="{{$question->type}}" class="option-input radio" required value="{{$i}}" id="{{$i}}" name="{{$question->id}}">
              	 	</td>
                 @endfor
              	</tr>
              </table>
              </div>
               @endforeach
             
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card-primary">
              <div class="card-header">
                <h3 class="card-title">Work HomeConflict</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
              @foreach($question2 as $question)
              <div class="table-responsive">
              <table class="table" style="table-layout:revert; overflow: hidden;">
              	<tr>
              		<td style="width:50%">
              			<label for="exampleInputEmail1">{{$question->question}}</label>
              		</td>
              		 @for($i=1; $i<=7;$i++)
              	 	<td>
              	 	 <input type="{{$question->type}}" class="option-input {{$question->type}}" required value="{{$i}}" id="{{$i}}" name="{{$question->id}}">
              	 	</td>
                 @endfor
              	</tr>
              </table>
              </div>
               @endforeach
             
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card-primary">
              <div class="card-header">
                <h3 class="card-title">Strain</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              @foreach($question3 as $question)
              <div class="table-responsive">
              <table class="table" style="table-layout:revert; overflow: hidden;">
              	<tr>
              		<td style="width:50%">
              			<label for="exampleInputEmail1">{{$question->question}}</label>
              		</td>
              		 @for($i=1; $i<=7;$i++)
              	 	<td>
              	 	 <input type="{{$question->type}}" class="option-input radio" required value="{{$i}}" id="{{$i}}" name="{{$question->id}}">
              	 	</td>
                 @endfor
              	</tr>
              </table>
              </div>
               @endforeach
             
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>

        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card-primary">
              <div class="card-header">
                <h3 class="card-title">Invasion ofPrivacy</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              @foreach($question4 as $question)
              <div class="table-responsive">
              <table class="table" style="table-layout:revert; overflow: hidden;">
              	<tr>
              		<td style="width:50%">
              			<label for="exampleInputEmail1">{{$question->question}}</label>
              		</td>
              		 @for($i=1; $i<=7;$i++)
              	 	<td>
              	 	 <input type="{{$question->type}}" class="option-input radio" required value="{{$i}}" id="{{$i}}" name="{{$question->id}}">
              	 	</td>
                 @endfor
              	</tr>
              </table>
              </div>
               @endforeach
             
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>

        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card-primary">
              <div class="card-header">
                <h3 class="card-title">Role Ambiguity</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              @foreach($question5 as $question)
              <div class="table-responsive">
              <table class="table" style="table-layout:revert; overflow: hidden;">
              	<tr style="width:50%">
              		<td>
              			<label for="exampleInputEmail1">{{$question->question}}</label>
              		</td>
              		 @for($i=1; $i<=7;$i++)
              	 	<td>
              	 	 <input type="{{$question->type}}" class="option-input radio" required value="{{$i}}" id="{{$i}}" name="{{$question->id}}">
              	 	</td>
                 @endfor
              	</tr>
              </table>
              </div>
               @endforeach
             
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>

        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card-primary">
              <div class="card-header">
                <h3 class="card-title">Job satisfaction</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              @foreach($question6 as $question)
              <div class="table-responsive">
              <table class="table" style="table-layout:revert; overflow: hidden;">
              	<tr>
              		<td style="width:50%">
              			<label for="exampleInputEmail1">{{$question->question}}</label>
              		</td>
              		 @for($i=1; $i<=7;$i++)
              	 	<td>
              	 	 <input type="{{$question->type}}" class="option-input radio" required value="{{$i}}" id="{{$i}}" name="{{$question->id}}">
              	 	</td>
                 @endfor
              	</tr>
              </table>
              </div>
               @endforeach
             
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>

        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card-primary">
              <div class="card-header">
                <h3 class="card-title">Organizationalcommitment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              @foreach($question7 as $question)
              <div class="table-responsive">
              <table class="table" style="table-layout:revert; overflow: hidden;">
              	<tr>
              		<td style="width:50%">
              			<label for="exampleInputEmail1">{{$question->question}}</label>
              		</td>
              		 @for($i=1; $i<=7;$i++)
              	 	<td>
              	 	 <input type="{{$question->type}}" class="option-input radio" required value="{{$i}}" id="{{$i}}" name="{{$question->id}}">
              	 	</td>
                 @endfor
              	</tr>
              </table>
              </div>
               @endforeach
              
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>


         <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card-primary">
              <div class="card-header">
                <h3 class="card-title">Demographic Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="table-responsive">
              <table class="table" style="table-layout:revert; overflow: hidden;">
                <tr style="width:50%">
                  <td>
                    <label for="exampleInputEmail1">1. Gender ?</label>
                  </td>
                  <td>
                   <input type="radio" class="option-input radio" required  id="gender" name="gender" value="Male">&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;&nbsp; Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="gender" name="gender" value="Female">&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;&nbsp; Female
                  </td>                 
                </tr>
                <tr>
                  <td>
                    <label for="exampleInputEmail1">2. Age</label>
                  </td>
                  <td>
                   <input type="text" class="option-input" required  id="age" name="age">
                   
                </tr>

                <tr>
                  <td>
                    <label for="exampleInputEmail1">3. Duration of service ? </label>
                  </td>
                  <td>
                   <input type="radio" class="option-input radio" required  id="service" name="service" value="<5">&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;&nbsp; < 5 years &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="service" name="service" value="6-10">&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;&nbsp; 6-10 years &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="service" name="service" value="11-15">&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;&nbsp; 11-15 years &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="service" name="service" value=">15">&nbsp;&nbsp;&nbsp;4.&nbsp;&nbsp;&nbsp; >15years &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </td>                 
                </tr>

                <tr>
                  <td>
                    <label for="exampleInputEmail1">4. Year of current organization ? </label>
                  </td>
                  <td>
                   <input type="radio" class="option-input radio" required  id="organization" name="organization" value="<5">&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;&nbsp; < 5 years &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="organization" name="organization" value="6-10">&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;&nbsp; 6-10 years &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="organization" name="organization" value="11-15">&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;&nbsp; 11-15 years &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="organization" name="organization" value=">15">&nbsp;&nbsp;&nbsp;4.&nbsp;&nbsp;&nbsp; >15years &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </td>                 
                </tr>

                <tr>
                  <td>
                    <label for="exampleInputEmail1">5. Teaching Area ?</label>
                  </td>
                  <td>
                   <input type="radio" class="option-input radio" required  id="teaching" name="teaching" value="Arts">&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;&nbsp; Arts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="teaching" name="teaching" value="Science">&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;&nbsp; Science &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="teaching" name="teaching" value="Commerce">&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;&nbsp; Commerce &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </td>                 
                </tr>

                <tr>
                  <td>
                    <label for="exampleInputEmail1">6. Education ?</label>
                  </td>
                  <td>
                   <input type="radio" class="option-input radio" required  id="education" name="education" value="ssc">&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;&nbsp; S.S.C &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="education" name="education" value="hsc">&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;&nbsp; H.S.C &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="education" name="education" value="postgraduate">&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;&nbsp; Postgraduate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="education" name="education" value="postgraduate">&nbsp;&nbsp;&nbsp;4.&nbsp;&nbsp;&nbsp; Ph.D &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="education" name="education" value="postgraduate">&nbsp;&nbsp;&nbsp;5.&nbsp;&nbsp;&nbsp; Bachelor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </td>                 
                </tr>

                <tr>
                  <td>
                    <label for="exampleInputEmail1">7. Which School are you from ?</label>
                  </td>
                  <td>
                   <input type="text" class="option-input" required  id="school" name="school">
                </tr>

                 <tr>
                  <td>
                    <label for="exampleInputEmail1">8. What academic Programme are you taking ?</label>
                  </td>
                  <td>
                   <input type="text" class="option-input" required  id="academic" name="academic">
                </tr>

                 <tr>
                  <td>
                    <label for="exampleInputEmail1">9. How long you spent per day with IT/IS ?</label>
                  </td>
                  <td>
                   <input type="radio" class="option-input radio" required  id="spent" name="spent" value=">1">&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;&nbsp; Less then 1 hour &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="spent" name="spent" value="1-5">&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;&nbsp; 1 to 5 hours &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="spent" name="spent" value="6-10">&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;&nbsp; 6 to 10 hours &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="spent" name="spent" value="<10">&nbsp;&nbsp;&nbsp;4.&nbsp;&nbsp;&nbsp; More than 10 hours &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   
                  </td>                 
                </tr>

                <tr>
                  <td>
                    <label for="exampleInputEmail1">10. ICT Training Experience  ?</label>
                  </td>
                  <td>
                   <input type="radio" class="option-input radio" required  id="training" name="training" value="Yes">&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;&nbsp; Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="training" name="training" value="No">&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;&nbsp; No
                  </td>                 
                </tr>

                  <tr>
                  <td>
                    <label for="exampleInputEmail1">10. Technology Use  ?</label>
                  </td>
                  <td>
                   <input type="radio" class="option-input radio" required  id="technology" name="technology" value="Computer">&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;&nbsp; Computer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="technology" name="technology" value="Mobile">&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;&nbsp; Mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="technology" name="technology" value="Networking Sites">&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;&nbsp; Networking Sites &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="technology" name="technology" value="Application">&nbsp;&nbsp;&nbsp;4.&nbsp;&nbsp;&nbsp; Application &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="option-input radio" required  id="technology" name="technology" value="other">&nbsp;&nbsp;&nbsp;5.&nbsp;&nbsp;&nbsp; other &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </td>                 
                </tr>


              </table>
              </div>
              
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>


        <div class="card-footer">
        	<button type="submit" class="btn btn-lg btn-primary pull-right">Submit</button>
        </div>

        
</form>
</div>

@endsection

