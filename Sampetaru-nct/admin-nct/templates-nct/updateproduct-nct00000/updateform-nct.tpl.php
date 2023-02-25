<form class="wow fadeInUp animated" data-wow-delay=".7s" action="" method="POST" enctype="multipart/form-data">
    <input type="text" placeholder="Product Title" name="title" value="%title%" required="">
    <input type="text" placeholder="Product Price" name="price" value=%price%" required="">
    <input type="text" placeholder="Product's Size" name="size" value="%size%" required="">
    <input type="text" placeholder="Product's Color" name="color" value="%color%" required="">
    <input type="text" placeholder="No of Products Available" name="qty_avilable" value="%qty_available%" required>

    <!-- our select code -->
    <div class="form-group">
        <h4><label for="category">Select Category:</label></h4>
        <select class="form-control" name="category">
            <option>%category%</option>
            <option>Electronics</option>
            <option>Men</option>
            <option>Women</option>
            <option>Kids</option>
        </select>
    </div>
    <div class="form-group">
        <h4><label for="subcategory">Select Sub Catagory:</label></h4>
        <select class="form-control" name="subcategory">
            <option>%subcategory%</option>
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
        <input type="text" placeholder="Product Brand" name="brand" value="%brand%" required="">
    </div>

    <pre><h4><label for="image1">Main Image:</label></h4> <input type="file" name="image1" value="%image1%" id="image1"></pre>
    <pre><h4><label for="image2">Image2:</label></h4> <input type="file" name="image2" value="%image2%" id="image2"></pre>
    <pre><h4><label for="image3">Image3:</label></h4> <input type="file" name="image3" value="%image3%" id="image3"></pre>
    <h4><label for="short_discription">Description:</label></h4>
    <textarea rows="5" name="short_description" style="width:100%;" required="">%short_description%</textarea>
    <h4><label for="specification">Specification:</label></h4>
    <textarea rows="5" name="specification" style="width:100%;">%specification%</textarea>
    <h4><label for="additional_info">Additional Info:</label></h4>
    <textarea rows="5" name="additional_info" style="width:100%;" >%additional_info%</textarea>

    <input type="submit" value="Submit" name="updateproduct" id="updateproduct">
</form>