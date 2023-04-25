<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo  en esta parte se modifica el color del logo adminlte-->
    <a href="../../index3.html" class="brand-link navbar-warning">
      <img src="views/assets/img/template/logo.png" alt="AdminLTE Logo" style="opacity: .8">
   
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


 <!-- boton de home -->
               <li class="nav-item ">
            <a href="/" class="nav-link  <?php if (empty($routesArray)): ?>active<?php endif ?>">
              <i class="nav-icon far fa-image"></i>
              <p>
                Home
              </p>
            </a>
          </li>

 <!-- boton manager -->
          <li class="nav-item">
            <a href="/manager" class="nav-link  <?php if ($routesArray[1]== "manager"): ?>active<?php endif ?>" >
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Manager
              </p>
            </a>
          </li>

 <!-- boton usuarios -->
 <li class="nav-item">
            <a href="/usuarios" class="nav-link <?php if ($routesArray[1]== "usuarios"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>


 <!-- boton marketplase -->
 <li class="nav-item">
            <a href="/marketplase" class="nav-link <?php if ($routesArray[1]== "marketplase"): ?>active<?php endif ?> ">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Marketplase
              </p>
            </a>
          </li>


 <!-- boton categorias -->
 <li class="nav-item">
            <a href="/categorias" class="nav-link <?php if ($routesArray[1]== "categorias"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
               Categorias
              </p>
            </a>
          </li>




 <!-- boton subcategorias -->
 <li class="nav-item">
            <a href="/subcategorias" class="nav-link <?php if ($routesArray[1]== "subcategorias"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
               subcategorias
              </p>
            </a>
          </li>




 <!-- boton productos -->
 <li class="nav-item">
            <a href="/productos" class="nav-link <?php if ($routesArray[1]== "productos"): ?>active<?php endif ?> ">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
               Productos
              </p>
            </a>
          </li>



 <!-- boton ordenes -->
 <li class="nav-item">
            <a href="/ordenes" class="nav-link <?php if ($routesArray[1]== "ordenes"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p>
              Ordenes
              </p>
            </a>
          </li>


           <!-- boton  ventas -->
 <li class="nav-item">
            <a href="/ventas" class="nav-link <?php if ($routesArray[1]== "ventas"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
              Ventas
              </p>
            </a>
          </li>


                     <!-- boton  mensajes -->
 <li class="nav-item">
            <a href="/mensajes" class="nav-link <?php if ($routesArray[1]== "mensajes"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
              Mensajes
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>