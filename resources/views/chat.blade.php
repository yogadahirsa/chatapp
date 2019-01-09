@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div id="app">
          <div class="card-header"><h1>Chat Room</h1></div>
          <div class="card-body">
            <chatlog :messages="messages"></chatlog>
            <chat v-on:messagesent="addMessage"></chat>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection