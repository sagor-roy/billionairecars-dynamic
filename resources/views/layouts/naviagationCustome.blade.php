<?php $sidebar = SiteHelpers::menus('sidebar') ;

$active = Request::segment(1);

?>
<div class="navigation">
    <div class="sidebar-compact" id="side-nav">

      <ul>

          <li class="logo" >

            @if(file_exists(public_path().'/uploads/images/'.config('sximo')['cnf_logo']) && config('sximo')['cnf_logo'] !='')

              <img src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" alt="{{ config('sximo')['cnf_appname'] }}" width="40" />

              @else

              <img src="{{ asset('uploads/logo.png')}}" alt="{{ config('sximo')['cnf_appname'] }}"  width="40" />

              @endif 

           </li>  

          @foreach ($sidebar as $menu)
            @if($menu['module'] =='separator')
              <li class="header-menu"> <span> {{$menu['menu_name']}} </span></li>  
            @else

                  @if(count($menu['childs']) > 0 ) 
                       <li class="sidebar-dropdown">
                  @else 
                       <li> 
                  @endif
                <a 
                    @if(count($menu['childs']) > 0 ) 

                        href="javascript:void(0);" 

                    @elseif($menu['menu_type'] =='external')
                        href="{{ $menu['url'] }}" 
                    @else
                        href="{{ url($menu['module'])}}" 
                    @endif         
                    
                    @if(Request::segment(1) == $menu['module']) class="active" @endif
                    >
                    <span class="iconic"> <i class="{{$menu['menu_icons']}}"></i> </span>                    

                  </a> 

                  @if(count($menu['childs']) > 0 ) 
                    <div class="sidebar-submenu " >
                        <ul>
                            @foreach ($menu['childs'] as $menu2)
                            <li>
                                <a 
                                    @if(count($menu2['childs']) > 0 ) 
                                        href="javascript:void(0);" 
                                    @elseif($menu2['menu_type'] =='external')
                                        href="{{ $menu2['url'] }}" 
                                    @else
                                        href="{{ url($menu2['module'])}}" 
                                    @endif  
                                    @if(Request::segment(1) == $menu2['module']) class="active" @endif       

                                >
                                 <span>
                                    {{ (isset($menu2['menu_lang']['title'][session('lang')]) ? $menu2['menu_lang']['title'][session('lang')] : $menu2['menu_name']) }}
                                </span>
                                </a> 
                                @if(count($menu2['childs']) > 0 ) 
                                    <div class="sidebar-submenu " >
                                        <ul>
                                            @foreach ($menu2['childs'] as $menu3)
                                            <li>
                                                <a 
                                                    @if(count($menu3['childs']) > 0 ) 
                                                        href="javascript:void(0);" 
                                                    @elseif($menu3['menu_type'] =='external')
                                                        href="{{ $menu3['url'] }}" 
                                                    @else
                                                        href="{{ url($menu3['module'])}}" 
                                                    @endif  
                                                    
                                                    @if(Request::segment(1) == $menu3['module']) class="active" @endif       
                                                >
                                                 <span>
                                                    {{ (isset($menu3['menu_lang']['title'][session('lang')]) ? $menu3['menu_lang']['title'][session('lang')] : $menu3['menu_name']) }}
                                                </span>
                                                </a> 
                                            </li>

                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </li>
                            @endforeach

                        </ul>

                    </div>

                  @endif





            </li>       

            @endif



           

        @endforeach

          <li  class="bottom logout"><a href="{{ url('user/logout')}}"class="confirmLogout" ><i class="lni-power-switch"></i></a></li>

      </ul>    

    </div>
</div>   
<script type="text/javascript">
$(document).ready(function(){
})
</script>