<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

<!--         Sidebar user panel (optional) -->
<!--        <div class="user-panel">
           
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Admin  </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>-->

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Administration</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=" {!! $selected_menu==1 ? 'active' : '' !!}">
                <a href="/">
                    <i class="fa fa-info-circle"></i>
                    <span>Latest Entries</span>
                </a>
            </li>
            <li class=" {!! $selected_menu==2 ? 'active' : '' !!}">
                <a href="/drafts">
                    <i class="fa fa-check-square-o"></i>
                    <span>For Approval</span>
                </a>
            </li>
            <!--
            <li class="treeview">
                <a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>-->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>