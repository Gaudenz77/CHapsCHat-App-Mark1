@extends('layouts.master')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 card1">
            <div class="logiInfo mt-2 p-1">
              @if (Auth::check())
                  <h3>Welcome, {{ Auth::user()->name }}! You are logged in.</h3>
              @else
                  <p><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to post a new topic.</p>
              @endif
            </div>
            
          <div class="editorTitle p-1">Chats</div>
            <div class="chatFormField">
              <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
            </div>
            <div class="chatbody">
              <chat-messages :messages="messages"></chat-messages>
            </div>
        </div>
        <div class="col-md-3 card1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum aperiam, ad voluptatem unde deleniti labore? Animi dignissimos eveniet soluta cumque ullam facere? Repudiandae cum temporibus veritatis autem blanditiis, facilis saepe!</div>
        <div class="col-md-3 card1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, voluptas! Aliquam ea obcaecati repellat animi iusto? Eaque possimus reiciendis perspiciatis sit deleniti nemo consectetur, voluptatum nisi maiores dignissimos provident et?</div>
        <div class="col-md-3 card1">
          <div class="logiInfo mt-2 p-1">
            @if (Auth::check())
                <h3>Welcome, {{ Auth::user()->name }}! You are logged in.</h3>
            @else
                <p><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to post a new topic.</p>
            @endif
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vel repellat, quidem aut at hic explicabo neque voluptate tempore dolores quaerat, commodi laudantium ut ab facilis! Tenetur adipisci ea cupiditate!</p>
        </div>
      </div>
    </div>
 </div>

@endsection

