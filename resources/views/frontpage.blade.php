@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                   <ul class="list-group">
                       <a href="" class="list-group-item list-group-item-action">Category1</a>
                       <a href="" class="list-group-item list-group-item-action">Category2</a>
                       <a href="" class="list-group-item list-group-item-action">Category3</a>
                       <a href="" class="list-group-item list-group-item-action">Category4</a>
                       <a href="" class="list-group-item list-group-item-action">Category5</a>
                   </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">
                   <div class="row">
                       <div class="col-md-4">
                           <p>name</p>
                           <p>description</p>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    a.list-group-item{
        font-size: 18px;
    }
    a.list-group-item:hover{
        background-color: red;
        color: #fff;
    }
    .card-header{
        background-color: red;
        color: #fff;
        font-size: 20px;
    }
</style>
@endsection
