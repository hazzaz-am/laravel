<div>
    <h1>Welcome, 👋</h1>
   @if($name == "Hazzaz")
    <h1>Hi, Hazzaz</h1>
   @elseif ($name == "Amin")
    <h1>Hi, Amin</h1>
   @else
    <h1>Hi, Mister</h1>
   @endif
</div>

<div>
    @foreach($users as $user)
    <div class="flex items-center gap-4 bg-[#444] p-4 rounded-2xl">{{ $user }}</div>
    @endforeach
</div>
