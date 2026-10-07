<?php
require_once __DIR__ . '/../includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="h4 fw-bold text-dark mb-1">Course Catalog</h2>
        <p class="text-secondary small mb-0">Manage training courses, curricula, and enrollment metrics.</p>
    </div>
    <a href="courses/create.php" class="btn btn-success shadow-sm">
        <i class="bi bi-journal-plus me-1"></i> Add Course
    </a>
</div>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span class="fw-semibold text-dark">
            <i class="bi bi-journal-bookmark-fill me-2 text-success"></i> All Courses (4)
        </span>
    </div>
    <div class="table-responsive">
        <table class="table table-custom mb-0">
            <thead>
                <tr>
                    <th style="width: 70px;">ID</th>
                    <th>Course Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Students Enrolled</th>
                    <th class="text-end" style="width: 180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                        <td colspan="6" class="text-center py-4 text-muted">
                            No courses available yet. Click "Add Course" to create the first curriculum.
                        </td>
                    </tr> -->
                <tr>
                    <td class="text-secondary fw-semibold">#1</td>
                    <td class="fw-semibold text-dark">
                        <a href="courses/show.php?id=1" class="text-dark text-decoration-none">
                            PHP Crash Course
                        </a>
                    </td>
                    <td>
                        <span class="text-muted small text-truncate d-inline-block" style="max-width: 320px;">
                            Learn PHP from scratch and build web applications.
                        </span>
                    </td>
                    <td>
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                            $5000
                        </span>
                    </td>
                    <td>
                        <span class="badge bg-info-subtle text-info-emphasis border border-info-subtle badge-count">
                            <i class="bi bi-people-fill me-1"></i>
                            14
                        </span>
                    </td>
                    <td class="text-end">
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="courses/show.php?id=1"
                                class="btn btn-outline-info"
                                title="View Course & Students">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="courses/edit.php?id=1"
                                class="btn btn-outline-warning"
                                title="Edit Course">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="courses/delete.php?id=1"
                                class="btn btn-outline-danger"
                                onclick="return confirm('Are you sure you want to delete course &quot;PHP Crash Course&quot;? All associated enrollments will be deleted.');"
                                title="Delete Course">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-secondary fw-semibold">#1</td>
                    <td class="fw-semibold text-dark">
                        <a href="courses/show.php?id=1" class="text-dark text-decoration-none">
                            PHP Crash Course
                        </a>
                    </td>
                    <td>
                        <span class="text-muted small text-truncate d-inline-block" style="max-width: 320px;">
                            Learn PHP from scratch and build web applications.
                        </span>
                    </td>
                    <td>
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                            $5000
                        </span>
                    </td>
                    <td>
                        <span class="badge bg-info-subtle text-info-emphasis border border-info-subtle badge-count">
                            <i class="bi bi-people-fill me-1"></i>
                            14
                        </span>
                    </td>
                    <td class="text-end">
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="courses/show.php?id=1"
                                class="btn btn-outline-info"
                                title="View Course & Students">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="courses/edit.php?id=1"
                                class="btn btn-outline-warning"
                                title="Edit Course">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="courses/delete.php?id=1"
                                class="btn btn-outline-danger"
                                onclick="return confirm('Are you sure you want to delete course &quot;PHP Crash Course&quot;? All associated enrollments will be deleted.');"
                                title="Delete Course">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-secondary fw-semibold">#1</td>
                    <td class="fw-semibold text-dark">
                        <a href="courses/show.php?id=1" class="text-dark text-decoration-none">
                            PHP Crash Course
                        </a>
                    </td>
                    <td>
                        <span class="text-muted small text-truncate d-inline-block" style="max-width: 320px;">
                            Learn PHP from scratch and build web applications.
                        </span>
                    </td>
                    <td>
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                            $5000
                        </span>
                    </td>
                    <td>
                        <span class="badge bg-info-subtle text-info-emphasis border border-info-subtle badge-count">
                            <i class="bi bi-people-fill me-1"></i>
                            14
                        </span>
                    </td>
                    <td class="text-end">
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="courses/show.php?id=1"
                                class="btn btn-outline-info"
                                title="View Course & Students">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="courses/edit.php?id=1"
                                class="btn btn-outline-warning"
                                title="Edit Course">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="courses/delete.php?id=1"
                                class="btn btn-outline-danger"
                                onclick="return confirm('Are you sure you want to delete course &quot;PHP Crash Course&quot;? All associated enrollments will be deleted.');"
                                title="Delete Course">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>