<h1>Create the deta</h1>
<form method="post" action="{{route('postdb.store')}}">
@csrf
<input type='text' placeholder="enter title:" name='title' ><br><br>
<input type='text' placeholder="enter des:" name='body' ><br><br>
<button type='submit'>sand</button>
<form>