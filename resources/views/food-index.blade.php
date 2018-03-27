@extends('layout')
@section('content')
<div class="flex justify-between h-2/5 my-8">
        <h2 class="">เมนูอาหาร</h2>
        <a href="/food/create">
                <button class="ui button" type="submit" >เพิ่มเมนู</button>
        </a>
</div>
<table class="ui basic table">
          @foreach($menus as $menu)
          <div class="flex my-8 p-4 bg-grey-lighter shadow">
              <img class="w-48 h-48 rounded mr-8" src="{{$menu->img}}" alt="">
              <div class="flex flex-col">
                  <div class="flex items-center">
                      <p class="text-2xl mr-4">{{$menu->name}}</p>       
                      <a class="item">
                          <div class="ui  horizontal label">{{$menu->type->name}}</div>          
                      </a>
                  </div>
                  <div class="flex mt-4">
                    <p class="text-grey-dark">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo quas, neque delectus adipisci necessitatibus est quos odit. Ut, illum, perspiciatis voluptate eaque voluptas, architecto molestiae recusandae id adipisci unde nesciunt?</p>
                  </div>
                  <div class="flex h-full justify-between">
                    <div class="flex self-end">
                       <div class="item">
                            <a href="/food/edit/{{$menu->id}}">
                                <button class="ui compact icon button">
                                    <i class="write icon"></i>
                                </button>
                            </a>
                            <a href="/food/delete/{{$menu->id}}">
                                <button class="ui compact icon button">
                                    <i class="trash icon"></i>
                                </button>
                            </a>
                       </div> 
                    </div>
                    <p class="text-2xl self-end">{{$menu->price}} บาท</p>
                  </div>
              </div>
              
          </div>
          @endforeach
@endsection