<h1>Client Info for: {{ $phone }}</h1>
<p>Name: {{ $clientName }}</p>

<h2>Documents</h2>
<ul>
@foreach($documentViewsDocs as $doc)
    <li>{{ $doc->type }} - {{ $doc->name }} - {{ $doc->created_at }}</li>
@endforeach
</ul>

<h2>Surveys</h2>
<ul>
@foreach($surveys as $survey)
    <li>{{ $survey->title }} - {{ $survey->application_status }}</li>
@endforeach
</ul>

<h2>Extra Details</h2>
<ul>
@foreach($extraDetailsFields as $key => $value)
    <li>{{ $key }}: {{ $value }}</li>
@endforeach
</ul>
