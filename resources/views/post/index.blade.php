<h1>index<h1>
@foreach($postd as $post)
<li>{{$post->title}}<li>
<li>{{$post->des}}<li>
@endforeach()