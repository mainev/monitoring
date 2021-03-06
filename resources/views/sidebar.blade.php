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
        <!--        <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                        <span class="input-group-btn">
                            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>-->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=" {!! $selected_menu==1 ? 'active' : '' !!}">
                <a href="/">
                    <i class="fa fa-bell-o"></i>
                    <span>Latest Entries</span>
                </a>
            </li>
            <li class=" {!! $selected_menu==2 ? 'active' : '' !!}">
                <a href="/drafts">
                    <i class="fa fa-check-square-o"></i>
                    <span>For Approval</span>
                </a>
            </li>
            <li class=" {!! $selected_menu==4 ? 'active' : '' !!}">
                <a href="/issuance">
                    <i class="glyphicon glyphicon-export"></i>
                    <span>Issuance Entries</span>
                </a>
            </li>
            <li class="treeview  {!! ($selected_menu==5) ? 'active' : '' !!}">
                <a href="javascript:void(0);">
                    <i class="fa fa-files-o"></i>
                    <span>Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="{!! ($selected_menu==5) ? 'active' : '' !!}">
                        <a href="/item_reports"> 
                            <i class="fa fa-qrcode"></i>
                            <span>Items</span></a>
                    </li>
                   
                </ul>
            </li>
            <li class="header">EXTRAS</li>
            <li class=" {!! $selected_menu==3 ? 'active' : '' !!}">
                <a href="/user_activity">
                    <i class="fa fa-line-chart"></i>
                    <span>User Activity</span>
                </a>
            </li>
            <!--             <li class=" ">
                            <a href="javascript:void(0)">
                                <i class="fa fa-binoculars"></i>
                                <span>Document Finder</span>
                            </a>
                        </li>-->


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>