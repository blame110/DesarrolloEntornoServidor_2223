

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://mdbootstrap.com/img/logo/mdb-transparent-250px.png" alt="" width="180">
    <h2 class="my-4 pt-2"><strong>Checkout form</strong></h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group
      has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-4-5">
        <span class="text-muted"><strong>Your cart</strong></span>
        <span class="badge badge-primary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary btn-md my-0 ml-0">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3"><strong>Billing address</strong></h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="md-form md-outline my-2">
              <input type="text" id="firstName" class="form-control" required>
              <label for="firstName">First name</label>
            </div>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="md-form md-outline my-2">
              <input type="text" id="lastName" class="form-control" required>
              <label for="lastName">Last name</label>
            </div>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <div class="md-form md-outline my-2">
            <input type="text" id="username" class="form-control" required>
            <label for="username">Username</label>
          </div>
          <div class="invalid-feedback">
            Your username is required.
          </div>
        </div>

        <div class="row">
          <div class="col-12 mb-3">
            <div class="md-form md-outline my-2">
              <input type="email" id="email" class="form-control">
              <label for="email">Email (Optional)</label>
            </div>
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="col-12 mb-3">
            <div class="md-form md-outline my-2">
              <input type="text" id="address" class="form-control" required>
              <label for="address">Address</label>
            </div>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="col-12 mb-3">
            <div class="md-form md-outline my-2">
              <input type="text" id="address2" class="form-control" required>
              <label for="address2">Address 2 (Optional)</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <select class="custom-select d-block w-100 mt-2" id="country" required>
              <option value="">Country</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <select class="custom-select d-block w-100 mt-2" id="state" required>
              <option value="">State</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="md-form md-outline mt-2 mb-0">
              <input type="text" id="zip" class="form-control mb-0" required>
              <label for="zip">Zip</label>
            </div>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="form-check pl-0">
          <input type="checkbox" class="form-check-input filled-in" id="same-address">
          <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="form-check pl-0">
          <input type="checkbox" class="form-check-input filled-in" id="save-info">
          <label class="form-check-label" for="save-info">Save this information for next time</label>
        </div>

        <hr class="mb-4">

        <h4 class="mb-3"><strong>Payment</strong></h4>

        <div class="d-block my-3">
          <div class="form-check pl-0">
            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
            <label class="form-check-label" for="credit">Credit card</label>
          </div>
          <div class="form-check pl-0">
            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
            <label class="form-check-label" for="debit">Debit card</label>
          </div>
          <div class="form-check pl-0">
            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
            <label class="form-check-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-2">
            <div class="md-form md-outline my-2">
              <input type="text" id="cc-name" class="form-control" required>
              <label for="cc-name">Name on card</label>
              <small class="text-muted">Full name as displayed on card</small>
            </div>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="md-form md-outline my-2">
              <input type="text" id="cc-number" class="form-control" required>
              <label for="cc-number">Credit card number</label>
            </div>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-2">
            <div class="md-form md-outline my-2">
              <input type="text" id="cc-expiration" class="form-control" required>
              <label for="cc-expiration">Expiration</label>
            </div>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-2">
            <div class="md-form md-outline my-2">
              <input type="text" id="cc-cvv" class="form-control" required>
              <label for="cc-cvv">CVV</label>
            </div>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>