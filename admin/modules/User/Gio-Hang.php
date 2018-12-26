<?php 
   require_once __DIR__. "/../../autoload/autoload.php";
   require_once __DIR__. "/../../layout/header.php";
   ?>
   <br><br><br>
   <div class="container"><h1></h1></div>
<div id="exTab1" class="container"> 
<ul  class="nav nav-pills">
         <li class="active">
        <a  href="#1a" data-toggle="tab">Lựa Chọn Của Bạn</a>
         </li>
         <li><a href="#2a" data-toggle="tab">Lịch Sử Giao Dịch</a>
         </li>
      </ul>

         <div class="tab-content">
           <div class="tab-pane active" id="1a">
           	<div class="col-md-12">
           		<br>
         <div class="row">
            <div>
               <table>
                  <thead>
                     <tr>
                        <th>stt</th>
                        <th>Tên</th>
                        <th>Hình Ảnh</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Thao Tác</th>
                     </tr>
                  <tbody>
                     <?php $stt=1; foreach ($_SESSION['cart'] as $key =>$val): ?>
                     
                     <tr>
                        <td><?php echo $stt ?></td>
                        
                        <td><?php echo $val['HOUSE_DETAIL_CODE'] ?></td>
                        <td><img src="<?php echo uploads() ?>product/<?php echo $val['thunbar'] ?>" 
                              width="80px" height="80px">
                        </td>
                        <td><?php echo formatPrice($val['price']) ?></td>
                        <td>
                        	<input type="number" name="qty" value="<?php echo $val['qty'] ?>" class="form-control">
                        		
                        	</td>
                        <td><?php echo formatPrice( $val['qty'] * $val['price']) ?></td>		
                        <td>
                           <a class="btn btn-xs btn-danger"href="delete.php?id=<?php echo $val['id']?>"><i class="fa fa-times">Xóa</i></a>
                        </td>
                     </tr>
                     <?php $stt++; endforeach ?>
                 
                  </tbody>
                  </thead>
               </table>
               <nav aria-label="...">
                  <div class="pull-right">
                     <ul class="pagination">
                        <li class="page-item disabled">
                           <span class="page-link">Trước</span>
                        </li>
                        <!--
                           <?php for( $i =1 ; $i <= $sotrang ; $i++): ?>
                           <?php
                              if(isset($_GET['page']))
                              {
                                 $p = $_GET['page'];
                              }
                              else
                              {
                                 $p = 1;
                              }
                              
                               ?>
                           <li class="<?php echo ($i==$p) ? 'active' : '' ?>">
                              <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                           </li>
                           <?php endfor; ?>
                           -->
                        <li class="page-item">
                           <a class="page-link" href="#">Sau</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
          
            </div>
            <div class="tab-pane" id="2a">
          	
            </div>
         </div>
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php require_once __DIR__. "/../../layout/footer.php";?>