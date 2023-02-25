<div class="login-page">
        <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
            <h3 class="title">Add<span> Product</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
        </div>
        <div class="widget-shadow">
            <div class="login-body">
                <form class="wow fadeInUp animated" data-wow-delay=".7s" action="" method="POST" enctype="multipart/form-data">
                    <input type="text" placeholder="Product Title" name="title" required="">
                    <input type="text" placeholder="Product Price" name="price" required="">
                    <input type="text" placeholder="Product's Size" name="size" required="">
                    <input type="text" placeholder="Product's Color" name="color" required="">
                    <input type="text" placeholder="No of Products Available" name="qty_avilable" required>

                    <!-- our select code -->
                    <div class="form-group">
                        <h4><label for="category">Select Category:</label></h4>
                        <select class="form-control" name="category">
                            <option>others</option>
                            <option>Electronics</option>
                            <option>Men</option>
                            <option>Women</option>
                            <option>Kids</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h4><label for="subcategory">Select Sub Catagory:</label></h4>
                        <select class="form-control" name="subcategory">
                            <option>Others</option>
                            <option>Mobiles</option>
                            <option>Laptops</option>
                            <option>Headphones</option>
                            <option>Power Banks</option>
                            <option>Chargers</option>
                            <option>Memory Cards</option>
                            <option>Pendrives</option>
                            <option>Screenguards</option>
                            <option>Hard Disk</option>
                            <option>Mouse</option>
                            <option>Pendrives</option>
                            <option>Monitor</option>
                            <option>Keyboards</option>
                            <option>Sport Shoes</option>
                            <option>Casual Shoes</option>
                            <option>Formal Shoes</option>
                        </select>
                    </div>
                    <!-- select code finish -->
                    <div class="form-group">
                        <h4><label for="brand">Select Brand:</label></h4>
                        <input type="text" placeholder="Product Brand" name="brand" required="">
                    </div>

                    <pre><h4><label for="image1">Main Image:</label></h4> <input type="file" name="image1" id="image1" required></pre>
                    <pre><h4><label for="image2">Image2:</label></h4> <input type="file" name="image2" id="image2"></pre>
                    <pre><h4><label for="image3">Image3:</label></h4> <input type="file" name="image3" id="image3"></pre>
                    <h4><label for="short_discription">Discription:</label></h4>
                    <textarea rows="5" name="short_discription" placeholder="Short Description About Your Product" style="width:100%;" required=""></textarea>
                    <h4><label for="specification">Specification:</label></h4>
                    <textarea rows="5" name="specification" placeholder="Specification About Your Product" style="width:100%;"></textarea>
                    <h4><label for="additional_info">Additional Info:</label></h4>
                    <textarea rows="5" name="additional_info" placeholder="Additional Information About Your Product" style="width:100%;" ></textarea>

                    <input type="submit" value="Submit" name="addproduct" id="addproduct">
                </form>
            </div>
        </div>
    </div>
