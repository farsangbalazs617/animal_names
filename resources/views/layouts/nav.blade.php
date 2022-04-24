<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">István Fekete novels</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if(Request::url() === url('')) active  @endif" aria-current="page" href="{{url('')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::url() === url('books')) active  @endif" href="{{url('books')}}">Novels</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::url() === url('contact')) active  @endif" href="{{url('contact')}}">Messages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::url() === url('contact/create')) active  @endif" href="{{url('contact/create')}}">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::url() === url('gallery')) active  @endif" href="{{url('gallery')}}">Gallery</a>
        </li>
      </ul>
    </div>
  </div>
</nav>