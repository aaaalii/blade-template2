@foreach ($data as $key => $value)
    <h2> {{ $key }} | {{ $value['name'] }} | {{ $value['age'] }} 
    | <a href={{route('view-details', $key)}}>Show</a>
    </h2>
@endforeach