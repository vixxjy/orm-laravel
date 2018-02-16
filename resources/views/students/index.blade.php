

@foreach ($students as $student)
 <h2>{{ $student->name }}</h2>
 <p>{{ $student->reg_no}}</p>
 
 
        <h4>Exams</h4>
        @foreach ($student->exams as $exam) 
            <p>{{ $exam->type }} {{ $exam->name}}</p>
       @endforeach
   				<h4>Sports</h4>
        @foreach ($student->sports as $sport)
            <p>{{ $sport->name }}</p>
        @endforeach 

    @endforeach