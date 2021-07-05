@extends('master')
@section('content')
<div class="custom-product">
        <div class="col-sm-10">
        <table class="table">

    <tbody>
      <tr>
        <td>Amount</td>
        <td>₹ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>₹ 0</td>
      </tr>
      <tr>
        <td>Delivery Charges</td>
        <td>₹ 50</td>
      </tr>
      <tr>
        <td>Total Amountt</td>
        <td>₹ {{$total+50}}</td>
      </tr>
    </tbody>
  </table>
  <form action="/orderplace" method ="POST">
  {{csrf_field()}}
  <div class="form-group">
  <textarea class="textarea" name="address" placeholder = "Enter your addresss"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value ="cash" name ="payment"> <span>Online Payment</span><br><br>
    <input type="radio" value ="cash" name ="payment"> <span>EMI</span><br><br>
    <input type="radio" value ="cash" name ="payment"> <span>Cash on Delivery</span><br><br>
  </div>
  <button type="submit" class="btn btn-success">Pay Now</button>
</form>
        </div>
    
</div>
@endsection