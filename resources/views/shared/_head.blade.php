<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container ">
        <a class="navbar-brand" href="#">BOX 博客</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
            <!-- <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown role=" button" data-toggle="dropdown"
                    aria-haspopup="true" aria- expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">个人中心</a>
                    <a class="dropdown-item" href="{{ route('users.edit', Auth::user()) }}">编辑资料</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" id="logout" href="#">
                        <form action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                        </form>
                    </a>
                </div>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">
                    <button type="button" class="btn btn-info">登录</button>
                </a>
            </li>
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Sony <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Tablet</a></li>
                <li><a href="#">Smartphone</a></li>
            </ul>
            @endif
        </ul>
    </div>
</nav>
