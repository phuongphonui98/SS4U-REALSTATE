<?php 
   require_once __DIR__. "/../../autoload/autoload.php";
   $open = "product";
   $id = intval(getInput('id'));
   
   $Editproduct = $db->fetchID("product",$id);
   if(empty($Editproduct))
   {
      $_SESSION['error']= "Dữ Liệu Không Tồng Tại";
      redirectAdmin1("index.php");
   }

   $category = $db->fetchAll("category");

   if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
      $data=
      [
         
           "BUILDING_ID" => postInput('BUILDING_ID'),//mã tòa nhà
           "content" => postInput('content'), //Nội Dung
           "DT_LUNG" => postInput('DT_LUNG'), //Lửng
           "DT_THONGTHUY" => postInput('DT_THONGTHUY'),//DT Thông Thủy
           "DT_TIMTUONG" => postInput('DT_TIMTUONG'),//DT Tim Tường
           "FLOOR_ID" => postInput('FLOOR_ID'),//Tầng
           "HOUSE_DETAIL_CODE" => postInput('HOUSE_DETAIL_CODE'),//số nhà
           "HOUSE_VIEW" => postInput('HOUSE_VIEW'), //Hướng
           "NP_DT_LODAT" => postInput('NP_DT_LODAT'), //DT Lô đất
           "NP_DT_SAN" => postInput('NP_DT_SAN'), //DT SÀn
           "NP_FLOORS" => postInput('NP_FLOORS'), //số tầng nhà phố
           "PORTION_ID" => postInput('PORTION_ID'),//mã block
           "price" => postInput('price'), //Giá
           "SL_PHONG" => postInput('SL_PHONG'), //SL phòng
           "SL_WC" => postInput('SL_WC'), //WC
           "number" => postInput('number'), //Số lượng
            "category_id" => postInput('category_id'),
              "OPENING_DAY" => postInput('OPENING_DAY'),
              "FINAL_DAY" => postInput('FINAL_DAY'),
           "TTCANHO_NAME" => postInput("TTCANHO_NAME") //Tình Trạng
      ];
      $error = [];
      //if
   
      if(postInput('category_id')=='')
      {
         $error['category_id']="Mời bạn chọn dự án";
      }
      
      if(postInput('PORTION_ID')=='')
      {
         $error['PORTION_ID']="Mời bạn nhập mã block";
      }
      if(postInput('HOUSE_DETAIL_CODE')=='')
      {
         $error['HOUSE_DETAIL_CODE']="Thiếu";
      }
      if(postInput('number')=='')
      {
         $error['number']="Thiếu";
      }
      if(postInput('BUILDING_ID')=='')
      {
         $error['BUILDING_ID']="Thiếu";
      }
      if(postInput('FLOOR_ID')=='')
      {
         $error['FLOOR_ID']="Thiếu";
      }
      if(postInput('HOUSE_VIEW')=='')
      {
         $error['HOUSE_VIEW']="Thiếu";
      }
      if(postInput('SL_PHONG')=='')
      {
         $error['SL_PHONG']="Thiếu";
      }
      if(postInput('DT_LUNG')=='')
      {
         $error['DT_LUNG']="Thiếu";
      }
      if(postInput('SL_WC')=='')
      {
         $error['SL_WC']="Thiếu";
      }
      if(postInput('TTCANHO_NAME')=='')
      {
         $error['TTCANHO_NAME']="Thiếu";
      }
      if(postInput('price')=='')
      {
         $error['price']="Thiếu";
      }
      if(postInput('content')=='')
      {
         $error['content']="Thiếu";
      }  
      //end
      //error trống là không phải lỗi
      if(empty($error))
      {
           if (isset($_FILES['thunbar']))
           {
               $file_name = $_FILES['thunbar']['name'];
               $file_tmp = $_FILES['thunbar']['tmp_name'];
               $file_type= $_FILES['thunbar']['type'];
               $file_erro = $_FILES['thunbar']['error'];
               if ($file_erro == 0)
               {
                  $part = ROOT ."product/";
                  $data['thunbar'] = $file_name;
               }
           }
           $update = $db->update("product",$data,array("id"=>$id));
           if($update > 0)
           {
               move_uploaded_file($file_tmp,$part.$file_name);
               $_SESSION['success']="Cập nhật thành công";
               redirectAdmin1("index.php");
           }
           else
           {
               $_SESSION['error']="Cập nhật thất bại";
               redirectAdmin1("index.php");
           }
      }
   }
   ?>
<?php require_once __DIR__. "/../../layout/ADMINHEADER.php";?>
<section class="gallery-block">
   <div class="container">
   <div class="col-lg-12">
      <br><br>
      <div >
         <ol class="breadcrumb">
            <li>
               <i class="fa fa-home"></i><a href="/SS4UREALSTATE/admin/modules/admin/Dashboard/Dashboard.php">Trang Chủ</a>
            </li>
            <li>
               <i></i><a href="index.php">Bất Động Sản</a>
            </li>
            <li class="active">
               <i class="fa fa-file"></i>Chỉnh Sửa
            </li>
         </ol>
      </div>
      <div class="text-head text-center">
         <h1>Chỉnh Sửa Thông Tin</h1>
      </div>
      <div class="clearfit"></div>
      <?php if(isset($_SESSION['error'])):?>
      <div class="alert alert-danger">
         <?php echo $_SESSION['error']; unset($_SESSION['error'])?>
      </div>
      <?php endif;?>
      <!--Đăng Tin-->
   </div>
