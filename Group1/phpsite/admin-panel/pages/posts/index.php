<?php 
include "../../../bootstrap.php";

include BASE_DIR."/admin-panel/includes/layout/header.php";






?>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar Section -->
      <?php include "../../includes/layout/sidebar.php"?>

      <!-- Main Section -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="fs-3 fw-bold">مقالات</h1>

          <div class="btn-toolbar mb-2 mb-md-0">
            <a href="./create.html" class="btn btn-sm btn-dark">
              ایجاد مقاله
            </a>
          </div>
        </div>

        <!-- Posts -->
        <div class="mt-4">
          <div class="table-responsive small">
            <table class="table table-hover align-middle">
              <thead>
                <tr>
                  <th>id</th>
                  <th>عنوان</th>
                  <th>نویسنده</th>
                  <th>عملیات</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>لورم ایپسوم متن ساختگی</td>
                  <td>منصوری</td>
                  <td>
                    <a
                      href="./edit.html"
                      class="btn btn-sm btn-outline-dark">ویرایش</a>
                    <a
                      href="#"
                      class="btn btn-sm btn-outline-danger">حذف</a>
                  </td>
                </tr>
                <tr>
                  <th>2</th>
                  <td>لورم ایپسوم متن</td>
                  <td>منصوری</td>
                  <td>
                    <a
                      href="./edit.html"
                      class="btn btn-sm btn-outline-dark">ویرایش</a>
                    <a
                      href="#"
                      class="btn btn-sm btn-outline-danger">حذف</a>
                  </td>
                </tr>
                <tr>
                  <th>3</th>
                  <td>لورم ایپسوم متن ساختگی</td>
                  <td>منصوری</td>
                  <td>
                    <a
                      href="./edit.html"
                      class="btn btn-sm btn-outline-dark">ویرایش</a>
                    <a
                      href="#"
                      class="btn btn-sm btn-outline-danger">حذف</a>
                  </td>
                </tr>
                <tr>
                  <th>4</th>
                  <td>لورم ایپسوم</td>
                  <td>منصوری</td>
                  <td>
                    <a
                      href="./edit.html"
                      class="btn btn-sm btn-outline-dark">ویرایش</a>
                    <a
                      href="#"
                      class="btn btn-sm btn-outline-danger">حذف</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>
  <?php include "../../includes/layout/footer.php"?>
