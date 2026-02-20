@include('shared.header')

<x-message message="User Logged in successfully" status="success"/>
<h1>Welcome Page</h1>
@include("shared.inner", ["page" => "Welcome Page Rendered from"])
