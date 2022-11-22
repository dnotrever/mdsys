<link rel="stylesheet" href="/css/menu.css">

<nav class="navbar navbar-expand p-0">

    <div class="container-fluid" id="menu">

        <a class="navbar-brand me-5 ms-3 p fs-3" href="/dashboard">
            <i class="fa-solid fa-house-chimney-medical me-1 text-primary"></i>
            <span class="fw-bold">MDSYS</span>
        </a>

        <div class="collapse navbar-collapse">

            <ul class="navbar-nav" id="clinic-menu-group">

                <li class="nav-item dropdown" id="menu-agenda">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Agenda
                    </a>
                    <ul class="dropdown-menu border-top-0 rounded-0 rounded-bottom shadow-sm">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-regular fa-calendar-days col-2 align-self-center text-center"></i>
                                    <span class="col-10">Agenda Diária</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-regular fa-calendar-check col-2 align-self-center text-center"></i>
                                    <span class="col-10">Check-in</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-check-double col-2 align-self-center text-center"></i>
                                    <span class="col-10">Confirmar Agendamentos</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-laptop-medical col-2 align-self-center text-center"></i>
                                    <span class="col-10">Equipamentos Alocados</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-regular fa-map col-2 align-self-center text-center"></i>
                                    <span class="col-10">Mapa da Agenda</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item" id="menu-waiting">
                    <a class="nav-link" href="#">
                        Espera
                    </a>
                </li>

                <li class="nav-item dropdown" id="menu-patients">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Pacientes
                    </a>
                    <ul class="dropdown-menu border-top-0 rounded-0 rounded-bottom shadow-sm">
                        <li>
                            <a class="dropdown-item" href="/patient/insert">
                                <div class="row">
                                    <i class="fa-solid fa-user-plus col-2 align-self-center"></i>
                                    <span class="col-10">Inserir Paciente</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/patient/search">
                                <div class="row">
                                    <i class="fa-solid fa-list-ul col-2 align-self-center"></i>
                                    <span class="col-10">Listar Pacientes</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item dropdown" id="menu-inventory">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Estoque
                    </a>
                    <ul class="dropdown-menu border-top-0 rounded-0 rounded-bottom shadow-sm">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-plus col-2 align-self-center text-center"></i>
                                    <span class="col-10">Inserir Produto</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-list-check col-2 align-self-center text-center"></i>
                                    <span class="col-10">Listar Produtos</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-kit-medical col-2 align-self-center text-center"></i>
                                    <span class="col-10">Kits de Produtos</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-regular fa-rectangle-list col-2 align-self-center text-center"></i>
                                    <span class="col-10">Requisição de Estoque</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item" id="menu-financial">
                    <a class="nav-link" href="#">
                        Financeiro
                    </a>
                </li>

                <li class="nav-item" id="menu-reports">
                    <a class="nav-link" href="#">
                        Relatórios
                    </a>
                </li>

                <li class="nav-item dropdown clinic-icon" id="menu-database">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-database"></i>
                    </a>
                    <ul class="dropdown-menu border-top-0 rounded-0 rounded-bottom shadow-sm">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-regular fa-id-card col-2 align-self-center text-center"></i>
                                    <span class="col-10">Convênios</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-regular fa-address-book col-2 align-self-center text-center"></i>
                                    <span class="col-10">Contatos</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-laptop-medical col-2 align-self-center text-center"></i>
                                    <span class="col-10">Equipamentos</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-shop col-2 align-self-center text-center"></i>
                                    <span class="col-10">Fornecedores</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-user-group col-2 align-self-center text-center"></i>
                                    <span class="col-10">Funcionários</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-regular fa-file-lines col-2 align-self-center text-center"></i>
                                    <span class="col-10">Laudos</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-location-dot col-2 align-self-center text-center"></i>
                                    <span class="col-10">Locais de Atendimento</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-stethoscope col-2 align-self-center text-center"></i>
                                    <span class="col-10">Procedimentos</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-user-doctor col-2 align-self-center text-center"></i>
                                    <span class="col-10">Profissionais</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown clinic-icon" id="menu-configs">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-gear"></i>
                    </a>
                    <ul class="dropdown-menu border-top-0 rounded-0 rounded-bottom shadow-sm">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class=" col-2 align-self-center text-center"></i>
                                    <span class="col-10"></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class=" col-2 align-self-center text-center"></i>
                                    <span class="col-10"></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class=" col-2 align-self-center text-center"></i>
                                    <span class="col-10"></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class=" col-2 align-self-center text-center"></i>
                                    <span class="col-10"></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class=" col-2 align-self-center text-center"></i>
                                    <span class="col-10"></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class=" col-2 align-self-center text-center"></i>
                                    <span class="col-10"></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class=" col-2 align-self-center text-center"></i>
                                    <span class="col-10"></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class=" col-2 align-self-center text-center"></i>
                                    <span class="col-10"></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class=" col-2 align-self-center text-center"></i>
                                    <span class="col-10"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

            <ul class="navbar-nav ms-auto" id="user-menu-group">

                <li class="nav-item dropdown" id="menu-tasks">
                    <a class="nav-link text-center" href="#" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-list-check"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-2 border-top-0 rounded-0 rounded-bottom shadow-sm">
                        <li>
                            <h6 class="dropdown-header">
                                <i class="fa-solid fa-list-check me-2"></i>
                                Tarefas
                            </h6>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <p class="p-3">
                                Nenhuma tarefa.
                            </p>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown" id="menu-notifications">
                    <a class="nav-link text-center" href="#" data-bs-toggle="dropdown">
                        <i class="fa-regular fa-bell"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-2 border-top-0 rounded-0 rounded-bottom shadow-sm">
                        <li>
                            <h6 class="dropdown-header">
                                <i class="fa-regular fa-bell me-2"></i>
                                Notificações
                            </h6>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <p class="p-3">
                                Nenhuma notificação.
                            </p>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown" id="menu-chat">
                    <a class="nav-link text-center" data-bs-toggle="offcanvas" href="#chat-users-panel">
                        <i class="fa-regular fa-comments"></i>
                    </a>
                </li>

                <li class="nav-item dropdown d-flex align-items-center justify-content-center" id="menu-profile">
                    <a class="nav-link d-flex" href="#" data-bs-toggle="dropdown">
                        <span class="user-name fs-5 fw-bolder d-flex justify-content-center">
                            {{ Auth::user()->name }}
                            <i class="fa-solid fa-circle-user fs-2 ms-3"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-top-0 rounded-0 rounded-bottom shadow-sm">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-regular fa-user col-3 align-self-center text-center"></i>
                                    <span class="col-9">Meu Perfil</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-solid fa-clock-rotate-left col-3 align-self-center text-center"></i>
                                    <span class="col-9">Logs de Ações</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <i class="fa-regular fa-file-image col-3 align-self-center text-center"></i>
                                    <span class="col-9">Arquivos</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                            
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <div class="row text-danger">
                                        <i class="fa-solid fa-arrow-right-from-bracket col-3 align-self-center text-center"></i>
                                        <span class="col-9">Sair</span>
                                    </div>
                                </a>

                            </form>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>

    </div>

</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="chat-users-panel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"></button>
    </div>    
    <div class="offcanvas-body p-4">
        <h5 class="offcanvas-title">
            <i class="fa-regular fa-comments me-2 fs-6"></i>
            Usuários
        </h5>
        <hr class="nav-divider">
        <ul class="navbar-nav">
        </ul>
    </div>
</div>