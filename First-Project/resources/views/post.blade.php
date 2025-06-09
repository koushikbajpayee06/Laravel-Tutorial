@extends('layouts.masterlayout')

@section('content')
    <h2>Post Page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt consectetur in commodi animi iure, sunt quasi quia quibusdam nihil velit doloremque id quo maiores ducimus dolore tempora pariatur excepturi ipsam? Nam eius et accusamus quo consequuntur vero mollitia tempora eaque. Velit pariatur quibusdam corporis laboriosam minus quis ut error voluptas sed animi ipsam quod facilis suscipit nesciunt cum est, ex odio. Molestias alias neque labore deserunt magnam incidunt est, enim dignissimos, explicabo nisi eveniet illo nesciunt fuga. Repudiandae iure eos corrupti saepe molestias quaerat iste quis natus maxime. Nostrum minus ad perferendis dicta voluptate dolorum at assumenda debitis natus cumque?</p>
@endsection

@section('title')
    Post
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar</p>
@endsection