var categoryList = [];

$(document).ready(function () {
  // Fetch category list
  $.ajax({
    url: 'http://localhost/api/categories/index.php',
    type: 'GET',
    success: function (data) {
      categoryList = JSON.parse(data);
      renderCategoryListUI(categoryList);
    },
    error: function (e) {
      console.log(e.message);
    }
  });
});

function renderCategoryListUI(categoryList) {
  $('#categories-list').empty();

  categoryList.forEach(category => {
    $('#categories-list').append(
      `
      <tr>
        <th scope="row">${category.id}</th>
        <td>${category.name}</td>
        <td>${category.image}</td>
        <td>
          <button onclick="editCategory(${category.id})" type="button" class="btn btn-primary">
            <i data-lucide="pencil"></i>Edit
          </button>
        </td>
        <td>
          <div class="d-flex justify-content-end">
            <button onclick="deleteCategory(${category.id})" type="button" class="btn btn-primary">
              <i data-lucide="trash-2"></i>Delete
            </button>
          </div>
        </td>
      </tr>
      `
    );
  });
}

function deleteCategory(categoryId) {
  $.ajax({
    url: 'http://localhost/api/categories/delete.php?categoryId=' + categoryId,
    type: 'post',
    success: function (data) {
      location.reload();
    },
    error: function (e) {
      console.log(e.message);
    }
  });
}



// function createCategory(categoryId){
//   $.ajax({
//     url:'http://localhost/api/categories/update.php?categoryId=' + categoryId,
//     type:"post",
//     success: function (data) {
//       console.reload(data);
//   },
//   error: function (e) {
//       console.log(e.message);
//   }
//   })
// }

// Event listener for the form submission
// $('#categoryForm').submit(function (event) {
//   // Prevent the default form submission
//   event.preventDefault();

//   // Get the values from the form fields
//   var name = $('#name').val();
//   var image = $('#image').val();
 

//   // Create an object with the form data
//   var myCategoryData = {
//     name: name,
//     image: image
//     // Add other fields as needed
//   };

//   // Call the createCategory function with the form data
// //   createCategory(myCategoryData);
//  });
// // function createCategory(categoryData) {
//   $.ajax({
//     url: 'http://localhost/api/categories/create.php?categoryId=' + categoryId,
//     type: 'POST',
//     contentType: 'application/json',
//     data: JSON.stringify(categoryData),
//     success: function (data) {
//       console.log('Success:', data);
//       location.reload();
//     },
//     error: function (xhr, status, error) {
//       console.error('Error:', status, error);
//     }
//   });
// }

// const mysql = Require('mysql');

// const connect = mysql.createConnection({
//   host:'localhost',
//   user:'root',
//   password:'',
//   database:'shop1'

// });
// connect.connect(function(err){
//   if (err) {
//       console.log('ket noi that bai')
//   }
// });
// module.exports = connect;
