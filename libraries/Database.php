<?php
   class Database
   {
       public $link;
       public function __construct()
       {
           $this->link = mysqli_connect("localhost","root","","realestate")or die();
           mysqli_set_charset($this->link,"utf8");
       }
       /*
           [insert description] hàm insert
           param $table
           param array $data
           return integer
       */
           //xóa data theo id
        public function delete($table, $id)
        {
          $sql ="DELETE FROM {$table} WHERE id = $id ";
          mysqli_query($this->link,$sql) or die ("Lỗi Truy Vấn delete --" .mysqli_error($this->link));
          return mysqli_affected_rows($this->link);
        }
        //thêm data
       public function insert($table, array $data)
       {
           $sql = "INSERT INTO {$table}";
           $columns = implode(',',array_keys($data));
           $values  = "";
           $sql.='('.$columns.')';
           foreach($data as $field =>$value)
           {
               if(is_string($value)){
                   $values .="'". mysqli_real_escape_string($this->link,$value)."',";
               }else{
                   $values .= mysqli_real_escape_string($this->link,$value).',';
               }
           }
               $values = substr($values,0,-1);
               $sql .= "VALUES (".$values.')';
               // _debug($sql);die;
               mysqli_query($this->link,$sql) or die("lỗi query insert".mysqli_error($this->link));
               return mysqli_insert_id($this->link);
       }
       //phun hết data ra theo dạng mảng
       public function fetchAll($table)
       {
           $sql = "SELECT * FROM {$table} WHERE 1=1";
           $result = mysqli_query($this->link,$sql) or die("Lỗi Truy Vấn fetch ALL".mysqli_error($this->link));
           $data = [];
           if($result)
           {
               while($num = mysqli_fetch_assoc($result))
               {
                   $data[]=$num;
               }
           }
           return $data;
       }
       //kiểm tra dữ liệu đã tồn tại hay chưa
       public function fetchOne($table, $query)
       {
            $sql = "SELECT * FROM {$table} WHERE ";
            $sql .= $query;
            $sql .= "LIMIT 1";
            $result = mysqli_query($this->link,$sql) or die ("Lỗi truy vấn fetchOne" .mysqli_error($this->link));
            return mysqli_fetch_assoc($result);
       }
       //select tất cả các sản phẩm có id bằng id truyền vào
       public function fetchID($table,$id)
       {
            $sql="SELECT * FROM {$table} WHERE id =$id";
            $result = mysqli_query($this->link,$sql) or die("lỗi query truy vấn fetchID".mysqli_error($this->link));
            return mysqli_fetch_assoc($result);
       }
       //cập nhật data
       public function update($table, array $data, array $conditions)
       {
            $sql ="UPDATE {$table}";
            $set=" SET ";
            $where=" WHERE ";
            foreach($data as $field=>$value){
                if(is_string($value)){
                    $set .= $field .'='.'\''.mysqli_real_escape_string($this->link,xss_clean($value)
                        ).'\',';
                }else{
                    $set .= $field .'='. mysqli_real_escape_string($this->link,xss_clean($value)).',';
                }
            }
            $set = substr($set,0,-1);
   
            foreach ($conditions as $field => $value) {
                if(is_string($value)){
                    $where .= $field .'='.'\''. mysqli_real_escape_string($this->link,xss_clean($value)).'\' AND ';
                }else{
                    $where .=$field .'='. mysqli_real_escape_string($this->link,xss_clean($value)).' AND ';
                }
            }
            $where = substr($where,0,-5);
            $sql.= $set . $where;
            mysqli_query($this->link, $sql)or die("Lỗi truy vấn update--".mysqli_error($this->link));
            return mysqli_affected_rows($this->link);
        }
        /*
        //phân trang
        public function fetchJone($table,$sql,$page =0,$row,$pagi = false )
        {
          $data = [];
          if ($pagi == true) 
          {
              $total = $this->countTable($table);
              $sotrang = ceil($total / $row);
              $start = ($page - 1) * $row ;
              $sql .= " LIMIT $start,$row";
              $data= [ "page" => $sotrang];

              $result = mysqli_query($this->link,$sql) or die ("Lỗi truy vấn fetchJone".
                mysqli_error($this->link));
   
          }
          else
          {
            $result = mysqli_query($this->link,$sql) or die ("lỗi truy vấn fetchJone=--".mysqli_error($this->link));
          }
          if ( $result)
          {
            while ($num = mysqli_fetch_assoc($result)) {
                $data[]=$num;
            }
          }
          return $data; 
        }
        */
        // phun data ra theo dạng mảng với câu truy vấn sql
        public function fetchsql( $sql )
        {
            $result = mysqli_query($this->link,$sql) or die("Lỗi  truy vấn sql " .mysqli_error($this->link));
            $data = [];
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }
         public function fetchJones($table,$sql,$total = 1,$page,$row ,$pagi = true )
        {
            
            $data = [];

            if ($pagi == true )
            {
                $sotrang = ceil($total / $row);
                $start = ($page - 1 ) * $row ;
                $sql .= " LIMIT $start,$row ";
                $data = [ "page" => $sotrang];
              
               
                $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->link));
            }
            else
            {
                $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->link));
            }
            
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            
            return $data;
        }
        // tải trang
    public function fetchJone($table,$sql ,$page = 0,$row ,$pagi = false )
        {
        
            $data = [];
            if ($pagi == true )
            {
                $total = $this->countTable($table);
                $sotrang = ceil($total / $row);
                $start = ($page - 1 ) * $row ;
                $sql .= " LIMIT $start,$row";
                $data = [ "page" => $sotrang];
               
                $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->link));
            }
            else
            {
                $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->link));
            }
            
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        // tải số trang pagening
        public function fetchJoneDetail($table , $sql ,$page = 0,$total ,$pagi )
        {
            $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->link));

            $sotrang = ceil($total / $pagi);
            $start = ($page - 1 ) * $pagi ;
            $sql .= " LIMIT $start,$pagi";

            $result = mysqli_query($this->link , $sql);
            $data = [];
            $data = [ "page" => $sotrang];
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }
        // tăng lượt xem mỗi lần click
        public function view($product)
        {
          $id =$product->ma_sp;
          $flag =1;
          if(\Session::exists('view'))
          {
            $view =\Session::get('view');
            if(array_key_exists($id,$view['product']))
            {
              $time = time();
              $view =\Session::get('view');
              $viewPost = $view['product'][$id];
              if(($viewPost['time']+ $this->timeStop)>$time)$flag = 0;
            }
          }
          if($flag==1)
          {
            $view['product'][$id]=['time'=>time()];
            \Session::put('view',$view);
            \DB::table('san_pham')->where('ma_sp',$id)->increment('view');
          }
        }
   
    }
   ?>