<style>
  .navbar-nav .nav-link:hover {
    color: #ffffff !important;
    background-color: rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    transition: all 0.3s ease;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #39A900 !important;">
  <div class="container-fluid">

    <a class="navbar-brand d-flex align-items-center" href="{{ url('/home') }}">

      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAM-jtaxKYljPzx7-TEn-u8MQWRjFmSUTMIrZAYLFB4ZfIHjBOlRQPlGA&s=10" alt="Logo" width="40" height="40" class="d-inline-block align-text-top me-2" style="border-radius: 5px;">
      <span class="fw-bold text-white">AdminSENA</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{ route('area.create') }}">Area</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{ route('apprentice.registro') }}">Aprendices</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white-50" href="{{ route('trainig-center.create') }}">Centro de estudio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white-50" href="{{ route('computer.create') }}">Nuevo computador</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white-50" href="{{ route('teacher.create') }}">Instructores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white-50" href="{{ route('course.registro') }}">Curso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white-50" href="{{ route('course.registro') }}">Formularios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white-50" href="{{ route('course_teacher.registro') }}">Asignar</a>
        </li>
      </ul>


    </div>
  </div>
</nav>