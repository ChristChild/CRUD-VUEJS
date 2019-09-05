<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- main style sheet -->
    <link rel="stylesheet" href="main.css" />

    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <!-- Fontawesome  -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>First Vue</title>
  </head>
  <body>
    <div id="app">
      <div class="container-fluid">
        <div class="row bg-dark">
          <div class="col-lg-12">
            <p
              class="text-center text-light display 4 pt-2"
              style="font-style:38px;"
            >
              CRUD APPLICATION Using Vue JS, Php and Mysqli
            </p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row mt-3">
          <div class="col-lg-6">
            <h3 class="text-info">Register User</h3>
          </div>
          <div class="col-lg-6">
            <button
              class="btn btn-info float-right"
              @click="showAddModal=false"
            >
              <i class="fa fa-user"></i>&nbsp;&nbsp; Add New User
            </button>
          </div>
        </div>
        <hr class="bg-info" />
        <div class="alert alert-danger" v-if="errorMsg">
          Error Message
        </div>
        <div class="alert alert-success" v-if="successMsg">
          Success Message
        </div>

        <div class="row">
          <div class="col-lg-12">
            <table class="table table-bordered table-stripped">
              <thead>
                <tr class="text-centre text-light bg-info">
                  <td>ID</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Phone</td>
                  <td>Edit</td>
                  <td>Delete</td>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center"></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div id="overlay" v-if="showAddModal">
        <div class="model-dialog">
          <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
              <h5>Add new user</h5>
              <button class="close" type="button" @click="showAddModal=false">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- modal body -->
            <div class="model-body p-4">
              <form action="#" method="post">
                <!-- name  -->
                <div class="form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control form-control-lg"
                    placeholder="Name"
                  />
                </div>
                <!-- email address -->
                <div class="form-group">
                  <input
                    type="email"
                    name="email"
                    class="form-control form-control-lg"
                    placeholder="Email"
                  />
                </div>
                <!-- telephone number -->
                <div class="form-group">
                  <input
                    type="tel"
                    name="tel"
                    class="form-control form-control-lg"
                    placeholder="Number"
                  />
                </div>
                <!-- button to add user -->
                <div class="form-group">
                  <button
                    class="btn btn-info btn-block btn-lg"
                    @click="showAddModal=false"
                  >
                    Add User
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- Bootstrap js -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <!-- main javascript file -->
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
