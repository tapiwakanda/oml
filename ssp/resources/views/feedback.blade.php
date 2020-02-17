@extends('layout')
@section('content')
<div class="container claimContainer">
    <h2>Submit your Feed back Details Below</h2>
    {!! Form::open(['action' => 'feedBackController@save', 'method'=> 'POST']) !!}
        <div class="form-group">
            {{Form::label('date', 'Date')}}
            {{Form::date('date', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('fullName', 'Full Name')}}
            {{Form::text('fullName', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('emailAddress', 'Email')}}
            {{Form::Email('emailAddress', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('landLineNumber', 'Land Line')}}
            {{Form::text('landLineNumber', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('cellNumber', 'Cell Number')}}
            {{Form::text('cellNumber', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('accountNumber', 'accountNumber')}}
            {{Form::text('accountNumber', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('branchDepartment', 'Branch Department')}}
            {{Form::text('branchDepartment', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('rating', 'Based on your overall experience with us, how likey would you recommend us your family and friends. Rate us on a scale of 1 to 10 with 1 being the least and 10 being the most')}}
            {{Form::select('rating',
             ['1' => '1', 
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10'
        ], ['placeholder'=>'Give A Rating...'])}}
        </div>

        <div class="form-group">
            {{Form::label('ratingExplanation', 'Please Explain your above Rating')}}
            {{Form::text('ratingExplanation', '', ['class'=>'form-control'])}}
        </div>

        

        

        @csrf

        {{Form::submit('Submit')}}
        

    {!! Form::close() !!}
    <button class="btn" onclick="goBack()">Cancel</button>

</div>
<script type="text/javascript">
    function goBack(){
        window.history.back();
    }
</script>
@endsection