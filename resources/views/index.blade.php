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
    <div class="page-header">
        <h2>Laravel, Pusher and AngularJS Single Page Application</h2>
        <h4>Simple chatroom by Jan Ficko</h4>
    </div>

    <div ng-controller="ChatController">

        <form ng-submit="submitChat()">
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="nickname" ng-model="chatData.nickname"
                       placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="message" ng-model="chatData.message"
                       placeholder="Say...">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>

        <div class="panel panel-primary">
            <div class="panel-heading">Chat box</div>
            <div class="panel-body scroll-panel">
                <div class="well well-sm" ng-hide="loading" ng-repeat="chat in chats" ng-cloak>
                    <p>{{ chat.nickname }} says
                        <small>({{ chat.created_at }})</small>
                        :
                    </p>
                    <p>{{ chat.message }}</p>

                </div>
            </div>
        </div>

    </div>
@stop