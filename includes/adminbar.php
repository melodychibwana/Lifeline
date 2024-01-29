 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

   <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                               <a href="admin.php">
                                    <i class="nav-icon ti ti-home"></i>
                                    <span>Home</span>
                                   
                                </a>
                            <li class="nav-static-title">Adminstrator</li>
                            <li class="active">
                              
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-user"></i>
                                    <span class="nav-title"> Manage Doctors</span>
                                   
                                </a>
                                <ul aria-expanded="false">
                                    <li class="active"> <a href='addDoctors.php'>Add Doctors</a> </li>
                                    <li> <a href='DoctorsList.php'>View Doctors</a> </li>
                                    
                           
                            
                                </ul>
                            </li>
                            <li class="active">
                              
                              <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                  <i class="nav-icon ti ti-user"></i>
                                  <span class="nav-title"> Manage Patients</span>
                                 
                              </a>
                              <ul aria-expanded="false">
                                  
                                  <li> <a href='viewPatients.php'>View Patients</a> </li>
                                 
                         
                          
                              </ul>
                          </li>
                            <li>
                               
                                <ul aria-expanded="false">
                                        
                        </ul>

                        <li> <a href="#" onclick="confirmLogout()">
            <i class="fa fa-arrow-circle-left"></i>
            <span class="nav-title">Log Out</span>
          </a> </li>

                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                                    <div class="page-title mr-4 pr-4 border-right">
                                        <h1>Adminstrator's dashboard</h1>
                                    </div>
                                    <div class="breadcrumb-bar align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                admin
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Home</li>
                                            </ol>
                                        </nav>
                                    </div>
                               
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
  function confirmLogout() {
    Swal.fire({
      title: 'Are you sure?',
      text: 'You will be logged out!',
     
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, log me out!'
    }).then((result) => {
    console.log(" log me out ",result);
      if (result) {
        // Redirect to index.php after user clicks "Yes"
        console.log("yes log me out ");
        window.location.href = './index.php';
      }
    });
  }
</script>