{{-- @php
    $user = ["name"=>'koushik', "age"=>32, "salary"=>25000, "dept"=>'Web Developer'];
    
@endphp --}}
{{-- @include('pages.header',['names'=> $user])
{{-- @include('pages.header',['name'=>'Yahoo Baba']) --}}
{{-- @include('pages.footer')

@includeIf('pages.content') --}}

{{-- Including Subviews with Conditional Check  --}}

{{-- @includeWhen(true,' pages.header', ['name' => $user]) --}}

    @include('pages.header')

    <article>
        <h1>Home Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolores, doloribus accusamus velit debitis accusantium quae tenetur aliquam ut laborum ullam assumenda nulla blanditiis. Veniam delectus magni quisquam numquam id pariatur voluptates cumque minima nemo vitae eveniet sint nobis veritatis omnis unde, natus rem, praesentium doloremque! Delectus harum sapiente non mollitia veniam accusamus quas recusandae, repellendus tenetur illo deleniti dicta nostrum laborum nihil. Temporibus, quas non dolorem itaque, exercitationem magni praesentium omnis a odio impedit dolore? Voluptas commodi explicabo praesentium exercitationem culpa tenetur dolorem officiis? Impedit, accusamus explicabo repellendus labore odit, itaque suscipit incidunt dignissimos, dolorem autem fugiat aperiam?</p>
    </article>

    @include('pages.sidebar')

    @include('pages.footer')
       