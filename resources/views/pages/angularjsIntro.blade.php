@extends('layouts.app')

@section('content')
        <h1> {{$title}}</h1>
        <div ng-app="" ng-init="name='Name'; lname='Last Name'">
            <p>First Name: <input type="text" ng-model="name"></p>
            <p ng-bind="name"></p>
            <p>Last Name: <input type="text" ng-model="lname"></p>
            <p ng-bind="lname"></p>
            <p>My First expression: {{5+5}}</p>
        </div> 
 @endsection