@extends('master')
@section("content")
<div class="custom-products">
    <div class="col-sm-10">
    <table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>${{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$10</td>
      </tr>
    </tbody>
    <tr>
        <td>Total Amount</td>
        <td>${{$total +10}}</td>
      </tr>
    </tbody>
  </table>

  <div>
  <form action="/action_page.php">
  <div class="form-group">
    <textarea type="email" class="form-control" placeholder="enter your address"></textarea>
  </div>
  <div class="form-group">
    <label>Payment Method:</label><br>
    <input type="radio" name="payment"><span>Online Payment</span><br><br>
    <input type="radio" name="payment"><span>EMI Payment</span><br><br>
    <input type="radio" name="payment"><span>Payment on Delivery</span><br><br>
  </div>
  
  <button type="submit" class="btn btn-default">Buy Now</button><br><br>
</form>
  </div>
    </div>
</div>
@endsection