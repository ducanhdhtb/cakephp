<!DOCTYPE html>
<html>
  <head>
   <title>Ví dụ 4</title>
  </head>
  <body>
  <?php
   if($data==NULL){
     echo "<h2>Dada Empty</h2>";
   }
   else{
     echo "<table>
     <tr>
     <td>id</td>
     <td>Title</td>
     <td>Description</td>
     </tr>";
     foreach($data as $item){
      echo "<tr>";
      echo "<td>".$item['books']['id']."</td>";
      echo "<td>".$item['books']['title']."</td>";
      echo "<td>".$item['books']['description']."</td>";
      echo "</tr>";
     }
  }
?>
  </body>
<!-- 
  $this->Book->find(“all”);//first
$this->Book->find(“all”,dieu_kien);//first
$this->Book->query(cau_truy_van_sql);
Trong file BooksController.php mình có đặt tên là public $name = “Books”; và trong Book.php có đặt tên var $name = “Book”; việc chọn var hay public đều được ở phiên bản PHP từ 5.1.3 trở lên, nếu sử dụng var ở phiên bản PHP trước 5.1.3 sẽ có cảnh báo.
Cách đặt tên các class, file thì các bạn xem lại bài [Cakephp] Bài 3 – Cấu trúc thư mục và các quy ước đặt tên -->