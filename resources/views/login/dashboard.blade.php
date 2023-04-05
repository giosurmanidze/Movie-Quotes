<h1>Dashboard </h1>
<h1>Welcome back! {{ auth()->user()->name }}</h1>

<form method="POST" action='/logout' class="text-sm font-semibold text-blue-500 ml-6">
    @csrf
    <button type="submit">Log out</button>
</form>
</div>
