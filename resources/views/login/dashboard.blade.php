<h1>Dashboard </h1>
<h1>Welcome back! {{ $adminName }}</h1>


<form method="POST" action="/logout">
    @auth
        <button type="submit">Log out</button>
    @endauth
</form>
