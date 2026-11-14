<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('dashboard') }}" class="brand-link">
    <img src="{{ asset('public/images/pricon_logo2.png') }}"
         alt="CNPTS"
         class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">PATS - CN</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-header">EXPORT REPORT</li>
        <li class="nav-item">
          <a href="{{ route('exportshippingrecord') }}" class="nav-link">
            <i class="fa fa-file-excel"></i>
            <p>
              Shipment Record
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('exportpartslotrecord') }}" class="nav-link">
            <i class="fa fa-file-excel"></i>
            <p>
              Parts Lot Record
            </p>
          </a>
        </li>
        
        <li class="nav-header">PRODUCTION</li>
        <li class="nav-item">
          <a href="{{ route('materialissuancealias') }}" class="nav-link">
            <i class="fas fa-file-alt"></i>
            <p>
              Material Input
            </p>
          </a>
        </li>
<!--         <li class="nav-item">
          <a href="{{ route('c3labelprintingalias') }}" class="nav-link">
            <i class="fas fa-barcode"></i>
            <p>
              C3 Label Printing
            </p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="{{ route('partspreparatoryalias') }}" class="nav-link">
            <i class="fas fa-clipboard-check"></i>
            <p>
              Parts Preparatory
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-cogs"></i>
            <p>
              Production
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('prod_pre_assy') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pre-Assembly</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('prod_runcard_new') }}" class="nav-link">
                {{-- <i class="fas fa-user-secret"></i> --}}
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Runcard
                </p>
              </a>
            </li>
          </ul>
        </li> 

        <li class="nav-header">LABEL PRINTING</li>
        <li class="nav-item">
          <a id="c3Label" href="{{ route('c3_label') }}" class="nav-link">
              <i class="fa fa-th-large">&nbsp;&nbsp;</i> 
              <p>C3 Labeller</p>
          </a>
        </li>

        <li class="nav-header">CN PPTS v2</li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-cogs"></i>
            <p>
              CN PPTS MODULES
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ppts_user') }}" class="nav-link">
                &nbsp;<i class="fas fa-users-cog"></i>
                <p>&nbsp;PPTS User List</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ppts_ppc_matrix') }}" class="nav-link">
                &nbsp;<i class="far fa-clipboard"></i>
                <p>&nbsp;PPTS Matrix</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ppts_oqc_series') }}" class="nav-link">
                &nbsp;<i class="fas fa-cubes"></i>
                <p>&nbsp;PPTS Series</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ppts_production_registry') }}" class="nav-link">
                &nbsp;<i class="fas fa-sitemap"></i>
                <p>&nbsp;PPTS Production Registry</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ppts_oqc_lot_app') }}" class="nav-link">
                &nbsp;<i class="fas fa-ticket-alt"></i>
                <p>&nbsp;PPTS OQC Lot Application</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ppts_oqc_inspection') }}" class="nav-link">
                &nbsp;<i class="fa fa-swatchbook"></i>
                <p>&nbsp;PPTS OQC Inspection</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ppts_packing_and_shipping') }}" class="nav-link">
                &nbsp;<i class="fas fa-truck-loading"></i>
                <p>&nbsp;PPTS Packing and Shipping</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ppts_packing_and_shipping_export') }}" class="nav-link">
                &nbsp;<i class="fas fa-file-excel"></i>
                <p>&nbsp;PPTS Export Report</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- <li class="nav-item">
          <a href="{{ route('prod_runcard_new') }}" class="nav-link">
            <i class="fas fa-file-invoice"></i>
            <p>
              Runcard
            </p>
          </a>
        </li> --}}
        {{-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-cogs"></i>
            <p>
              Production
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="{{ route('prod_runcard') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Runcard</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="{{ route('prod_runcard_new') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Runcard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('oqclotapp') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>OQC Lot Application</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route('oqclvisualinspection') }}" class="nav-link">
            <i class="fas fa-microscope"></i>
            <p>
              OQC
            </p>
          </a>
        </li> --}}
         <!-- <li class="nav-item">
          <a href="{{ route('prod_preliminary_inspection') }}" class="nav-link">
            <i class="fas fa-box-open"></i>
            <p>
              Prod'n Packing Inspection
            </p>
          </a>
        </li>

         <li class="nav-item">
          <a href="{{ route('oqc_packing_inspection') }}" class="nav-link">
            <i class="fas fa-truck"></i>
            <p>
              OQC Packing Inspection
            </p>
          </a>
        </li> -->
        
       <!--  <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-qrcode"></i>
            <p>
              DLABEL
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('packingoperator') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Packing Operator</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('packinginspector') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Packing Inspector</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dlabelprintingalias') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DLABEL Printing</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dlabelcheckeralias') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DLABEL Checker</p>
              </a>
            </li>
          </ul>
        </li> -->
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-dolly"></i>
            <p>
              Shipping
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('shippingoperator')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Shipping Operator</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('shippinginspector')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Shipping Inspector</p>
              </a>
            </li>
          </ul>
        </li> -->
        
        <li class="nav-header">WAREHOUSE</li>
        <li class="nav-item">
          <a href="{{ route('warehouse') }}" class="nav-link">
            <i class="fas fa-qrcode"></i>
            <p>
              QR Code Issuance
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('kitting') }}" class="nav-link">
            <i class="fas fa-qrcode"></i>
            <p>
              Kitting
            </p>
          </a>
        </li>

        <li class="nav-header">RAPID</li>
        <li class="nav-item">
          <a href="{{ route('rapid_acdcs') }}" class="nav-link">
            <i class="fas fa-file-pdf"></i>
            <p>
              ACDCS Reference
            </p>
          </a>
        </li>

        <li class="nav-header">PPC</li>
        <li class="nav-item">
          <a href="{{ route('shipmentconfirmationalias') }}" class="nav-link">
            <i class="fas fa-file-excel"></i>
            <p>
              Shipment Confirmation
            </p>
          </a>
        </li>

   <!--    <li class="nav-header">SHIPMENT RECORD</li>
        <li class="nav-item">
          <a href="{{ route('exportshippingrecord') }}" class="nav-link">
            <i class="fa fa-file-excel"></i>
            <p>
              Packing and Shipment Record
            </p>
          </a>
        </li> -->

     {{-- @if(Auth::user()->position == 4||Auth::user()->position == 5||Auth::user()->position == 1||Auth::user()->position == 2)
      <li class="nav-header">PACKING AND SHIPPING</li>
      <li class="nav-item">
        <a href="{{ route('packingandshippingalias') }}" class="nav-link">
          <i class="fa fa-file-excel"></i>
          <p>
            Packing and Shipping
          </p>
        </a>
      </li>
    @endif --}}
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>