</section>
<section>
   <div class="container">
      <form class="" action="" method="POST" enctype="multipart/form-data">
         <div class="form-row" >
            <div class="panel panel-primary">
               <div class="panel-heading">Thông Tin Chung</div>
               <div class="panel-body" >
                  <div class="form-group col-md-3">
                     <label for="inputEmail4">Mã Block</label>
                     <input type="text" class="form-control" id="inputEmail4" placeholder="" name="PORTION_ID" value="<?php echo $Editproduct['PORTION_ID'] ?>">
                     <?php if (isset($error['PORTION_ID'])):?>
                     <p class="text-danger"> <?php echo $error['PORTION_ID'] ?></p>
                     <?php endif?>
                  </div>
                  <div class="form-group col-md-3">
                     <label for="inputEmail4">Mã Tòa Nhà</label>
                     <input type="text" class="form-control" id="inputEmail4" placeholder="" name="BUILDING_ID"
                        value="<?php echo $Editproduct['BUILDING_ID'] ?>">
                     <?php if (isset($error['BUILDING_ID'])):?>
                     <p class="text-danger"> <?php echo $error['BUILDING_ID'] ?></p>
                     <?php endif?>
                  </div>
                  <div class="form-group col-md-3">
                     <label for="inputEmail4">Số Tầng</label>
                     <input type="text" class="form-control" id="inputEmail4" placeholder="" name="FLOOR_ID"
                        value="<?php echo $Editproduct['FLOOR_ID'] ?>">
                     <?php if (isset($error['FLOOR_ID'])):?>
                     <p class="text-danger"> <?php echo $error['FLOOR_ID'] ?></p>
                     <?php endif?>
                  </div>
                  <div class="form-group col-md-3">
                     <label for="inputEmail4">Số Nhà</label>
                     <input type="text" class="form-control" id="inputEmail4" placeholder="" name="HOUSE_DETAIL_CODE" value="<?php echo $Editproduct['HOUSE_DETAIL_CODE'] ?>">
                     <?php if (isset($error['HOUSE_DETAIL_CODE'])):?>
                     <p class="text-danger"> <?php echo $error['HOUSE_DETAIL_CODE'] ?></p>
                     <?php endif?>
                  </div>
                  <div class="form-group col-md-8">
                     <label for="duan">Chọn Dự án </label>
                     <select class="form-control form-control-lg" name="category_id" >
                        <option value="">Chung Cư Thuộc Dự án</option>
                        <?php foreach ($category as $item): ?>
                        <option value="<?php echo $item['id'] ?>"<?php echo $Editproduct['category_id'] == $item['id']? "selected = 'selected'":'' ?>><?php echo $item['name'] ?>
                        </option>
                        <?php endforeach?>
                     </select>
                     <?php if (isset($error['category_id'])):?>
                     <p class="text-danger"> <?php echo $error['category_id'] ?></p>
                     <?php endif?>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="inputEmail4">Hướng Nhà/Hướng Cửa Sổ</label>
                     <input type="text" class="form-control" id="inputEmail4" placeholder="" name="HOUSE_VIEW"
                        value="<?php echo $Editproduct['HOUSE_VIEW'] ?>">
                     <?php if (isset($error['HOUSE_VIEW'])):?>
                     <p class="text-danger"> <?php echo $error['HOUSE_VIEW'] ?></p>
                     <?php endif?>
                  </div>
               </div>
            </div>
         </div>
         <div class="panel panel-primary">
            <div class="panel-heading">Chi Tiết Bất Động Sản</div>
            <div class="panel-body">
               <div class="form-group col-md-4">
                  <div class="panel panel-primary">
                     <div class="panel-heading">Nhà Phố</div>
                     <div class="panel-body">
                        <div class="form-group">
                           <label for="inputAddress">Số Lượng Tầng</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="NP_FLOORS" value="<?php echo $Editproduct['NP_FLOORS'] ?>">
                           <?php if (isset($error['NP_FLOORS'])):?>
                           <p class="text-danger"> <?php echo $error['NP_FLOORS'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Diện Tích Lô Đất</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="NP_DT_LODAT" value="<?php echo $Editproduct['NP_DT_LODAT'] ?>">
                           <?php if (isset($error['NP_DT_LODAT'])):?>
                           <p class="text-danger"> <?php echo $error['NP_DT_LODAT'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress2">Diện Tích Sàn</label>
                           <input type="text" class="form-control" id="inputAddress2" placeholder="" name="NP_DT_SAN" value="<?php echo $Editproduct['NP_DT_SAN'] ?>">
                           <?php if (isset($error['NP_DT_SAN'])):?>
                           <p class="text-danger"> <?php echo $error['NP_DT_SAN'] ?></p>
                           <?php endif?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group col-md-4">
                  <div class="panel panel-primary">
                     <div class="panel-heading">Căn Hộ</div>
                     <div class="panel-body">
                        <div class="form-group">
                           <label for="inputAddress">Diện Tích Tim Tường</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="DT_TIMTUONG" value="<?php echo $Editproduct['DT_TIMTUONG'] ?>" >
                           <?php if (isset($error['DT_TIMTUONG'])):?>
                           <p class="text-danger"> <?php echo $error['DT_TIMTUONG'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Diện Tích Thông Thủy</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="DT_THONGTHUY" value="<?php echo $Editproduct['DT_THONGTHUY'] ?>">
                           <?php if (isset($error['DT_THONGTHUY'])):?>
                           <p class="text-danger"> <?php echo $error['DT_THONGTHUY'] ?></p>
                           <?php endif?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group col-md-4">
                  <div class="panel panel-primary">
                     <div class="panel-heading">Thông Tin Chi Tiết</div>
                     <div class="panel-body">
                        <div class="form-group col-md-6">
                           <label for="inputAddress">SL Phòng</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="SL_PHONG" value="<?php echo $Editproduct['SL_PHONG'] ?>">
                           <?php if (isset($error['SL_PHONG'])):?>
                           <p class="text-danger"> <?php echo $error['SL_PHONG'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="inputAddress">Số Lượng WC</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="SL_WC" 
                              value="<?php echo $Editproduct['SL_WC'] ?>" >
                           <?php if (isset($error['SL_WC'])):?>
                           <p class="text-danger"> <?php echo $error['SL_WC'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="inputAddress">Diện Tích Lửng</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="DT_LUNG" value="<?php echo $Editproduct['DT_LUNG'] ?>">
                           <?php if (isset($error['DT_LUNG'])):?>
                           <p class="text-danger"> <?php echo $error['DT_LUNG'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="inputAddress">Tình trạng</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="TTCANHO_NAME"
                              value="<?php echo $Editproduct['TTCANHO_NAME'] ?>">
                           <?php if (isset($error['TTCANHO_NAME'])):?>
                           <p class="text-danger"> <?php echo $error['TTCANHO_NAME'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Ngày Khởi Công</label>
                           <input type="date" class="form-control" id="inputAddress" placeholder="" name="OPENING_DAY" value="<?php echo $Editproduct['OPENING_DAY'] ?>">
                        </div>
                        <br>
                        <div class="form-group">
                           <label for="inputAddress">Ngày Hoàn Thành</label>
                           <input type="date" class="form-control" id="inputAddress" placeholder="" name="FINAL_DAY" value="<?php echo $Editproduct['FINAL_DAY'] ?>">
                        </div>
                        <div class="form-group">
                           <label for="exampleFormControlFile1">Chọn Hình Ảnh</label>
                           <input type="file" name="thunbar" accept="image/x-png,image/gif,image/jpeg">
                           <?php if(isset($error['thunbar'])):?>
                           <p class="text-danger"><?php echo $error['thunbar'] ?></p>
                           <?php endif ?>
                           <img src="<?php echo uploads() ?>product/<?php echo $Editproduct['thunbar'] ?>" width="50px" height="50px">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4" >
                     <label for="exampleFormControlTextarea1">Nhập Giá</label>
                     <input type="number" class="form-control" id="inputAddress" placeholder="000.000.000" name="price" value="<?php echo $Editproduct['price'] ?>">
                     <?php if (isset($error['price'])):?>
                     <p class="text-danger"> <?php echo $error['price'] ?></p>
                     <?php endif?>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="exampleFormControlTextarea1">Giảm Giá</label>
                     <input type="number" class="form-control" id="inputAddress" placeholder="%" name="sale" value="0 " value="<?php echo $Editproduct['sale'] ?>">
                  </div>
                  <div class="form-group col-md-4" >
                     <label for="exampleFormControlTextarea1">Nhập số lượng</label>
                     <input type="number" class="form-control" id="inputAddress" placeholder="" name="number" value="<?php echo $Editproduct['number'] ?>">
                     <?php if (isset($error['number'])):?>
                     <p class="text-danger"> <?php echo $error['number'] ?></p>
                     <?php endif?>
                  </div>
               </div>
               <div class="form-row-primary">
                  <div class="form-group-">
                     <label for="exampleFormControlTextarea1">Nhập chi tiết giới thiệu</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="4"><?php echo $Editproduct['content'] ?></textarea>
                     <?php if(isset($error['content'])): ?>
                     <p class="text-danger"> <?php echo $error['content'] ?></p>
                     <?php endif ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="pull-right">
               <button type="submit" class="btn btn-primary">Đăng Tin</button>
            </div>
         </div>
      </form>
   </div>
</section>
<!--end-->