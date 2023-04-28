@extends('layouts.master')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 card1 bg-info">
          <div class="editorTitle">Chats</div>
          <div class="chatFormField">
            <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
          </div>
          <div class="chatbody">
            <chat-messages :messages="messages"></chat-messages>
          </div>
        </div>
        <div class="col-md-3 card1 bg-danger">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum aperiam, ad voluptatem unde deleniti labore? Animi dignissimos eveniet soluta cumque ullam facere? Repudiandae cum temporibus veritatis autem blanditiis, facilis saepe!</div>
        <div class="col-md-3 card1 bg-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, voluptas! Aliquam ea obcaecati repellat animi iusto? Eaque possimus reiciendis perspiciatis sit deleniti nemo consectetur, voluptatum nisi maiores dignissimos provident et?</div>
        <div class="col-md-3 card1 bg-success">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vel repellat, quidem aut at hic explicabo neque voluptate tempore dolores quaerat, commodi laudantium ut ab facilis! Tenetur adipisci ea cupiditate!</div>
      </div>
    </div>
 </div>

@endsection

