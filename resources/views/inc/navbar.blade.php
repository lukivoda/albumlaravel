<!-- Fixed navbar -->
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="color:#c20000;font-weight: bold" class="navbar-brand" href="{{route('home')}}">AlbumLaravel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class={{Route::is('home')?'active':''  }}><a href="{{route('home')}}">Home</a></li>
                <li class={{Route::is('albums.create')?'active':''}}  ><a href="{{route('albums.create')}}">Create Album</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>