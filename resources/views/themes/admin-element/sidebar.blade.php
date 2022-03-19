<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{asset('assets/img/sidebar-1.jpg')}}">
    <div class="logo"><a href="#" class="simple-text logo-mini">

        </a>

        <a href="#" class="simple-text logo-normal">
            <img src="{{asset('assets/img/logo_otewee.png')}}" width="170">
        </a>
    </div>

    <div class="sidebar-wrapper">

        <div class="user">
            <div class="photo">
                <img src="{{asset('assets/img/faces/usr.jpg')}}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        Administrator
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> L </span>
                                <span class="sidebar-normal"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link" href="{{url('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('mitra-registrasi')}}">
                    <i class="material-icons">person</i>
                    <p> Data Registrasi </p>
                </a>
            </li>
        </ul>
    </div>
</div>