<div class="top">
  {{ Form::open(['method' => 'GET', 'class' => 'form']) }}
    {{ Form::input('search', 'q', null, ['placeholder' => 'Search...', 'class' => 'form-control search']); }}
  {{ Form::close() }}
  <div class="navbar-hader">
    {{ link_to('/', 'Larapics', ['class' => 'navbar-brand']) }}
    @if(Auth::check())
      <div class="logout">
        {{ link_to('logout', 'Logout') }}
      </div>
    @endif
  </div>
</div>



