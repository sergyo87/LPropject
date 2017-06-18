@foreach($users as $user)
<p>Usuario {{ $user->name }}</p>
@endforeach

{{ $users->links() }}