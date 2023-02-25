<style type="text/css">
.rightbtn
{
    float: right;
    margin-top: 15px;
    margin-right: 5px;   
}
</style>
<!-- sidebar -->
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="{SITE_ADM_MOD}dashboard-nct"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
        <li class="active"><a href="{SITE_ADM_MOD}manageproduct-nct"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Manage Product</a></li>
        <li><a href="{SITE_ADM_MOD}manageuser-nct"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Manage User</a></li>
        <li><a href="{SITE_ADM_MOD}manageorder-nct"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Manage Order</a></li>
        <li><a href="{SITE_ADM_MOD}manageshipping-nct"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Manage Shipping</a></li>
        <li><a href="{SITE_ADM_MOD}manageslider-nct"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Home Page Slider</a></li>
        <li role="presentation" class="divider"></li>
        <li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
    </ul>
    <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
</div>
<!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div style="height:50px;"></div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div align='center'>
                        Manage Products
                        <button class="btn btn-success rightbtn" name="addProduct" data-toggle="modal" data-target="#addProduct">Add Product</button>
                    </div>
                </div>
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">Product ID</th>
                                <th data-field="image1" data-sortable="true">Image1</th>
                                <th data-field="image2" data-sortable="true">Image2</th>
                                <th data-field="image3" data-sortable="true">Image3</th>
                                <th data-field="title" data-sortable="true">Title</th>
                                <th data-field="category" data-sortable="true">Category</th>
                                <th data-field="subcategory" data-sortable="true">Subcategory</th>
                                <th data-field="brand" data-sortable="true">Brand</th>
                                <th data-field="price" data-sortable="true">Price</th>
                                <th data-field="qty_avilable" data-sortable="true">Qty</th>
                                <th data-field="rating" data-sortable="true">Rating</th>
                                <th data-field="reviews" data-sortable="true">Reviews</th>
                                <th data-field="size" data-sortable="true">Size</th>
                                <th data-field="color" data-sortable="true">Color</th>
                                <th data-field="shortdiscription" data-sortable="true">ShortDescription</th>
                                <th data-field="specification" data-sortable="true">Specification</th>
                                <th data-field="additionalinfo" data-sortable="true">Additional Info</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                 
                   %PRODUCTS TABLE%
                 
                </table>
            </div>
        </div>
    

<div class="container">
  <!-- Trigger the modal with a button -->
  
  <!-- Modal -->
  <div class="modal fade" id="addProduct" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>Add Products</center></h4>
        </div>
        <div class="modal-body">
            <div class="login-page" style="width:80%;">
                <form class="wow fadeInUp animated" data-wow-delay=".7s" action="" method="POST" enctype="multipart/form-data">
                    <h4><label for="title">Title:</label></h4>
                    <input type="text" placeholder="Product Title" name="title" required="">
                    <h4><label for="price">Product Price:</label></h4>
                    <input type="text" placeholder="Product Price" name="price" required="">
                    <h4><label for="size">Priduct size:</label></h4>
                    <input type="text" placeholder="Product's Size" name="size" required="">
                    <h4><label for="color">Priduct Color:</label></h4>
                    <input type="text" placeholder="Product's Color" name="color" required="">
                    <h4><label for="qty">Priduct Quantity:</label></h4>
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

                    <pre><h4><label for="image1">Main Image:</label></h4> <input type="file" name="image1" id="image1"></pre>
                    <pre><h4><label for="image2">Image2:</label></h4> <input type="file" name="image2" id="image2"></pre>
                    <pre><h4><label for="image3">Image3:</label></h4> <input type="file" name="image3" id="image3"></pre>
                    <h4><label for="short_discription">Description:</label></h4>
                    <textarea rows="5" name="shortdescription" style="width:100%;" placeholder="Short Description About Your Product" required=""></textarea>
                    <h4><label for="specification">Specification:</label></h4>
                    <textarea rows="5" name="specification" placeholder="Specification About Your Product" style="width:100%;"></textarea>
                    <h4><label for="additional_info">Additional Info:</label></h4>
                    <textarea rows="5" name="additional_info" placeholder="Additional Information About Your Product" style="width:100%;" ></textarea>
                    <input type="submit" value="Submit" name="addproduct">
                </form>
            </div>
        </div>

        <div class="modal-footer">
        </div>
      </div>
      
    </div>
  </div>
  
</div>
  </div>
    <!-- /row -->
</div>  