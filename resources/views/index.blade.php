@extends('layout.app')

@section('style')
    <style>
        .scroll-panel {
            height: 500px;
            overflow-y: auto;
        }
    </style>
@append

@section('content')

    <div class="col-lg-12">
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <a href="#/chat" class="btn btn-default">Chat</a>
            </div>
            <div class="btn-group" role="group">
                <a href="#/message" class="btn btn-default">Private messages</a>
            </div>
            <div class="btn-group" role="group">
                <a href="#/profile" class="btn btn-default">Profile</a>
            </div>
        </div>

        <div class="page-header">
            <h2>Laravel, Pusher and AngularJS Single Page Application</h2>
            <h4>Simple chatroom by Jan Ficko</h4>
        </div>

        <!-- Partials are injected here -->
        <ng-view></ng-view>

    </div>
@stop