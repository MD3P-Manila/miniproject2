@extends('layouts.app')
@yield('content')
@section('content')



<div class="container">
    <form>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" value="{{$client->name}}" disabled>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" value="{{$client->email}}" disabled>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" id="phone" value="{{$client->contact->phone}}" disabled>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="tel" class="form-control" id="mobile" value="{{$client->contact->phone_mobile}}" disabled>
      </div>
      <div class="form-group">
        <label for="fax">Fax:</label>
        <input type="text" class="form-control" id="fax" value="{{$client->contact->fax}}" disabled>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" value="{{$client->contact->address}}" disabled>
      </div>
      <div class="form-group">
        <label for="address2">Address 2:</label>
        <input type="text" class="form-control" id="address2" value="{{$client->contact->address_2}}" disabled>
      </div>
      <div class="form-group">
        <label for="unit">Unit:</label>
        <input type="text" class="form-control" id="unit" value="{{$client->contact->unit}}" disabled>
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" class="form-control" id="city" value="{{$client->contact->city}}" disabled>
      </div>
      <div class="form-group">
        <label for="province">Province:</label>
        <input type="text" class="form-control" id="province" value="{{$client->contact->province}}" disabled>
      </div>
      <div class="form-group">
        <label for="postal_code">Postal Code:</label>
        <input type="text" class="form-control" id="postal_code" value="{{$client->contact->postal_code}}" disabled>
      </div>
      <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" id="country" value="{{$client->contact->country}}" disabled>
      </div>
      <div class="form-group">
        <label for="notes">Notes:</label>
        <textarea class="form-control" id="notes" value="{{$client->contact->notes}}" disabled> </textarea>
      </div>
    </form>
  </div>

  @endsection