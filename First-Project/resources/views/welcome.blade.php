<h1>This is our Home Page</h1>

@php
    $user = ["koushik",'Souvik',"Rishav","Debanjan","Rupa"]
@endphp

{{-- <ul>
    @foreach ($user as $n)
        <li>{{$loop->index}} {{$n}}</li>
    @endforeach
</ul> --}}

{{-- <ul>
    @foreach ($user as $n)
        <li>{{$loop->iteration}} {{$n}}</li>
    @endforeach
</ul> --}}

{{-- <ul>
    @foreach ($user as $n)
        <li>{{$loop->count}} {{$n}}</li>
    @endforeach
</ul> --}}

{{-- <ul>
    @foreach ($user as $n)
        @if($loop->first)
            <li style="color:red">{{$n}}</li>
        @elseif($loop->last)
            <li style="color:green">{{$n}}</li>
        @else
            <li>{{$n}}</li>
        @endif
    @endforeach
</ul> --}}

<ul>
    @foreach ($user as $n)
        @if($loop->even)
            <li style="color:red">{{$n}}</li>
        @elseif($loop->odd)
            <li style="color:green">{{$n}}</li>
        @else
            <li>{{$n}}</li>
        @endif
    @endforeach
</ul>
