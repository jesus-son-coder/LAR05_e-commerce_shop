@extends('admin.master')

@section('content')

    <div class="container-fluid container-create-product">
        <div class="row row-create-product">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Overview <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Export</a>
                    </li>
                </ul>

                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nav item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nav item again</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">One more nav</a>
                    </li>
                </ul>

                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nav item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nav item again</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">One more nav</a>
                    </li>
                </ul>
            </nav>

            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                <h1>Dashboard</h1>
                <div class="col-md-6">
                    <h1>BMW</h1>
                    <h1>Add New</h1>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}
                        <div class="form-group">
                            {{ Form::label('Proname', 'Name') }}
                            {{ Form::text('pro_name', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('Code', 'Code') }}
                            {{ Form::text('pro_code', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('Price', 'Price') }}
                            {{ Form::text('pro_price', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('Description', 'Description') }}
                            {{ Form::text('pro_info', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('image', 'Image') }}
                            {{ Form::file('image',array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('Sale Price', 'Sale Price') }}
                            {{ Form::text('spl_price', null, array('class' => 'form-control')) }}
                        </div>

                        {{ Form::submit('Submit', array('class' => 'btn btn-primary mt-3')) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
