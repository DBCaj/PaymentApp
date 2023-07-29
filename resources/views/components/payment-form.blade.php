<div>
    <div class="container style-container">
        <div class="row">
            <div class="col-6">
                <img src="https://cdn.simpleshop.com/demo/productimages/x580x420/60_20191120092838270.jpg" alt="jacket">
            </div>
            <div class="col-6">
                <div class="card-header">
                    <h2>Coat</h2>
                    <h3 class="style-price" id="product-price">$125.00</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('payment') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="brand">Brand: <b>Coattino</b></label>                    
                        </div>
                        <div class="form-group">
                            <label for="size">Size</label>
                            <br>
                            <select name="amount" class="form-control" required>
                                <option value="" selected>- select -</option>
                                <option value="115">Small</option>
                                <option value="125">Medium</option>
                                <option value="135">Large</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn style-btn" onclick="return confirm('Are you sure you want to proceed?')">
                                <span class="style-cart"><x-cart-logo /></span>
                                <span class="style-add-to-cart"><b>CHECKOUT</b></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>