@extends('layouts')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Progress /</span> Leaderboard</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Top 10 </h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Username</th>
                <th>Cases Studies Solved</th>
                <th>Collaborations</th>
                <th>Order</th>
                <th>Contact</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Ahmad Ibrahim</strong></td>
                <td>39</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sami Khalid"
                        >
                            <img src="../assets/img/avatars/ffss.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sarah Mansour"
                        >
                            <img src="../assets/img/avatars/ffss3.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Mohammed Ayman"
                        >
                            <img src="../assets/img/avatars/ffss2.jpeg" alt="Avatar" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">1</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bxl-linkedin me-1"></i> Contact</a
                            >
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Sarah Ahmad</strong></td>
                <td>37</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sami Khalid"
                        >
                            <img src="../assets/img/avatars/ffss.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sarah Mansour"
                        >
                            <img src="../assets/img/avatars/ffss3.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Mohammed Ayman"
                        >
                            <img src="../assets/img/avatars/ffss2.jpeg" alt="Avatar" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">2</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bxl-linkedin me-1"></i> Contact</a
                            >
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Nora Khalid</strong></td>
                <td>29</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sami Khalid"
                        >
                            <img src="../assets/img/avatars/ffss.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sarah Mansour"
                        >
                            <img src="../assets/img/avatars/ffss3.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Mohammed Ayman"
                        >
                            <img src="../assets/img/avatars/ffss2.jpeg" alt="Avatar" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">3</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bxl-linkedin me-1"></i> Contact</a
                            >
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Abdullellah Alqahtani</strong>
                </td>
                <td>26</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sami Khalid"
                        >
                            <img src="../assets/img/avatars/ffss.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sarah Mansour"
                        >
                            <img src="../assets/img/avatars/ffss3.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Mohammed Ayman"
                        >
                            <img src="../assets/img/avatars/ffss2.jpeg" alt="Avatar" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">4</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bxl-linkedin me-1"></i> Contact</a
                            >
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Omar Basel</strong>
                </td>
                <td>23</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sami Khalid"
                        >
                            <img src="../assets/img/avatars/ffss.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sarah Mansour"
                        >
                            <img src="../assets/img/avatars/ffss3.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Mohammed Ayman"
                        >
                            <img src="../assets/img/avatars/ffss2.jpeg" alt="Avatar" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">5</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bxl-linkedin me-1"></i> Contact</a
                            >
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Ibrahim Alkathiri</strong>
                </td>
                <td>22</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sami Khalid"
                        >
                            <img src="../assets/img/avatars/ffss.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sarah Mansour"
                        >
                            <img src="../assets/img/avatars/ffss3.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Mohammed Ayman"
                        >
                            <img src="../assets/img/avatars/ffss2.jpeg" alt="Avatar" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">6</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bxl-linkedin me-1"></i> Contact</a
                            >
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Salma Dhari</strong>
                </td>
                <td>19</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sami Khalid"
                        >
                            <img src="../assets/img/avatars/ffss.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sarah Mansour"
                        >
                            <img src="../assets/img/avatars/ffss3.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Mohammed Ayman"
                        >
                            <img src="../assets/img/avatars/ffss2.jpeg" alt="Avatar" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">7</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bxl-linkedin me-1"></i> Contact</a
                            >
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Kholud Alharthi</strong>
                </td>
                <td>9</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sami Khalid"
                        >
                            <img src="../assets/img/avatars/ffss.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sarah Mansour"
                        >
                            <img src="../assets/img/avatars/ffss3.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Mohammed Ayman"
                        >
                            <img src="../assets/img/avatars/ffss2.jpeg" alt="Avatar" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">8</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bxl-linkedin me-1"></i> Contact</a
                            >
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Ghada Naser</strong>
                </td>
                <td>5</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sami Khalid"
                        >
                            <img src="../assets/img/avatars/ffss.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sarah Mansour"
                        >
                            <img src="../assets/img/avatars/ffss3.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Mohammed Ayman"
                        >
                            <img src="../assets/img/avatars/ffss2.jpeg" alt="Avatar" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">9</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bxl-linkedin me-1"></i> Contact</a
                            >
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Faisal Hasan</strong>
                </td>
                <td>3</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sami Khalid"
                        >
                            <img src="../assets/img/avatars/ffss.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sarah Mansour"
                        >
                            <img src="../assets/img/avatars/ffss3.jpg" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Mohammed Ayman"
                        >
                            <img src="../assets/img/avatars/ffss2.jpeg" alt="Avatar" class="rounded-circle" />
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">10</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bxl-linkedin me-1"></i> Contact</a
                            >
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->

    </div>
@endsection
