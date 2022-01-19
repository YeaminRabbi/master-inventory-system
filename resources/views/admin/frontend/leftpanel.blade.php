<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> 
    Dashboard
  </a></div>
<div class="sl-sideleft">
 

  <label class="sidebar-label">Options</label>
  <div class="sl-sideleft-menu">
    <a href="{{ route('admin') }}" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="fa fa-home" aria-hidden="true"></i>
        <span class="menu-item-label">Dashboard</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->


   


    {{--  @if (Auth::user()->role == 'admin')
      <a href="{{ route('randomData') }}" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="fa fa-list-ul" aria-hidden="true"></i>&nbsp;
          <span class="menu-item-label">Generate Random Data</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
    @endif
      --}}


    <a href="" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp;&nbsp;
        <span class="menu-item-label">Records</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->

    <a href="{{ route('userInformation') }}" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="fa fa-user" aria-hidden="true"></i>&nbsp;
          <span class="menu-item-label">User</span>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->


  </div><!-- sl-sideleft-menu -->

  <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
