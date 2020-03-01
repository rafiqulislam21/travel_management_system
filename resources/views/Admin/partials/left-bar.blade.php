
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right sidebar-bg" id="sidebar-wrapper" >
      <!-- <div class="sidebar-heading">Start Bootstrap </div> -->
      <ul class="list-group list-group-flush" >
      <li class="bottom-red-border">
        <a href="{{route('homePage')}}" class="list-group-item  text-light menu-a-bg" >
        <i class="fas fa-home"></i> Dashboard </a>
        </li>

       <li class="bottom-red-border ">

        <a href="#" class="list-group-item  text-light menu-a-bg" data-toggle="collapse" data-target="#demo1"><i class="far fa-paper-plane"></i> Packages <i class="fa fa-fw fa-caret-down"></i></a>

           <ul  id="demo1" class="collapse list-group">
           <li class="hello">
           <a class="list-group-item   pl-5 text-secondary bg-light" href="{{url('/add-package')}}"><i class="fas fa-plus-square"></i> Add Package</a>
           </li>
           <li>
           <a class="list-group-item  pl-5 text-secondary bg-light" href="{{url('/view-package')}}"><i class="fas fa-eye"></i> View Package</a>
          </li>
         </ul>

      </li>

      <li class="bottom-red-border">
        <a href="#" class="list-group-item text-light menu-a-bg" data-toggle="collapse" data-target="#demo2"><i class="fas fa-users"></i> Employees <i class="fa fa-fw fa-caret-down"></i></a>

         <ul  id="demo2" class="collapse list-group">
           <li>
           <a class="list-group-item bg-light  pl-5 text-secondary " href="{{url('/add-employee')}}"><i class="fas fa-user-plus"></i> Add Employee</a>
           </li>
           <li>
           <a class="list-group-item  pl-5 text-secondary " href="{{url('/employee-list')}}"><i class="fas fa-eye"></i> View Employee</a>
          </li>
         </ul>

      </li>
      <li class="bottom-red-border">
        <a href="{{route('contactList')}}" class="list-group-item  text-light menu-a-bg"><i class="fas fa-file-signature"></i> Contact List</a>
      </li class="bottom-red-border">
      <!-- <li class="bottom-red-border">
        <a href="#" class="list-group-item  text-light menu-a-bg "><i class="fas fa-id-card-alt"></i> Profile</a>
      </li> -->
      <li class="bottom-red-border">
        <a href="{{route('userList')}}" class="list-group-item  text-light menu-a-bg "><i class="fas fa-id-card-alt"></i> User List</a>
      </li>
      <li class="bottom-red-border">
        <a href="{{route('bookingList')}}" class="list-group-item  text-light menu-a-bg "><i class="fas fa-list"></i> Booking List</a>
      </li>
      <li class="bottom-red-border">
        <a href="{{ route('logout') }}" class="list-group-item  text-light menu-a-bg"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
