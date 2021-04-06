@extends('master')
@section("content")
<div class="container custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>${{ $total }}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 12</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{ $total + 12 }}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/action_page.php">
                <div class="form-group">
                  <textarea type="email" placeholder="Enter your address " class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method:</label>
                  <p><input type="radio" name="payment"><span>Online Payment</span></p>
                  <p><input type="radio" name="payment"><span>EMI Payment</span></p>
                  <p><input type="radio" name="payment"><span>Payment On Delivery</span></p>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection
