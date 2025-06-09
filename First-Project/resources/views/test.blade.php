@php
    $user = "Yahoo Baba";
    $fruits =["Apple","Orange",'Banana',"Grapes"];
@endphp

<script>
    // var data = @json($fruits);
    var data = {{ Js::from($fruits)}};
    
    data.forEach(function(entry)  
    {
        console.log(entry);
    });
    
</script>