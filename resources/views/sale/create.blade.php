
@extends('layouts.app')

@section('content')

    <body id="page2">

    <div class="main">
        <!--header -->
        <header>
            <div class="wrapper">
                <h1><a href="/" id="logo">Repuestín</a></h1>
                <h1 style="float: right;">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Ingresar</a></li>
                            <li><a href="{{ url('/register') }}">Registrarse</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </h1>
            </div>
            <nav>
                <ul id="menu">
                    <li><a href="{{ url('/') }}"><span>Inicio</span></a></li>
                    <li><a href="{{ url('/product') }}"><span>Producto</span></a></li>
                    <li><a href="{{ url('/car') }}"><span>Autos</span></a></li>
                    <li><a href="{{ url('/repair') }}"><span>Reparaciones</span></a></li>
                    <li class="active"><a href="{{ url('/sale') }}"><span>Ventas</span></a></li>
                </ul>
            </nav>
        </header>

        <article id="content"><div class="ic">More Website Templates @ TemplateMonster.com - November 14, 2011!</div>
            <div class="wrapper">
                <h2>Contact Form</h2>
                <form id="ContactForm" action="{{ route('sale.store') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div>
                        <div  class="wrapper">
                            <span>Cliente:</span>
                            <div class="bg"><input type="text" class="input" name="client_name"></div>
                        </div>
                        <div  class="wrapper">
                            <span>Nit:</span>
                            <div class="bg"><input type="text" class="input" name="client_nit" ></div>
                        </div>
                        <div  class="wrapper">
                            <span>Precio:</span>
                            <div class="bg"><input type="text" class="input" name="total_price" ></div>
                        </div>

                        <button type="submit" class="button1">
                            Crear Venta
                        </button>
                    </div>
                </form>



            </div>
        </article>

@endsection