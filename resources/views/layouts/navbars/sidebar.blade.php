<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>



      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="{{ ($activePage == 'profile' || $activePage == 'user-management') ? 'true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('User Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'profile' || $activePage == 'user-management') ? 'show' : '' }}" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>


      <li class="nav-item {{ ($activePage == 'setup' || $activePage == 'group' || $activePage == 'year' || $activePage == 'shift' || $activePage == 'category' || $activePage == 'categoryAmount' || $activePage == 'exam' || $activePage == 'subject' ||  $activePage == 'designation' || $activePage == 'assignSubject'  ) ? ' active' : '' }}">
        
        
        <a class="nav-link" data-toggle="collapse" href="#setupManagement" aria-expanded="{{ ($activePage == 'setup' || $activePage == 'year' || $activePage == 'group' || $activePage == 'shift' || $activePage == 'category' || $activePage == 'categoryAmount' || $activePage == 'exam' || $activePage == 'subject' ||  $activePage == 'designation' || $activePage == 'assignSubject' ) ? 'true' : 'false' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Setup Management') }}
            <b class="caret"></b>
          </p>
        </a>

        <div class="collapse {{ ($activePage == 'setup' || $activePage == 'year' || $activePage == 'group' || $activePage == 'shift' || $activePage == 'category' || $activePage == 'categoryAmount' || $activePage == 'exam' || $activePage == 'subject' ||  $activePage == 'designation' || $activePage == 'assignSubject' ) ? 'show' : '' }}" id="setupManagement">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'setup' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('studentClass.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Student Class') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'year' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('studentYear.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Student Year') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'group' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('studentGroup.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Student Group') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'shift' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('studentShift.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Student Shift') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('feeCategory.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Fee Category') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'categoryAmount' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('feeCategoryAmount.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Fee Amount') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'exam' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('examType.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Exam Type') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'subject' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('subject.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Subject') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'assignSubject' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('assignSubject.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Assign Subject') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'designation' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('designation.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Designation') }} </span>
              </a>
            </li>

          </ul>
        </div>


      </li>




      <li class="nav-item {{ ($activePage == 'studentRegistration'  || $activePage == 'assignStudent' || $activePage == 'waiver' || $activePage == 'scholarship'  ) ? ' active' : '' }}">
        
        
        <a class="nav-link" data-toggle="collapse" href="#manageStudent" aria-expanded="{{ ($activePage == 'studentRegistration'  || $activePage == 'assignStudent' || $activePage == 'waiver' || $activePage == 'scholarship'  ) ? 'true' : 'false' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Manage Student') }}
            <b class="caret"></b>
          </p>
        </a>

        <div class="collapse {{ ($activePage == 'studentRegistration' || $activePage == 'assignStudent' || $activePage == 'waiver' || $activePage == 'scholarship'  ) ? 'show' : '' }}" id="manageStudent">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'studentRegistration' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('student.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Student Registration') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'assignStudent' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('assignStudent.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Assign Student') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'scholarship' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('scholarship.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Student Scholarship') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'waiver' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('waiver.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Student Waiver') }} </span>
              </a>
            </li>

          </ul>
        </div>


      </li>


      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>





    </ul>
  </div>
</div>
