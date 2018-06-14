@extends('frontend.layout.app')

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content black-text">
                    <span class="card-title">Frontend</span>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
