@inject('JoursSemaine','App\DaysOfWeek\DaysOfWeek' ) {{-- injection de services --}}
<ol>
    <h2 class="text-danger">The days of week are :</h2>
    @foreach($JoursSemaine->daysOfWeek() as $data)
        @for ($i = 0; $i < count($data); $i++)
            <li>
                {{$data[$i]}}
            </li>
        @endfor
    @endforeach
</ol>