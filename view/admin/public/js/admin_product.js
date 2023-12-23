var productList = [];

$(document).ready(function () {
  // Fetch category list
  $.ajax({
    url: "http://localhost/api/products/index.php",
    type: "GET",
    success: function (data) {
        productList = JSON.parse(data);
        renderProductListUI(productList);
    },
    error: function (e) {
      console.log(e.message);
    },
  });
});
function renderProductListUI(productList) {
  $("#Product-list").empty();
  productList.forEach(Products => {
    $('#Product-list').append(
      `
      <tr>
        <th scope="row">${Products.id}</th>
        <td>${Products.name}</td>
        <td>${Products.image}</td>
        <td>
          <button onclick="editProduct()" type="button" href="edit.html" class="btn btn-primary">
            <i data-lucile="pencil"></i>Edit
          </button>
        </td>
        <td>
          <div class="d-flex justify-content-end">
            <button onclick="deleteProduct(${Products.id})" type="button" class="btn btn-primary">
              <i data-lucile="trash-2"></i>Delete
            </button>
          </div>
        </td>
      </tr>
              `
    );
  });
}

function editProduct() {
    // Lấy dữ liệu từ biểu mẫu
    var id = $('#id').val();
    var name = $('#name').val();
    var image = $('#image').val();
  
    // Đảm bảo tất cả các trường đều đã được điền
    if (!id || !name || !image) {
      alert("Vui lòng điền đầy đủ thông tin.");
      return;
    }
  
    // Tạo đối tượng FormData để gửi các tệp tin
    var formData = new FormData();
    formData.append('id', id);
    formData.append('name', name);
    formData.append('image', image);
}