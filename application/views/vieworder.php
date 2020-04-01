			
		<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="<?php echo base_url()?>">Dashboard</a></li>
                                    <!-- <li class="active" ><a href="#">category</a></li> -->
                                    <li class="active">view orders</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Orders</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Client Name</th>
				            <th>Date</th>
				            <th>Payment Type</th>
				            <th>Shipping status</th>
				            <th>Order Status</th>
				            <th>Action</th>
				            <!-- <th>Product Name</th>
				            <th>Product Quantity</th> -->
				            
						  </tr>
                        </thead>
                        <tbody>  
										 
                        <?php 
                                        $row_cnt=count($orders);
                                        if($row_cnt>0){
                                        for($i=0;$i<$row_cnt;$i++){?>
                                        <tr>
                                            <td>  <?php echo $orders[$i]['order_id']; ?></td>
                                            <td> <?php echo $orders[$i]['client_name']; ?> </td>
                                            <td> <?php echo $orders[$i]['date']; ?> </td>
                                            <td> <?php echo $orders[$i]['payment_type']; ?> </td>
                                            <td> <span class="badge badge-dark"><?php echo $orders[$i]['shipped_status']; ?> </span></td>
                                            <td>  <span class="badge badge-dark"><?php echo $orders[$i]['order_status']; ?></span> </td>
											<td> <div><a type="a" href="<?php echo base_url();?>subcategory/edit/<?php echo $orders[$i]['order_id']; ?>" class="btn btn-outline-info">Edit</a> <a type="a" href="<?php echo base_url();?>subcategory/delete/<?php echo $orders[$i]['order_id']; ?>"" class="btn btn-outline-danger">Delete</a></div></td>
                                        </tr>
                                        <?php
                                        }
                                        }
                                        else
                                        {
                                        ?>
                                       <tr>
									   <td colspan="7" class="text-center">No data at the moment</td>
                                       </tr>
                                       <?php
                                        }
                                        ?>
                            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
			