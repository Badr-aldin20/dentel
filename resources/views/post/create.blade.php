<h1>Create the deta</h1>
<form method="post" action="{{route('post.insert')}}">
@csrf
<input type='text' placeholder="enter title:" name='title' ><br><br>
<input type='text' placeholder="enter des:" name='des' ><br><br>
<button type='submit'>sand</button>
<form>