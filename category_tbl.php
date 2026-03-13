<?php
include 'db.php';
include ('admin_header.php');
$query="Select * from category";
$result=mysqli_query($conn,$query);
?>
 <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Category</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Category Details</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="table-responsive-sm">
                                          <table class="table table-striped projects">
                                             <thead class="thead-dark">
                                                <tr>
                                                   <th>Category Image</th>
                                                   <th>Category Id</th>
                                                   <th>Category Name</th>
                                                   <th>Category Description</th>
                                                   <th>Edit</th>
                                                   <th>Delete</th>
                                                </tr>
                                             </thead>
                                             <tbody>
											 <?php 
												if(mysqli_num_rows($result)>0)
												{
													while($row=mysqli_fetch_assoc($result))
													{
											  ?>
                                                <tr>
												<td><img src="/product_img/<?=$row['cat_img'];?>" height="100" width="100"></td>
                                                <td><?=$row['id'];?></td>
												<td><?=$row['cat_name'];?></td>
												<td><?=$row['cat_des'];?></td>
												<td>
													<a href="edit_user.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-success btn-xs">Edit</button></a>
												</td>
												<td>
													<a href="delete_user.php?id=<?=$row['id'];?>" onclick="return confirm('Are you sure ? ')"><button type="button" class="btn btn-danger btn-xs">Delete</button></a>	
												</td>
												</tr>
												<?php
													}
													}
													else
													{?>
												<tr>
													<td colspan="7">No Category Found</td>
												</tr>	
											    <?php }?>
											</tr> 
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
<?php include('footer.php');?>