<!-- sidebar
===========================================-->
<div id="dw-s1" class="bmd-layout-drawer bg-faded">

<div class="container-fluid side-bar-container">
    <header class="pb-0">
        <a class="navbar-brand">
            {{ auth('web')->user()->name }}
        </a>
    </header>
    <p class="side-comment">المستخدمين</p>
    {{-- <li class="side a-collapse short ">
        <a href="#" class="side-item "><i class="fas fa-language  mr-1"></i>المستخدمين<span
                class="badge badge-pill badge-success">new</span></a>
    </li> --}}

    <ul class="side a-collapse short ">
        <a class="ul-text"><i class="fas fa-tachometer-alt mr-1"></i>
            الموظفين
            <i class="fas fa-chevron-down arrow"></i></a>
        <div class="side-item-container hide animated">
            <li class="side-item "><a href="{{ route('admin.employee.index') }}"><i class="fas fa-angle-right mr-2"></i>كل الموظفين</a>
            </li>
            <li class="side-item">
                <a href="{{ route('admin.employee.add') }}">
                    <i class="fas fa-angle-right mr-2"></i>إضافة موظف جديد
                </a>
            </li>
        </div>
    </ul>

</div>

</div>