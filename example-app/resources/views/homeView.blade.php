<div>
    <h1>Home View</h1>
    <p>Main Url: {{ URL::current() }}</p>
    <p>Url With Params: {{ URL::full() }}</p>
    <a href="aboutView">About</a>
    <a href="{{ URL::to("aboutView", ["team"]) }}">About View</a>
</div>
