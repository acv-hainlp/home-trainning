<!-- Navbar (sit on top) -->
<div class="w3-margin-bottom">
  <div class="w3-bar w3-white w3-wide w3-padding-8 w3-card-2">
    <a href="#home" class="w3-margin-left w3-bar-item w3-button"><b>BR</b> Architects</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/posts" class="w3-bar-item w3-button">Post</a>
      <a href="/posts/create" class="w3-bar-item w3-button">Create Post</a>


      @if (Auth::check())
      <a href="#" class="w3-bar-item w3-button w3-margin-right">
      		<b>Welcome back!! </b>
      		{{Auth::user()->name}}

      </a>

      @endif()
    </div>
  </div>
</div>