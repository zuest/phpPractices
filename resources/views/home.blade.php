 @extends('master')

 @section('title','homepage')


 @section('content')

    Recent Message

    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        {{csrf_field()}}
        <button type="submit">submit</button>
    </form>

     <ul>
       @foreach($messages as $message)
           <li>
               {{$message->id}}  -   {{$message->title}} - {{$message->content}} - {{$message->timestampz}}
           </li>
            @endforeach
     </ul>

 @endsection